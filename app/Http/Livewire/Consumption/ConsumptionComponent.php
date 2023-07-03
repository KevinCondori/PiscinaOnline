<?php

namespace App\Http\Livewire\Consumption;

use Livewire\Component;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Consumption;

//log
use App\Models\Systemlog;
class ConsumptionComponent extends Component
{
    public 
    $product_type_id,
    $product_name,
    $product_description,
    $product_stock,
    $product_price,
    $product_amount,
    $product_image,
    $product_id;
    public $customers,
    $customer_id,
    $user_id,
    $consumption_date,
    $consumption_amount,
    $consumption_description,
    $menuproducts,
    $showmenu1,
    $search,
    $dato2;


    //public $customers;
    public $updateMode = false;
    public function render()
    {
        //$this->products = Product::all();
        $this->customers=Customer::all();
        $this->dato2=0;
        return view('livewire.consumption.consumption-component', [
            'products' => Product::where('product_type_id', $this->search)->get(),
        ]);
    
        //return view('livewire.consumption.consumption-component');
    }
    private function resetInputFields(){
        $this->product_id = '';
        $this->product_name = '';
        $this->product_precio = '';
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $product = Product::where('id',$id)->first();
        $this->customers=Customer::all();
        $this->product_id = $id;
        $this->product_name = $product->product_name;
        $this->product_price = $product->product_price;

        //obtenemos los datos del cliente para asignar el producto

      

        
    }

    public function cancel()
    {
        //dd("dsfadsfasdf");
        $this->updateMode = false;
        $this->resetInputFields();


    }
    
    public function update()
    {
//dd($this->product_id);
        
      /*  $validatedDate = $this->validate([
            'customer_id' => 'required',
    'user_id' => 'required',
    //'consumption_date' => 'required',
    'consumption_amount' => 'required',
    //'consumption_description' => 'required',
        ]);*/
//dd($this->customer_id);

        if ($this->product_id) {
            
            Consumption::create([
                'customer_id' => $this->customer_id,
                'user_id' => auth()->user()->id,
                'product_id'=> $this->product_id,
                'consumption_date' => date('Y-m-d'),
                'consumption_amount' => $this->consumption_amount,
                'consumption_description' => 'Pedido',
            ]);

            $menosproducto=Product::where('id',$this->product_id)->first();
            $nuevostock=$menosproducto->product_stock-$this->consumption_amount;
            //dd($nuevostock);
            Product::find($this->product_id)->update(['product_stock'=> $nuevostock]);
            $this->updateMode = false;
            //log
        $mensaje = 'Ingresó a consumo y registró un pedido de '.$menosproducto->product_name;
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);
        //fin log
            session()->flash('message', 'Pedido realizado con exito');
            $this->resetInputFields();
        }
    }


    public function showmenu($id)
    {
        # code...
        //$this->menuproducts=Product::where('product_type_id',$id)->get();
        //session()->flash('showmenu1', '1');
$this->search=$id;
$this->dato2=1;
    }
}
