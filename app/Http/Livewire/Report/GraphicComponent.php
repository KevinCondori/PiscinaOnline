<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\Invoice;
use App\Models\Consumption;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class GraphicComponent extends Component
{
    public $sales,
            $saleswithsum,
            $total_sales,
            $from= "2020-11-23",
            $to= "2022-11-23",
            $colours,
            $estado='xd';
            protected $listeners = ['refreshComponent' => '$refresh'];
    public function mount()
    {
        
        $sales_data=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))->groupBy('product_id')->get();
        $i=0;
        //dd($sales_data);

        foreach ($sales_data as $sale) {
            # code...
            $name_product=Product::where('id', $sale->product_id)->first();
            //dd($name_product->product_name);
            $this->sales[] = $name_product->product_name;
            $this->total_sales[] = $sale->total_sales;
            $this->saleswithsum[]= $name_product->product_price * $sale->total_sales;
            $i=$i+1;
        }
        //dd($this->saleswithsum);
        //dd($this->sales);
        /*$productos= array();
        for ($i=0; $i<=count($sales_data); $i++) { 
            # code...
            $name_product=Product::where('id', $sales_data->product_id)->select('product_name')->first();
            //dd($name_product);
            array_push($productos, $name_product);
        }*/
        //dd($productos);
        for ($i=0; $i<=count($sales_data); $i++) {
            $this->colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        //dd($this->colours);
        //dd($this->sales);
        //$this->estado='hola';
        return view('livewire.report.graphic-component');
    }
    public function getgraphic()
    {
        # code...
        $this->estado= 'XDXDXDXDXD';
        //$this->saleswithsum=Invoice::whereDate('created_at',$this->from)->sum('invoice_price');
        //$this->sales=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))->groupBy('product_id')->get();
        $sales_data=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))->whereBetween('consumption_date',[$this->from,$this->to])->groupBy('product_id')->get();
        //dd($sales_data);
        $i=0;
        foreach ($sales_data as $sale) {
            # code...
            $name_product=Product::where('id', $sale->product_id)->first();
            //dd($name_product->product_name);
            $this->sales[] = $name_product->product_name;
            $this->total_sales[] = $sale->total_sales;
            $this->saleswithsum[]= $name_product->product_price * $sale->total_sales;
            $i=$i+1;
        }
        for ($i=0; $i<=count($sales_data); $i++) {
            $this->colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        //$this->emitTo('div', 'refreshComponent');
    }
    public function submit()
    {
        
        # code...
        $this->estado= 'XDXDXDXDXD';
        $sales_data=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))->whereBetween('consumption_date',[$this->from,$this->to])->groupBy('product_id')->get();
        //dd($sales_data);
        $i=0;
        foreach ($sales_data as $sale) {
            # code...
            $name_product=Product::where('id', $sale->product_id)->first();
            //dd($name_product->product_name);
            $this->sales[] = $name_product->product_name;
            $this->total_sales[] = $sale->total_sales;
            $this->saleswithsum[]= $name_product->product_price * $sale->total_sales;
            $i=$i+1;
        }
        for ($i=0; $i<=count($sales_data); $i++) {
            $this->colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
       // $this->mount();
    }
    public function refresh()
    {
        # code...
        return;
    }
}
