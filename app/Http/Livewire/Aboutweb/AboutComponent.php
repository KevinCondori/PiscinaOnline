<?php

namespace App\Http\Livewire\Aboutweb;

use Livewire\Component;
use App\Models\Moduleabout;
use Illuminate\Http\Request;

class AboutComponent extends Component
{
    public $aboutdata,$dataabout,
            $newexperience,
            $newdescription;
    public function render()
    {
        $this->dataabout=Moduleabout::first();
       // $datafromabout=Moduleabout::first();
        //$this->newexperience=$datafromabout->aboutexperience;
        //$this->newdescription=$datafromabout->aboutdescription;
        return view('livewire.aboutweb.about-component');
    }
    public function update(Request $request)
    {
        # code...
        //dd($this->newexperience);
        dd($this->newdescription);
    }
}
