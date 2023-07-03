<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\HistoryProduct;
use Barryvdh\DomPDF\Facade as PDF;
use Livewire\WithFileUploads;
//log
use App\Models\Systemlog;

class Products extends Component
{
    use WithFileUploads;
    public $products, 
    $product_type_id,
    $product_name,
    $product_description,
    $product_stock,
    $product_price,
    $product_cost,
    $product_amount,
    $product_image,
    $product_state,
    $typeproducts,
    $product_type,
    $product_add_description,
    $product_add_inventory,
    $selectproducts;


    public $updateMode = false;
    public function render()
    {

        $this->products = Product::all();
        $this->selectproducts = ProductType::all();
        return view('livewire.products.products');
    }

    private function resetInputFields(){
        $this->product_type_id = '';
        $this->product_name = '';
        $this->product_description = '';
        $this->product_stock = '';
        $this->product_price = '';
        $this->product_amount = '';
        $this->product_image = '';
        $this->product_cost = '';
    }

    public function store()
    {
        
        $validatedDate = $this->validate([
            'product_type_id' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_stock' => 'required',
            'product_price' => 'required',
            'product_cost' => 'required',
            'product_amount' => 'required',
            'product_image' => 'required',
        ]);

        $image= $this->product_image->store('productimages', 'public');
        //$this->product_image= $image;
        Product::create([
            'product_type_id' => $this->product_type_id,
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
            'product_stock' => $this->product_stock,
            'product_price' => $this->product_price,
            'product_cost' => $this->product_cost,
            'product_amount' => $this->product_amount,
            'product_image' => $image,
            'product_state' => 'Activo',
        ]);

        //log
        $mensaje = 'Ingresó a productos y registró '.$this->product_name;
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);

        session()->flash('message', 'Producto registrado correctamente');
        $this->resetInputFields();
        $this->emit('userStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $product = Product::where('id',$id)->first();
        $this->product_id = $id;
        $this->product_type_id = $product->product_type_id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
        $this->product_stock = $product->product_stock;
        $this->product_price = $product->product_price;
        $this->product_cost = $product->product_cost;
        $this->product_amount = $product->product_amount;
        $this->product_image= $product->product_image;
        $this->product_state= $product->product_state;
        $type=ProductType::where('id',$product->product_type_id)->first();
        $this->product_type=$type->product_name;
        $this->typeproducts = ProductType::all();

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {

        $image= $this->product_image->store('productimages', 'public');
        Product::where('id', $this->product_id)->update([
            'product_type_id' => $this->product_type_id,
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
            'product_stock' => $this->product_stock,
            'product_price' => $this->product_price,
            'product_cost' => $this->product_cost,
            'product_amount' => $this->product_amount,
            'product_image' => $image,
        ]);
        session()->flash('message', 'Producto actualizado');
        
    }
    public function active($id)
    {
        Product::find($id)->update(['product_state'=>'Activo']);
        session()->flash('message', 'Producto Activado');
    }
    public function delete($id)
    {
        Product::find($id)->update(['product_state'=>'Desactivado']);
        session()->flash('message', 'Producto Desactivado');
    }
    public function add($id)
    {
        # code...
        $this->updateMode = true;
        $product = Product::where('id',$id)->first();
        $this->product_id = $id;
        $this->product_type_id = $product->product_type_id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
        $this->product_stock = $product->product_stock;
        $this->product_price = $product->product_price;
        $this->product_cost = $product->product_cost;
        $this->product_amount = $product->product_amount;
        $this->product_image= $product->product_image;
        $this->product_state= $product->product_state;
        $type=ProductType::where('id',$product->product_type_id)->first();
        $this->product_type=$type->product_name;
        $this->typeproducts = ProductType::all();
    }
    public function addition()
    {
        # code...
        $current_product = Product::find($this->product_id);
        $new_addition = $current_product->product_amount + $this->product_add_inventory;
        $new_stock = $current_product->product_stock + $this->product_add_inventory;
        Product::where('id', $this->product_id)->update([
            'product_amount' => $new_addition,
            'product_stock' => $new_stock,
        ]);
        HistoryProduct::create([
            'history_stock' => $this->product_stock,
            'history_amount' => $this->product_amount,
            'product_id' => $this->product_id,
            'user_id' => '1',
            'history_add_product' => $this->product_add_inventory,
            'history_description' => $this->product_add_description,
        ]);
        session()->flash('message', 'Adición completada con éxito!');
    }
    public function history()
    {
        # code...
        $products = HistoryProduct::all();
        session()->flash('message', 'Se ha realizado el historial con éxito!');
        $pdf = PDF::loadView('Historyproducts', compact('products'))->output();
        return response()->streamDownload(
        fn() => print($pdf),'HistorialProductos.pdf'
);
    }
/*
    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }*/
}
