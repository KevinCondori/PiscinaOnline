<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use App\Models\Post;
use Livewire\WithFileUploads;

class EventComponent extends Component
{
    use WithFileUploads;
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
            $today_event;
    public function render()
    {
        $this->today_event=date('Y-m-d');
        //dd($this->today_event);
        $this->events=Event::all();
        return view('livewire.event.event-component');
    }
    private function resetInputFields(){
            $this->eventname = '';
            $this->user_id = '';
            $this->eventdescription = '';
            $this->eventpost = '';
            $this->eventimage = '';
            $this->event_date = '';
            $this->event_state = '';
            $this->event_price = '';
            $this->event_type = '';
            $this->event_public = '';
            $this->customer_id = '';
            $this->event_customer = '';
            $this->event_ci_customer = '';
    }
    public function submit()
    {
        # code...
        if ($this->descriptionpost=='' && $this->namepost=='') {
            # code...
            //dd('privadooo');
            $this->event_public='No';
            $image= $this->eventimage->store('postimages', 'public');
            Event::create([
                'eventname' => $this->eventname,
                'user_id' => '1',
                'eventdescription' => $this->eventdescription,
                'eventpost' => $this->eventpost,
                'eventimage' => $image,
                'event_date' => $this->event_date,
                'event_state' => $this->event_state,
                'event_price' =>$this->event_price,
                'event_type' =>$this->event_type,
                'event_public' =>$this->event_public,
                'customer_id' => $this->customer_id,
                'event_customer' => $this->event_customer,
                'event_ci_customer' => $this->event_ci_customer
            ]);
            session()->flash('message', 'Evento realizado con exito puede verlo en el calendario');
            $this->resetInputFields();
        }else{
            //dd('publicooooo');
            $this->event_public='Si';
            $image= $this->eventimage->store('postimages', 'public');
            Event::create([
                'eventname' => $this->eventname,
                'user_id' => '1',
                'eventdescription' => $this->eventdescription,
                'eventpost' => $this->eventpost,
                'eventimage' => $image,
                'event_date' => $this->event_date,
                'event_state' => $this->event_state,
                'event_price' =>$this->event_price,
                'event_type' =>$this->event_type,
                'event_public' =>$this->event_public,
                'customer_id' => $this->customer_id,
                'event_customer' => $this->event_customer,
                'event_ci_customer' => $this->event_ci_customer
            ]);
            $new_invoice=Post::create([
                'namepost'=>$this->namepost,
                'user_id'=>'1',
                'descriptionpost'=>$this->descriptionpost,
                'imagepost'=>$image,
                ]);
            session()->flash('message', 'Evento realizado con exito puede verlo en el calendario');
            $this->resetInputFields();
        }
        
   
    }

    public function public_event()
    {
        # code...
        $this->event_public='Si';
    }
}
