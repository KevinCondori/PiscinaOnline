<?php

namespace App\Http\Livewire;
use App\Models\ProductType;
use Livewire\Component;

class ProductsType extends Component
{
    public $products, $product_name, $product_description, $product_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->products=ProductType::all();
        return view('livewire.products-type');
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
            
        ]);
    
        ProductType::updateOrCreate(['id' => $this->product_id], [
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
        ]);

        session()->flash('message', $this->product_id ? 'Producto Actualizado.' : 'Producto creado.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $product = ProductType::findOrFail($id);
        $this->product_id = $id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
    
        $this->openModalPopover();
    }
    
    public function delete($id)
    {
        ProductType::find($id)->delete();
        session()->flash('message', 'Producto eliminado.');
    }
}
