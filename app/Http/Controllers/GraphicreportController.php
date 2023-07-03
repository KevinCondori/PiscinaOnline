<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Consumption;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class GraphicreportController extends Controller
{
    //
    public function index()
    {
        # code...
        $sales_data=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))->groupBy('product_id')->get();
        $i=0;
        foreach ($sales_data as $sale) {
            # code...
            $name_product=Product::where('id', $sale->product_id)->first();
            //dd($name_product->product_name);
            $sales[] = $name_product->product_name;
            $total_sales[] = $sale->total_sales;
            $saleswithsum[]= $name_product->product_price * $sale->total_sales;
            $i=$i+1;
        }
        for ($i=0; $i<=count($sales_data); $i++) {
            $this->colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
       // return $sales;
       //  $labels = $sales->keys();
        //$data = $saleswithsum->values();
        $labels = $sales;
        $data = $saleswithsum;
        $colours = $this->colours;
        $state = '0';
        return view('GraphicReport', compact('labels', 'data', 'colours'));
    }
    public function refrescar(Request $request)
    {
        # code...
        $sales_data=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))
                                ->whereBetween('consumption_date',[$request->from,$request->to])
                                ->groupBy('product_id')
                                ->get();

        $i=0;
        foreach ($sales_data as $sale) {
            # code...
            $name_product=Product::where('id', $sale->product_id)->first();
            //dd($name_product->product_name);
            $sales[] = $name_product->product_name;
            $total_sales[] = $sale->total_sales;
            $saleswithsum[]= $name_product->product_price * $sale->total_sales;
            $i=$i+1;
        }
        for ($i=0; $i<=count($sales_data); $i++) {
            $this->colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
       // return $sales;
       //  $labels = $sales->keys();
        //$data = $saleswithsum->values();
        $labels = $sales;
        $data = $saleswithsum;
        $colours = $this->colours;
        //$state = '1';

         // Create an Object
        $form_data = new \stdClass();
  
        // Added property to the object
        $form_data->from = $request->from;
        $form_data->to = $request->to;
        session(['status'=>'wow nuevo dato']);
        session(['state'=>'1']);    
        //return view('GraphicReport', compact('labels', 'data', 'colours', 'state', 'form_data'))->with('status', 'Nuevos datos');
        return view('GraphicReport', compact('labels', 'data', 'colours', 'form_data'));

        
        //return $request;
    }


}
