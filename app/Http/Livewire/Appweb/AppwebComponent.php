<?php

namespace App\Http\Livewire\Appweb;

use Livewire\Component;
use App\Models\Module;

class AppwebComponent extends Component
{
    public $aboutmodule,
            $modules,
            $moduledescription,
            $modulestate;
    public function render()
    {
        $this->modules=Module::all();
        return view('livewire.appweb.appweb-component');
    }
    public function publishmoduls()
    {
        # code...
        //dd($this->aboutmodule);

    }
    public function active($id)
    {
        # code...
        $update_module_state=Module::where('id',$id)->update(['modulestate'=>'Activado']);
            session()->flash('message', 'Funcionalidad activada');
    }
    public function desactive($id)
    {
        # code...
        $update_module_state=Module::where('id',$id)->update(['modulestate'=>'Desactivado']);
            session()->flash('message', 'Funcionalidad desactivada');
    }
}
