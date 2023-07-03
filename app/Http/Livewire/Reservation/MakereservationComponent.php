<?php

namespace App\Http\Livewire\Reservation;

use Livewire\Component;
use App\Models\Reservation;
use App\Models\Customer;
class MakereservationComponent extends Component
{
    public $reservation_description,
            $reservation_date,
            $reservation_count,
            $customer_id,
            $reservation_state,
            $reservation_id,
            $reservations,
            $customers, 
            $name,
            $surname,
            $department,
            $ci,
            $email,
            $phone;
            
    public function render()
    {
        return view('livewire.reservation.makereservation-component');
    }
    private function resetInputFields(){
        $this->name = '';
        $this->surname = '';
        $this->ci = '';
        $this->email = '';
        $this->phone = '';
        $this->reservation_date = '';
        
    }

    public function store()
    {
        //session()->flash('message', 'Casillero actualizado');
        //dd("dsfdasfadsfads");
        # code...
        //dd($this->reservation_date);
        if ($this->reservation_date < date('Y-m-d') ) {
            # code...
            session()->flash('message', 'No podemos realizar la reserva para dias antes');
        } else {
            # code...
            //dd("fecha correcta");
        
            $customer=Customer::create([
                'name' =>$this->name,
                'surname' => $this->surname,
                'department' => $this->department,
                'ci' => $this->ci,
                'email' => $this->email,
                'customer_phone' => $this->phone
            ]);
    
            Reservation::create([
                'reservation_description' => 'Sin Confirmar',
                'reservation_date' => $this->reservation_date,
                'customer_id' => $customer->id,
                'reservation_count' => $this->reservation_count,
                'reservation_state' => 'Activo'
            ]);
            session()->flash('message', 'Se ha realizado tu reserva te esperamos');
            $this->resetInputFields();
        }
        
    }
    public function submit()
    {
        //session()->flash('message', 'Casillero actualizado');
        //dd("dsfdasfadsfads");
        # code...
        dd(date('Y-m-d')+1);
        if ($this->reservation_date < date('Y-m-d') ) {
            # code...
            /*$customer=Customer::create([
                'name' =>$this->name,
                'surname' => $this->surname,
                'department' => $this->department,
                'ci' => $this->ci,
                'email' => $this->email,
                'customer_phone' => $this->phone
            ]);
    
            Reservation::create([
                'reservation_description' => $this->reservation_description,
                'reservation_date' => $this->reservation_date,
                'customer_id' => $customer->id,
                'reservation_count' => $this->reservation_count,
                'reservation_state' => 'Activo'
            ]);*/

            dd("fecha incorrecta");
        } else {
            # code...
            dd("fecha correcta");
        }
        
    }
}
