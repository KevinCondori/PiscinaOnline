<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserComponent extends Component
{
    public $users, $name, $email, $user_role, $password, $ci, $state, $phone, $surname, $user_id;
    public function render()
    {
        //dd(auth()->id());
        $this->users=User::where('id','<>',auth()->id())->get();
        return view('livewire.user.user-component');
    }
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->state = '';
        $this->ci = '';
        $this->user_role = '';
        $this->surname = '';
    }
    public function store()
    {
        # code...
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'state' => 'Activo',
            'ci' => $this->ci,
            'user_role' => $this->user_role,
            'surname' => $this->surname,
            'password' => Hash::make($this->ci),
        ]);
        session()->flash('message', 'Usuario creado ya cuenta con acceso al sistema');
        $this->resetCreateForm();
    }
    public function edit($id)
    {
        # code...
        $user=User::where('id', $id)->first();
        $this->name=$user->name;
        $this->surname=$user->surname;
        $this->email=$user->email;
        $this->phone=$user->phone;
        $this->state=$user->state;
        $this->ci=$user->ci;
        $this->user_role=$user->user_role;
        $this->user_id=$id;
    }
    public function update()
    {
        # code...
        User::where('id',$this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'state' => $this->state,
            'ci' => $this->ci,
            'user_role' => $this->user_role,
            'surname' => $this->surname,
        ]);
        session()->flash('message', 'Usuario modificado con exito');
        $this->resetCreateForm();
    }
    public function active($id)
    {
        User::find($id)->update(['state'=>'Activo']);
        session()->flash('message', 'Usuario Activado');
    }
    public function delete($id)
    {
        User::find($id)->update(['state'=>'Desactivado']);
        session()->flash('message', 'Usuario Desactivado');
    }
}
