<?php

namespace App\Http\Livewire\Entry;

use Livewire\Component;
use App\Models\Locker;
use App\Models\Customer;
use App\Models\CustomerLocker;

//log
use App\Models\Systemlog;


class EntryComponent extends Component
{
    public $entrys;
    public $customer_id,
            $locker_date,
            $lockers, 
            $locker_name, 
            $locker_description, 
            $locker_state, 
            $locker_id;
    public $customers, 
            $name,
            $surname,
            $department,
            $ci,
            $email,
            $phone;
            public $customer,
            $active_new_customer,
            $new_customer_form,
            $is_new_customer;
    public $updateMode = false;
    
    public function render()
    {
        /*
        $this->lockers = Locker::where('locker_available','Disponible')->where('locker_state','Activo')->get();
        $this->customers = Customer::all();
        return view('livewire.entry.entry-component');
    */
    
        $this->lockers = Locker::where('locker_available','Disponible')->where('locker_state','Activo')->get();
        $this->customers = Customer::all();
        return view('livewire.entry.entryversion2-component');
    }
    private function resetInputFields(){
        $this->ci = '';
        $this->locker_name = '';
        $this->surname = '';
    }
    public function edit($id)
    {

        $this->updateMode = true;
        $this->active_new_customer='invisible';

        $this->new_customer_form='visible';
        $this->is_new_customer='no';
        $this->locker_id=$id;
        $data_locker=Locker::where('id',$id)->first();
        $this->locker_name=$data_locker->locker_name;

        //dd($this->locker_id);
        //obtenemos los datos del cliente para asignar el producto
    }
    public function cancel()
    {
    
        $this->updateMode = false;
        $this->resetInputFields();


    }
    public function buscarid()
    {
        //$this->updateMode = true;
        $customer=Customer::where('ci',$this->ci)->first();
        if (is_null($customer)==false) {
            # code...
            //$this->ci="holaaa";
            //$customer=Customer::where('ci',$this->ci)->first();
            //$this->active_new_customer='';
            $this->ci= $customer->ci;
            $this->surname= $customer->surname;
            $this->customer_id=$customer->id;
            //dd($customer->surname);

        }else {
            # code...
            $this->active_new_customer='visible';
            $this->new_customer_form='invisible';
            $this->is_new_customer='yes';
            //session()->flash('active_new_customer', $this->active_new_customer);
            //session()->flash('active_new_form', 'formulario nuevo activado');
        }
        //obtenemos los datos del cliente para asignar el producto
    }


    public function update()
    {
        # code...
        //dd($this->customer_id);
        
        if ($this->is_new_customer=='yes') {
            # code...
            /*
This code is when customer is new
            */
$new_customer=Customer::create([
    'name' => $this->name,
    'surname' => $this->surname,
    'department' => $this->department,
    'ci' => $this->ci,
    'email' => $this->email,
    'customer_phone' => $this->phone,
]);
//dd($new_customer->id);
$new_locker_customer=CustomerLocker::create([
    'locker_id' => $this->locker_id,
'customer_id' => $new_customer->id,
'locker_date' => date('Y-m-d'),
'locker_state' => 'Ocupado',
]);

$update_locker_state=Locker::where('id',$this->locker_id)->update(['locker_available'=>'Ocupado']);
session()->flash('message', 'Casillero asignado el cliente puede ingresar');
        } else {
            # code...

            /*
This code is when customer is old
            */
            $new_locker_customer=CustomerLocker::create([
                'locker_id' => $this->locker_id,
            'customer_id' => $this->customer_id,
            'locker_date' => date('Y-m-d'),
            'locker_state' => 'Ocupado',
            ]);



            $update_locker_state=Locker::where('id',$this->locker_id)->update(['locker_available'=>'Ocupado']);
           
            //log
        $mensaje = 'Ingresó a asignación de casileros y asignó un casillero a '.$this->name.'con CI: '.$this->ci;
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);
           
            session()->flash('message', 'Casillero asignado el cliente puede ingresar');
        }
        
        
        


    }


}
