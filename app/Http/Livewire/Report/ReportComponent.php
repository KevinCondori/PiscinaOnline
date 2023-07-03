<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Consumption;
use App\Models\Invoice;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
//Use PDF;
use Barryvdh\DomPDF\Facade as PDF;

//log
use App\Models\Systemlog;

class ReportComponent extends Component
{
    public $customers,
            $reportselected,
            $datereport,
            $reportfile,
            $viewreport;    
    public function render()
    {
        $this->customers=Customer::all();
        return view('livewire.report.report-component');
    }
    public function getreportdate()
    {
        # code...
        //log
        $mensaje = 'Ingresó a reportes y genero un reporte';
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);


        if ($this->reportselected=='newcustomers') {
            # code...

            $reportname='emitido'.rand(10,99).date('Y-m-d');
        
        $this->reportfile='/reportcustomers/'.$reportname.'.pdf';
        
        $this->viewreport='active';
        $reportbydate=Customer::whereDate('created_at',$this->datereport)->get();
        $view = view('reports.customersreport')->with(compact('reportbydate'));
        $html = $view->render();
        $pdf = PDF::loadHTML($html)->save(public_path() . '/'.$this->reportfile);

        } elseif ($this->reportselected=='salesreport') {
            # code...

        $reportname='emitido'.rand(10,99).date('Y-m-d');
        
        $this->reportfile='/reportsales/'.$reportname.'.pdf';
        
        $this->viewreport='active';
        $reportbydate=Invoice::whereDate('created_at',$this->datereport)->sum('invoice_price');
        $reportbydate2=Invoice::whereDate('created_at',$this->datereport)->get();
        //dd($reportbydate);
        $view = view('reports.salesreport')->with(compact('reportbydate'))->with(compact('reportbydate2'));
        $html = $view->render();
        $pdf = PDF::loadHTML($html)->save(public_path() . '/'.$this->reportfile);

        } elseif ($this->reportselected=='consumptionreport') {
            # code...
            $reportname='emitido'.rand(10,99).date('Y-m-d');
        
            $this->reportfile='/reportsconsumption/'.$reportname.'.pdf';
            
            $this->viewreport='active';
            $reportbydate=Consumption::select('product_id', DB::raw('SUM(consumption_amount) as total_sales'))->groupBy('product_id')->get();
            //dd($reportbydate);
            $view = view('reports.consumptionreport')->with(compact('reportbydate'));
            $html = $view->render();
            $pdf = PDF::loadHTML($html)->save(public_path() . '/'.$this->reportfile);
        } elseif ($this->reportselected=='eventreport'){
            $reportname='emitido'.rand(10,99).date('Y-m-d');
        
            $this->reportfile='/reportsevent/'.$reportname.'.pdf';
            
            $this->viewreport='active';
            $reportbydate2=Event::whereDate('created_at',$this->datereport)->get();
            //dd($reportbydate);
            $view = view('reports.eventreport')->with(compact('reportbydate2'));
            $html = $view->render();
            $pdf = PDF::loadHTML($html)->save(public_path() . '/'.$this->reportfile);
        }
    }
    public function graphic()
    {
        # code...
        //dd("cambiando de pantalla");
        //return redirect()->route('', ['parameterKey' => 'value']);
        return view('livewire.report.graphic-component');
    }
}
