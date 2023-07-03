<?php

namespace App\Http\Livewire\Invoice;

use Livewire\Component;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Consumption;
use App\Models\Invoice;
use App\Models\CustomerLocker;
use App\Models\Locker;
use App\Models\Promotion;
use App\Models\CouponUsed;
use App\Models\Invoicecontrol;
use App\Models\Company;
use App\Kevin\ConvertiraLetras;
use QrCode;

//use PDF;
use Barryvdh\DomPDF\Facade as PDF;
//log
use App\Models\Systemlog;
class InvoiceComponent extends Component
{
    public $customers, $customer_id;
    public $consumption_id,
            $company_id,
            $invoice_name,
            $invoice_ci_customer,
            $invoice_price,
            $invoice_date,
            $invoice_description,
            $cupon;
    public $customer_data,
            $invoice_data;
    public  $name,
            $surname,
            $department,
            $ci,
            $email;
            public $total_price,
            $final_price,
            $coupon_ready,
            $coupon_id,
            $coupon_name,
            $coupon_code,
            $coupon_discount,
            $coupon_showdiscount;
        public $invoice_option1, 
                $invoice_option2, 
                $invoice_option3,
                $invoice_data1,
                $pdfdemo,
                $codecontrol,
                $entryprice;

    
    public function render()
    {
      //  $this->customers=Customer::all();
      
        $this->customers=Customer::join('customer_lockers', 'customer_lockers.customer_id', '=', 'customers.id')
        ->join('lockers', 'lockers.id', '=', 'customer_lockers.locker_id')
        ->where('customer_lockers.locker_date',date('Y-m-d'))
        ->where('lockers.locker_available','Ocupado')
        ->select('customers.*', 'lockers.locker_name')
        ->get();
        //dd($this->customers);
        return view('livewire.invoice.invoice-component');
    }
    public function edit($id)
    {
        $this->invoice_data1='visible';
        $this->invoice_data='';
        $this->invoice_ci_customer='';
        $this->invoice_name='';
        //obtenemos los datos del cliente para asignar el producto

        $this->invoice_data=Customer::join('consumptions', 'consumptions.customer_id','=', 'customers.id')
                                ->join('products','products.id','=','consumptions.product_id')
                              ->select('customers.*','consumptions.*','products.product_name', 'products.product_price')
                              ->where('customers.id',$id)
                              ->where('consumptions.consumption_date',date('Y-m-d'))
                              //->groupByRaw('products.product_name')
                              //->groupBy('products.id')
                              ->get();
                              //dd($invoice_data);
       $customer_data=Customer::where('id',$id)->first();
       $this->name= $customer_data->name;
       $this->surname= $customer_data->surname;
       $this->ci=$customer_data->ci;
       $this->customer_id=$customer_data->id;
       //$this->customer_data=Customer::where('id',$id)->first();
       $total_data=0;
       foreach ($this->invoice_data as $newtotal) {
         # code...
         $total_data=$total_data+($newtotal->product_price*$newtotal->consumption_amount);
        
        }       
        $this->total_price=$total_data;
        //adionamos el precio de ingreso a la piscina
        $entrypricedata = Company::first();
        $this->entryprice = $entrypricedata->company_entryprice; 
        $this->final_price=$total_data+$this->entryprice;







        // session()->flash('invoice_data', $this->invoice_data);
                             // session()->flash('message', 'Se ha generado el dettalle de forma correcta');

        
    }
    public function update()
    {
/*


██╗███╗░░██╗██╗░░░██╗░█████╗░██╗░█████╗░███████╗
██║████╗░██║██║░░░██║██╔══██╗██║██╔══██╗██╔════╝
██║██╔██╗██║╚██╗░██╔╝██║░░██║██║██║░░╚═╝█████╗░░
██║██║╚████║░╚████╔╝░██║░░██║██║██║░░██╗██╔══╝░░
██║██║░╚███║░░╚██╔╝░░╚█████╔╝██║╚█████╔╝███████╗
╚═╝╚═╝░░╚══╝░░░╚═╝░░░░╚════╝░╚═╝░╚════╝░╚══════╝

*/
        //dd(Invoice::orderBy('id', 'desc')->first()->invoice_number);
        //dd(date('Ymd'));
        $new_invoice_number = 0;
        $current_invoice=Invoice::orderBy('id', 'desc')->first()->invoice_number;
        $invoice_auth=Invoicecontrol::first()->control_auth;
        $invoice_limit_date=Invoicecontrol::first()->control_date;
        $invoice_nit=Company::first()->company_nit;
        $new_invoice_number= $current_invoice + 1;//numero de factura
        //dd($this->invoice_option1);
        $invoice_key=Invoicecontrol::first()->control_key;
        $data = [
                'titulo' => 'Styde.net'
            ];


        //$data=$this->invoice_data;
        $order=Customer::join('consumptions', 'consumptions.customer_id','=', 'customers.id')
                                    ->join('products','products.id','=','consumptions.product_id')
                                ->select('customers.*','consumptions.*','products.product_name', 'products.product_price')
                                ->where('customers.id',$this->customer_id)
                                ->get();
                                $price_report=$this->total_price;
                                $report_final_price=$this->final_price;
        
/*
Create new invoice
*/
//Numero de Autorizacion: 7904006306693
//Numero de Factura:      876814
//Numero de NIT:          1665979
//Numero de Fecha:        20080519 (Con formato yyyyMMdd)
//Numero de Total:        35959 (Redondeado)
//Llave de Dosificacion:  zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS


        //creamos el codigo de control
        $number_auth= $invoice_auth;
        //dd($report_final_price);
        //$this->controlCode($number_auth, '0000018', $invoice_nit, '20080519', $this->final_price, $invoice_key);
        $this->controlCode($invoice_auth, '0000'.$new_invoice_number, $invoice_nit, date('Ymd'), '0'.$report_final_price, $invoice_key);
        //dd($this->codecontrol);
            if ($this->invoice_name ==''  && $this->invoice_ci_customer == '') {
                # code...
            //con datos de facturacion
                $customer_dataname= $this->name.' '.$this->surname;
            $new_invoice=Invoice::create([
                'customer_id'=>$this->customer_id,
                'company_id'=>'1',
                'invoice_name'=> $customer_dataname,
                'invoice_ci_customer'=> $this->ci,
                'invoice_price'=>$this->final_price,
                'invoice_entryprice' => $this->entryprice,
                'invoice_date'=> date('Y-m-d'),
                'invoice_description'=> 'Venta exitosa',
                'invoice_auth' => $number_auth,
                'invoice_nit' => $invoice_nit,
                'invoice_number' => $new_invoice_number,
                'invoice_limit_date' => $invoice_limit_date,
                'invoice_control' => $this->codecontrol,
            ]);



            } else {
                # code...
                //con datos de facturacion
                $new_invoice=Invoice::create([
                    'customer_id'=>$this->customer_id,
                    'company_id'=>'1',
                    'invoice_name'=>$this->invoice_name,
                    'invoice_ci_customer'=>$this->invoice_ci_customer,
                    'invoice_price'=>$this->final_price,
                    'invoice_entryprice' => $this->entryprice,
                    'invoice_date'=> date('Y-m-d'),
                    'invoice_description'=> 'Venta exitosa',
                    'invoice_auth' => $number_auth,
                    'invoice_nit' => $invoice_nit,
                    'invoice_number' => $new_invoice_number,
                    'invoice_limit_date' => $invoice_limit_date,
                    'invoice_control' => $this->codecontrol,
            ]);

            }



                      
                        //una ves creada la factura creamos el codigo de control


                        
                        
                        if ($this->coupon_ready=='ready') {
                                $discount_active='Yes';
                                # code...
                                //In this case the coupon is ready to store in database with invoice
                                $new_coupon_used=CouponUsed::create([
                                        'name_coupon'=> $this->coupon_name,
                                        'date_coupon'=> date('Y-m-d'),
                                        'discount_coupon'=> $this->coupon_discount,
                                        'id_coupon'=> $this->coupon_id,
                                        'id_user'=>'1',
                                        'invoice_id'=> $new_invoice->id,
                                ]);
                                $coupon_actived = Promotion::where('id', $this->coupon_id)->increment('promo_active');
                        } else {
                                # code...
                                $discount_active='No';
                        }
                        

        /*
        Locker change state
        */
        $update_locker_customer=CustomerLocker::where('customer_id',$this->customer_id)->where('locker_date',date('Y-m-d'))->first();
        $locker_id=$update_locker_customer->locker_id;
        $update_locker_state=Locker::where('id',$locker_id)->update(['locker_available'=>'Disponible']);

        //$order = $this->invoice_data;
        $order2=$this->invoice_data;
        /*
        Adicionar nombre y ci en el detalle
        */
        //dd("funcionando");
       // $invoice_qr = QrCode::size(150)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-8');
        //dd($invoice_qr);
        
        //log
        $mensaje = 'Generó detalle de consumo de '.$this->invoice_name.'con CI: '.$this->invoice_ci_customer;
        Systemlog::create([
            'log_user' => auth()->user()->id,
            'log_description' => $mensaje,
            'log_date' =>date('Y-m-d'),
        ]);

        $link_qr = 'https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$invoice_nit.'&cuf=78654383443f&numero='.$new_invoice->invoice_number.'&t=1';
        $total_escrito=ConvertiraLetras::convertir($report_final_price,'Bolivianos',false,'Centavos');
        $pdf = PDF::loadView('invoicepdf', compact('order', 'price_report', 'report_final_price', 'new_invoice', 'discount_active', 'total_escrito', 'link_qr'))->output();
        return response()->streamDownload(
                fn() => print($pdf),'FacturaConsumo.pdf'
        );
        session()->flash('message', 'Se ha generado la factura de forma correcta');
        /*$new_customer=Customer::create([
                'name' => $this->name,
                'surname' => $this->surname,
                'department' => $this->department,
                'ci' => $this->ci,
                'email' => $this->email,
            ]);
        */

/*

        $view = view('reportedemo')->with(compact('order'));
        $html = $view->render();
        $pdf = PDF::loadHTML($html)->save(public_path() . '/order.pdf');
        */
        /*$order = $this->invoice_data;
        $view = view('reportedemo')->with(compact('order'));
        $html = $view->render();
        $pdf = PDF::loadHTML($html)->save(public_path() . '/order.pdf');
        return $pdf->stream();
        */
//$pdf->stream('prueba.pdf');

//dd("reporteee");





/*if ($this->product_id) {
            
            Consumption::create([
                'customer_id' => $this->customer_id,
                'user_id' => '1',
                'product_id'=> $this->product_id,
                'consumption_date' => '13/11/2021',
                'consumption_amount' => $this->consumption_amount,
                'consumption_description' => 'Pedido',
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Pedido realizado con exito');
            $this->resetInputFields();
        }*/
    }
    public function updateinvoice()
    {
            # code...
     //funionando
     

            //$data=$this->invoice_data;
        $order=Customer::join('consumptions', 'consumptions.customer_id','=', 'customers.id')
        ->join('products','products.id','=','consumptions.product_id')
        ->select('customers.*','consumptions.*','products.product_name', 'products.product_price')
        ->where('customers.id',$this->customer_id)
        ->get();
        $price_report=$this->total_price;
        $report_final_price=$this->final_price;
        /*
        Create new invoice
        */
        $new_invoice=Invoice::create([
        'customer_id'=>$this->customer_id,
        'company_id'=>'1',
        'invoice_name'=>$this->invoice_name,
        'invoice_ci_customer'=>$this->invoice_ci_customer,
        'invoice_price'=>$this->final_price,
        'invoice_date'=> date('Y-m-d'),
        'invoice_description'=> 'Venta exitosa',
        ]);
        $update_locker_customer=CustomerLocker::where('customer_id',$this->customer_id)->where('locker_date',date('Y-m-d'))->first();
        $locker_id=$update_locker_customer->locker_id;
        $update_locker_state=Locker::where('id',$locker_id)->update(['locker_available'=>'Disponible']);

        session()->flash('message', 'Se ha realizado la venta de forma exitosa');
        }
        public function updateinvoice_name()
        {
                # code...


                /*
Generate invoice
                */
                $order=Customer::join('consumptions', 'consumptions.customer_id','=', 'customers.id')
                ->join('products','products.id','=','consumptions.product_id')
                ->select('customers.*','consumptions.*','products.product_name', 'products.product_price')
                ->where('customers.id',$this->customer_id)
                ->get();
                $price_report=$this->total_price;
                $report_final_price=$this->final_price;
        /*
        Create new invoice
        */




                $new_invoice=Invoice::create([
                'customer_id'=>$this->customer_id,
                'company_id'=>'1',
                'invoice_name'=>'Sin nombre',
                'invoice_ci_customer'=>'0',
                'invoice_price'=>$this->final_price,
                'invoice_date'=> date('Y-m-d'),
                'invoice_description'=> 'Venta exitosa',
        ]);

        /*
        Locker change state
        */
        //dd(date('Y-m-d'));
        $update_locker_customer=CustomerLocker::where('customer_id',$this->customer_id)->where('locker_date',date('Y-m-d'))->first();
        //dd($update_locker_customer);
        $locker_id=$update_locker_customer->locker_id;
        $update_locker_state=Locker::where('id',$locker_id)->update(['locker_available'=>'Disponible']);

        //$order = $this->invoice_data;
        $order2=$this->invoice_data;

        $pdf = PDF::loadView('reportedemo', compact('order', 'price_report', 'report_final_price'))->output();
        return response()->streamDownload(
        fn() => print($pdf),'DetalleConsumo.pdf'
        );
        session()->flash('message', 'Se ha generado el dettalle sin nombre de forma correcta');



    }
    public function pdfdemo()
    {

        /*
        
██████╗░██████╗░███████╗
██╔══██╗██╔══██╗██╔════╝
██████╔╝██║░░██║█████╗░░
██╔═══╝░██║░░██║██╔══╝░░
██║░░░░░██████╔╝██║░░░░░
╚═╝░░░░░╚═════╝░╚═╝░░░░░
        */
            # code...
    /*        $dompdf = new Dompdf();
     $dompdf->loadHtml('Hello world');
     $dompdf->setPaper('A4', 'Landscape');
     $dompdf->render();
     $dompdf->stream();
     
      */
      $customPaper = array(0,0,400,900);
//$dompdf->set_paper($customPaper);
     

/*$order=Locker::all();
            $pdf = PDF::loadView('pdfdemo', compact('order'))->setPaper($customPaper)->output();
        return response()->streamDownload(
        fn() => print($pdf),'Detalle12345.pdf'
        );
*/

        /*return response()->streamDownload(function () {
                $pdf = app('dompdf.wrapper');
                $customPaper = array(0,0,400,900);
                $pdf->loadView('pdfdemo')->setPaper($customPaper);
                echo $pdf->stream();
            }, 'test.pdf');
*/
        //dd('sdjflsdjk');
        //$pdf = PDF::loadView('livewire.pdfdemo');
        //return $pdf->setPaper('a4', 'landscape')->download('pdfdemo1.pdf');
        //$note = AcademyLessonNote::where('user_id',auth()->user()->id)->first(); 
               // $pdf = PDF::loadView('pdfdemo')->output(); 
                //return response()->streamDownload(function () use ($pdf) { print($pdf); }, md5(time()).".pdf"); 
                //$order = $this->order;
                //modificar el pdf para la factura y luego hacer el reporte de la factura, y tambien la satisfaccion al cliente con el cupon
                //hacer un modulo de facuracion donde se pueda volver a generar la factura para el reporte

                $view = view('demoinvoice1');// usa la carpeta views
                $name='/'.time()."reporte2.pdf";
                $html = $view->render();
                $pdf = PDF::loadHTML($html)->save(public_path() . $name);
                //$this->pdfdemo=$name;
                $this->redirect($name);
               // Redirect::to('/invoice');
        }
        public function cupon()
        {
                # code...
                $promo_verify=Promotion::where('promo_code',$this->cupon)
                                            ->where('promo_state','Activado')
                                            ->where('promo_active', '1')
                                            ->where('promo_to', '>=', date('Y-m-d'))
                                            ->first();
                //dd($promo_verify);
                
                if ($promo_verify) {
                        # code...
                        //In this case the coupon code is actived
                        if ($promo_verify->promo_type == '1') {
                            # code...
                            //$this->customer_id
                            //$this->ci
                            $client = Invoice::where('invoice_ci_customer', $this->ci)->count();
                            //dd($client);
                            if ($client > 3) {
                                # code...
                                $this->coupon_id=$promo_verify->id;
                                $this->coupon_discount=$promo_verify->promo_discount;
                                $this->coupon_code=$promo_verify->promo_code;
                                $this->coupon_name=$promo_verify->promo_name;
                                $this->coupon_showdiscount=$this->coupon_discount;
                                $report_final_price=$this->final_price;
        
                                $discount=$promo_verify->promo_discount;
                                $report_final_price=$report_final_price - $discount;
                                $this->final_price = $report_final_price;
                                $this->coupon_ready='ready';
                                //promo activada
                                session()->flash('coupon_state', 'Se ha activado el cupon!, Gracias por su preferencia');
                                //dd('funcionaaaaaa');
                            }else {
                                # code...
                                session()->flash('coupon_state', 'Lo sentimos el cupon es para clientes frecuentes!');
                            }
                            
                        }else {
                            # code...
                            //Cupon funciona para todos los clientes
                            $this->coupon_id=$promo_verify->id;
                            $this->coupon_discount=$promo_verify->promo_discount;
                            $this->coupon_code=$promo_verify->promo_code;
                            $this->coupon_name=$promo_verify->promo_name;
                            $this->coupon_showdiscount=$this->coupon_discount;
                            $report_final_price=$this->final_price;
    
                            $discount=$promo_verify->promo_discount;
                            $report_final_price=$report_final_price - $discount;
                            $this->final_price = $report_final_price;
                            $this->coupon_ready='ready';
                            //promo activada
                            session()->flash('coupon_state', 'Se ha activado el cupon!');
                            //dd('funcionaaaaaa');
                            
                        }
                        
                }else {
                        # code...

                        session()->flash('coupon_state', 'El cupon no esta disponible o caducó!');
                        //dd('no disponible');
                }
        }





