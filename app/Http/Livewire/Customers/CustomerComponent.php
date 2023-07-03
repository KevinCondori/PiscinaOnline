<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Products extends Component
{
    public $customers, 
    $name,
    $surname,
    $department,
    $ci,
    $email;
    public $updateMode = false;
    public function render()
    {
        $this->customers = Customer::all();
       // dd("holaaaa");
        return view('livewire.customer.customer-component');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->surname = '';
        $this->department = '';
        $this->ci = '';
        $this->email = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'product_type_id' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_stock' => 'required',
            'product_price' => 'required',
            'product_amount' => 'required',
            'product_image' => 'required',
        ]);

        Product::create($validatedDate);

        session()->flash('message', 'Producto registrado correctamente');

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }
/*
    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = Product::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }*/
}
