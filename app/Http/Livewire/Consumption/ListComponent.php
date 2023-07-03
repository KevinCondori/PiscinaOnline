<?php

namespace App\Http\Livewire\Consumption;

use Livewire\Component;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Consumption;
class ListComponent extends Component
{
    public $consumptions;
    public function render()
    {
        $this->consumptions=Consumption::join('customers','customers.id','consumptions.customer_id')
                                        ->join('products','products.id','=','consumptions.product_id')
                                        ->select('consumptions.consumption_amount',
                                        'products.product_name',
                                        'customers.name',
                                        'customers.surname',
                                        'customers.ci',
                                        'consumptions.consumption_date',
                                        'consumptions.id',
                                        'consumptions.created_at')
                                        ->where('consumptions.consumption_description','Pedido')
                                        ->where('consumptions.consumption_date',date('Y-m-d'))->get();
        return view('livewire.consumption.list-component');
    }
    public function entregarpedido($id)
    {
        # code...
        Consumption::find($id)->update(['consumption_description'=>'Pedido Entregado']);
        session()->flash('message', 'Producto entregado exitosamente');

    }
}
