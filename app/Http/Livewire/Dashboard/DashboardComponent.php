<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\Consumption;
use App\Models\Customer;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
class DashboardComponent extends Component
{
    public $data_products_today,
            $datausers,
            $datacustomerstoday,
            $total_sales_today,
            $total_sales,
            $datachart1;
    public $products, 
    $product_type_id,
    $product_name,
    $product_description,
    $product_stock,
    $product_price,
    $product_amount,
    $product_image;

    public function render()
    {
/*$this->data_products_today;

*/
        $totalsales=0;
        $datasales= Invoice::where('invoice_date',date('Y-m-d'))->get();
        foreach ($datasales as $sales_today) {
            # code...
            $totalsales=$totalsales+$sales_today->invoice_price;
        }
        $totalusers=User::count();
        $datacustomers=Customer::whereDate('created_at','=',date('Y-m-d'))->count();
        $dataprice=Invoice::all();
        $finalprice=0;
        foreach ($dataprice as $totalprice) {
            # code...
            $finalprice=$finalprice+$totalprice->invoice_price;
        }
        $this->datausers=$totalusers;
        $this->datacustomerstoday=$datacustomers;
        $this->data_sales_today=$totalsales;
        $this->total_sales=$finalprice;
        $this->datachart1='200';
        return view('livewire.dashboard.dashboard-component');
    }
}
