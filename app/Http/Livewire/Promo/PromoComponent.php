<?php

namespace App\Http\Livewire\Promo;

use Livewire\Component;
use App\Models\Promotion;
use App\Models\Post;
use Livewire\WithFileUploads;
/*use Illuminate\Suport\Facades\Http;
use Illuminate\Suport\Facades\Http;*/
use Illuminate\Support\Facades\Http;
use App\Models\Customer;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
//log
use App\Models\Systemlog;

class PromoComponent extends Component
{

    use WithFileUploads;
    public $promo_id,
            $promo_name,
            $promo_description,
            $promo_code,
            $promo_from,
            $promo_to,
            $promo_discount,
            $promo_active,
            $promo_message,
            $promo_type,
            $promo_state,
            $promo_image,
            $promo_canal,
            $promotion;

    public function render()
    {
        $this->promotions=Promotion::all();
        return view('livewire.promo.promo-component');
    }
    public function store()
    {
        # code...
        /*
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosarray = $usuarios->json();
        dd($usuariosarray);
*/
       /* $notifycustomers = HTTP::get('localhost:3000/promoactive/1');
                $customersarray = $notifycustomers->json();
         */   
        //log
        $mensaje = 'Ingresó a promociones y registró '.$this->promo_name;
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);


        $image= $this->promo_image->store('promoimages', 'public');
        $image_post = $this->promo_image->store('postimages', 'public');

        $new_promo=Promotion::create([
            'promo_name' => $this->promo_name,
            'promo_description' => $this->promo_description,
            'promo_code' => $this->promo_code,
            'promo_from' => $this->promo_from,
            'promo_to' => $this->promo_to,
            'promo_discount' => $this->promo_discount,
            'promo_active' => '0',
            'promo_message' => $this->promo_message,
            'promo_type' => $this->promo_type,
            //'promo_type' => 'promo de consumo',
            'promo_image'=> $image,
            'promo_canal' => $this->promo_canal,
            'promo_state' => 'Activado',

        ]);
    //dd('guardado');
        switch ($this->promo_canal) {
            case '1':
                # code...
                #This code is for social networks
                /*$usuarios = HTTP::get('localhost:3000/onlysocialnetwork/'+$new_promo->id);
                $usuariosarray = $usuarios->json();
                dd($usuariosarray);*/
                $apipromo = Promotion::latest('id')->first();
                $notifycustomers = HTTP::get('http://localhost:5000/promotion/'.$apipromo->id);
                $customersarray = $notifycustomers->json();

                session()->flash('message', 'Promoción realizada con exito');
                $this->resetInputFields();
                break;
            case '2':
                # code...
                #This code is for web page
                $apipromo = Promotion::latest('id')->first();
                $customers = Customer::all();
                /*foreach ($customers as $customer) {
                    # code...
                    $subject = "Nueva promoción";
                    $for = $customer->email;
                    $msj = $apipromo->promo_message.' usa el cupon: '.$apipromo->promo_code;
                    if ($customer->email == 'denis@gmail.com' || 
                        $customer->email == 'natalia@gmail.com' ||
                        $customer->email == 'teddy@gmail.com' ||
                        $customer->email == 'vanessa@gmail.com' ||
                        $customer->email == 'andrea@gmail.com'
                        ) {
                        # code...

                        //valida el correo

                    }else {
                        # code...
                        Mail::to($customer->email)->send(new TestMail($apipromo->promo_message));
                    }
                     
                    //$subtotal = $subtotal + ( $invoice_detail->product_price * $invoice_detail->consumption_amount );
                }*/
                #create post about promotion
                $new_post = Post::create([
                    'namepost'=> $this->promo_name,
                    'user_id'=> auth()->user()->id,
                    'descriptionpost' => $this->promo_description,
                    'imagepost' => $image_post,
                ]);

                session()->flash('message', 'Promoción realizada con exito');
                $this->resetInputFields();

                break;
                case '3':
                    # code...
                    #This code is for all social networks
                    $apipromo = Promotion::latest('id')->first();
                    //dd($apipromo);
                    $notifycustomers = HTTP::get('http://localhost:5000/promotion/'.$apipromo->id);
                    $customersarray = $notifycustomers->json();

                   /* $usuarios = HTTP::get('localhost:3000/socialnetwork/'+$new_promo->id);
                    $usuariosarray = $usuarios->json();*/
                    #create post about promotion
                    $new_post = Post::create([
                        'namepost'=> $this->promo_name,
                        'user_id'=> auth()->user()->id,
                        'descriptionpost' => $this->promo_description,
                        'imagepost' => $image_post,
                    ]);
    
                    session()->flash('message', 'Promoción realizada con exito');
                    $this->resetInputFields();

                break;

            default:
                # code...
                break;
        }



        
    }
    private function resetInputFields(){
        $this->promo_name = '';
        $this->promo_description = '';
        $this->promo_code = '';
        $this->promo_from = '';
        $this->promo_to = '';
        $this->promo_discount = '';
        $this->promo_active = '';
        $this->promo_message = '';
        $this->promo_type = '';
        $this->promo_state = '';
    }
    public function cancel()
    {
        # code...
        $this->resetInputFields();
    }
    public function submit()
    {
        # code...
        dd('enviadoooo');
        $validator = Validator::make($input, $rules);
    }
}
