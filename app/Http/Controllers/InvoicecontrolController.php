<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoicecontrol;

class InvoicecontrolController extends Controller
{
    //
    private $codecontrol;
    public function controlcode1()
    {
        $this->controlCode('7904006306693', '876814', '1665979', '20080519', '35959', 'zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS');
        return $this->codecontrol;


    }
    
    public function index()
    {
        # this->codecontrol...
        $data= Invoicecontrol::first();
        return view('appweb.invoicecontrol', compact('data'));
    }
    public function hola($saludo)
    {
        # code...
        dd($saludo);
    }
    public function store(Request $request)
    {
        # this->codecontrol...
        Invoicecontrol::where('id',1)->update([
            'control_auth' => $request->control_auth,
            'control_key' => $request->control_key,
            'control_invoice' => $request->control_invoice,
            'control_date' => $request->control_date,
            'control_activity' => $request->control_activity,
        ]);
        return redirect()->route('invoicecontrol.index')
                        ->with('success','Los datos de control de la empresa se han actualizado con exito');
    }

    /* inicio script*/

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
    











}
