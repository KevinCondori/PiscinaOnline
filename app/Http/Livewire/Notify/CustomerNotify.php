<?php

namespace App\Http\Livewire\Notify;

use Livewire\Component;
use App\Models\Notification;
use Illuminate\Support\Facades\Http;

//log
use App\Models\Systemlog;

class CustomerNotify extends Component
{
    public $notifications,
            $notification_name,
            $notification_description;


    public function render()
    {
        //$this->notifications = array('id' => '1', 'notification_description' => 'Mensaje de prueba para el sistema', 'created_at' => '2022');
        //return $this->notifications;
        $this->notifications = Notification::all();
        return view('livewire.notify.customer-notify');
    }
    private function resetCreateForm(){
        $this->notification_name = '';
        $this->notification_description = '';
        $this->notification_user = '';
    }
    public function store()
    {
        # code...
        //dd("guardandooooooo");
        //return auth()->user()->id;
        Notification::create([
            'notification_name' => $this->notification_name,
            'notification_description' => $this->notification_description,
            'notification_user' => auth()->user()->id,
        ]);
        $this->resetCreateForm();
        $notificationapi=Notification::latest('id')->first();
        
        //$notifycustomers = HTTP::get('http://localhost:5000/promotion/'.$notificationapi->id);
        $response = Http::post('http://localhost:5000/notification/'.$notificationapi->id, [
                'message' => $notificationapi->notification_description,
                
        ]);
        //log
        $mensaje = 'Ingresó y realizó una notificación: '.$this->notification_name;
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);


        session()->flash('message','Se envió las notificaciones!.');
        $this->resetCreateForm();
    }
    public function demo1()
    {
        # code...
        dd("demo1 funcionando xd");
    }
}
