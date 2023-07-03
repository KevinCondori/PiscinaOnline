<?php

namespace App\Http\Livewire\Typeproducts;

use Livewire\Component;
use App\Models\ProductType;

class TypeproductsComponent extends Component
{
    public $products, $product_name, $product_description, $product_type, $product_id;
    public $isModalOpen = 0;
    public function render()
    {
        $this->products=ProductType::all();
        return view('livewire.typeproducts.typeproducts-component');
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        //$this->mobile = '';
    }
    
    public function store()
    {
        $this->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'typeproduct_state' => 'required'
        ]);
    
        ProductType::updateOrCreate(['id' => $this->product_id], [
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
            'typeproduct_state' => $this->product_type,
        ]);
        session()->flash('message', 'Segmento adicionado con exito');
        //session()->flash('message', $this->product_id ? 'Producto Actualizado.' : 'Producto creado.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $product = ProductType::findOrFail($id);
        $this->product_id = $id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
        $this->product_type = $product->typeproduct_state;
    
        $this->openModalPopover();
    }
    public function update()
    {
        # code...
        ProductType::where('id',$this->product_id)->update([
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
            'typeproduct_state' => $this->product_type,
        ]);
        session()->flash('message', 'Segmento actualizado');
    }
    
    public function active($id)
    {
        ProductType::find($id)->update(['typeproduct_state'=>'Activo']);
        session()->flash('message', 'Segmento Activado');
    }
    public function delete($id)
    {
        ProductType::find($id)->update(['typeproduct_state'=>'Desactivado']);
        session()->flash('message', 'Segmento Desactivado');
    }
}
