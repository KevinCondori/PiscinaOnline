<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
class PostComponent extends Component
{
    use WithFileUploads;
    public $posts,
            $namepost,
            $descriptionpost,
            $imagepost,
            $post_id,
            $path;
    public function render()
    {
        $this->posts=Post::all();
        $this->path = Storage::path('img1.jpg');
        return view('livewire.post.post-component');
    }
    public function store()
    {
        
        # code...

        $name=time().$this->imagepost->getClientOriginalName();
        //dd($name);
        $this->imagepost->move(public_path().'/postimages/', $name);
        //dd($name2);
        //$image= $this->imagepost->store('postimages', 'public');

        session()->flash('message', 'Publicado con exito');

    }
    public function submit()
    {
        # code...
        
        $image= $this->imagepost->store('postimages', 'public');
        $new_invoice=Post::create([
            'namepost'=>$this->namepost,
            'user_id'=>'1',
            'descriptionpost'=>$this->descriptionpost,
            'imagepost'=>$image,
            ]);
        //dd($image);
        session()->flash('message', 'Publicado con exito');
    }
}
