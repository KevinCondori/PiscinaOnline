<?php

namespace App\Http\Livewire\Lockers;

use Livewire\Component;
use App\Models\Locker;

class ShowLockers extends Component
{
    public $lockers, $locker_name, $locker_description, $locker_state, $locker_id;
    public $isModalOpen = 0;
    public function render()
    {
        $this->lockers = Locker::all();
        return view('livewire.lockers.show-lockers');
    }
    public function create()
    {
        # code...
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->locker_name = '';
        $this->locker_description = '';
        $this->locker_state = '';
    }
    
    public function store()
    {
        $this->validate([
            'locker_name' => 'required',
            'locker_description' => 'required',
            'locker_state' => 'required',
        ]);
    
        Locker::updateOrCreate(['id' => $this->locker_id], [
            'locker_name' => $this->locker_name,
            'locker_description' => $this->locker_description,
            'locker_state' => $this->locker_state,
        ]);

        session()->flash('message', $this->locker_id ? 'Locker updated.' : 'Locker created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        
        $locker = Locker::findOrFail($id);
        $this->locker_id = $id;
        $this->locker_name = $locker->locker_name;
        $this->locker_description = $locker->locker_description;
        $this->locker_state = $locker->locker_state;
    
        $this->openModalPopover();
    }
    public function update()
    {
        # code...
        Locker::where('id',$this->locker_id)->update([
            'locker_name' => $this->locker_name,
            'locker_description' => $this->locker_description,
            'locker_state' => $this->locker_state,
        ]);
        session()->flash('message', 'Casillero actualizado');
    }
    
    public function active($id)
    {
        Locker::find($id)->update(['locker_state'=>'Activo']);
        session()->flash('message', 'Casillero Activado');
    }
    public function delete($id)
    {
        Locker::find($id)->update(['locker_state'=>'Desactivado']);
        session()->flash('message', 'Casillero Desactivado');
    }
    
}
