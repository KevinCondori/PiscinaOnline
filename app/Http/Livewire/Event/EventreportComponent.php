<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use Barryvdh\DomPDF\Facade as PDF;
class EventreportComponent extends Component
{
    public $events, 
            $eventname,
            $user_id,
            $eventdescription,
            $eventpost,
            $eventimage,
            $event_date,
            $event_state,
            $event_price,
            $event_type,
            $event_public,
            $customer_id,
            $event_customer,
            $event_ci_customer,
            $posts,
            $namepost,
            $descriptionpost,
            $imagepost,
            $post_id,
            $today_event,
            $viewreport,
            $reportfile;
    public function render()
    {
        $this->events=Event::all();
        return view('livewire.event.eventreport-component');
    }
    public function reportevent()
    {
        # code...
        $reportevent=Event::all();
        $reportname='emitido'.rand(10,99).date('Y-m-d');
        
            $this->reportfile='/reportsevent/'.$reportname.'.pdf';
            
            $this->viewreport='active';
            $reportbydate2=Event::all();
            //dd($reportbydate);
            $view = view('reports.eventreport')->with(compact('reportbydate2'));
            $html = $view->render();
            $pdf = PDF::loadHTML($html)->save(public_path() . '/'.$this->reportfile);

    }
    public function edit($id)
    {
        # code...
        $reportevent=Event::all();
        $reportname='emitido'.rand(10,99).date('Y-m-d');
        
            $this->reportfile='/reportsevent/'.$reportname.'.pdf';
            
            $this->viewreport='active';
            $datareport=Event::where('id',$id)->first();

            //dd($reportbydate2);
            $view = view('reports.eventdetail')->with(compact('datareport'));
            $html = $view->render();
            $pdf = PDF::loadHTML($html)->save(public_path() . '/'.$this->reportfile);

    }
}