        /*
        FACTURA
        */

        private function verhoeff($num, $times)
        {
            $d = array(
                array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
                array(1, 2, 3, 4, 0, 6, 7, 8, 9, 5),
                array(2, 3, 4, 0, 1, 7, 8, 9, 5, 6),
                array(3, 4, 0, 1, 2, 8, 9, 5, 6, 7),
                array(4, 0, 1, 2, 3, 9, 5, 6, 7, 8),
                array(5, 9, 8, 7, 6, 0, 4, 3, 2, 1),
                array(6, 5, 9, 8, 7, 1, 0, 4, 3, 2),
                array(7, 6, 5, 9, 8, 2, 1, 0, 4, 3),
                array(8, 7, 6, 5, 9, 3, 2, 1, 0, 4),
                array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0)
            );
            $p = array(
                array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
                array(1, 5, 7, 6, 2, 8, 3, 0, 9, 4),
                array(5, 8, 0, 3, 7, 9, 6, 1, 4, 2),
                array(8, 9, 1, 6, 0, 4, 3, 5, 2, 7),
                array(9, 4, 5, 3, 1, 2, 6, 8, 7, 0),
                array(4, 2, 8, 6, 5, 7, 3, 9, 0, 1),
                array(2, 7, 9, 3, 8, 0, 6, 4, 1, 5),
                array(7, 0, 4, 6, 9, 1, 3, 2, 5, 8)
            );
            $inv = array(0, 4, 3, 2, 1, 5, 6, 7, 8, 9);
            for (;$times > 0; $times--) {
                $c = 0;
                for ($i = strlen($num)-1; $i >= 0; $i--){
                    $c = $d[$c][$p[((strlen($num) - $i) % 8)][intval($num[$i])]];
                }
                $num .= $inv[$c];
            }
            return $num;
        }
        
        private function arc4($msg, $key)
        {
            $state = array();
            for ($i=0; $i<256; $i++) {
                $state[$i] = $i;
            }
            $j = 0;
            for ($i=0; $i<256; $i++) {
                $j = ($j + $state[$i] + ord($key[$i % strlen($key)])) % 256;
                $temp = $state[$i];
                $state[$i] = $state[$j];
                $state[$j] = $temp;
            }
            $x = 0; $y = 0;
            $output = "";
            for ($i=0; $i<strlen($msg); $i++) {
                $x = ($x + 1) % 256;
                $y = ($state[$x] + $y) % 256;
                $temp = $state[$x];
                $state[$x] = $state[$y];
                $state[$y] = $temp;
                $output .= sprintf('%02x', ord($msg[$i]) ^ $state[($state[$x] + $state[$y]) % 256]);
            }
            return strtoupper($output);
        }
        
        private function base64($number) {
            $result = "";
            $dic = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+/";
            while ($number > 0) {
                $result = $dic[$number % 64] . $result;
                $number = floor($number / 64);
            }
            return $result;
        }
        
        private function controlCode($auth, $number, $nit, $date, $total, $key) {
            //dd('holaaaaa');
            $code = "";
            $number = $this->verhoeff($number, 2);
            $nit = $this->verhoeff($nit, 2);
            $date = $this->verhoeff($date, 2);
            $total = $this->verhoeff($total, 2);
            $vf = substr($this->verhoeff(strval(
                intval($number) +
                intval($nit) +
                intval($date) +
                intval($total))
            , 5),-5);
        
            $input = array($auth, $number, $nit, $date, $total);
            $idx = 0;
            for ($i=0; $i<5; $i++) {
                $code .= $input[$i] . substr($key, $idx, 1+intval($vf[$i]));
                $idx += 1+intval($vf[$i]);
            }
            $code = $this->arc4($code, $key . $vf);
        
            $final_sum = 0;
            $total_sum = 0;
            $partial_sum = array(0,0,0,0,0);
            for ($i=0; $i<strlen($code); $i++) {
                $partial_sum[$i%5] += ord($code[$i]);
                $total_sum += ord($code[$i]);
            }
            for ($i=0; $i<5; $i++) {
                $final_sum += floor(($total_sum * $partial_sum[$i]) / (1 + intval($vf[$i])));
            }
        
            preg_match_all('/.{2}/', $this->arc4($this->base64($final_sum), $key . $vf), $matched);
            //print_r($matched[0][3]);
            $codigo = " el codigo es ".$matched[0][0]."-".$matched[0][1]."-".$matched[0][2]."-".$matched[0][3];
            $code = $matched[0][0]."-".$matched[0][1]."-".$matched[0][2]."-".$matched[0][3];
            //print_r($codigo);
            //$code = $matched.join('-');
        $this->codecontrol=$code;
            return $code;
        }
        
    




        /*
        FIN FACTURA
        */
}
