<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Consumption;
use App\Models\CouponUsed;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Company;
use App\Kevin\ConvertiraLetras;

class InvoiceController extends Controller
{
    //
    public function index()
    {
        # code...
        $invoices = Invoice::join('customers','invoices.customer_id','customers.id')
                            //->join('consumptions','customers.id','consumptions.customer_id')
                            //->join('products','consumptions.product_id','products.id')
                            ->select('invoices.*')
                            ->get();
        //return $invoice;
        return view('InvoiceComponent', compact('invoices'));
    }
    public function show($id)
    {
        # code...
        //retornar pdf de la factura en pdf y el boton editar
        // realizar el reporte de porcentaje de impuestos en excel o pdf
        //realizar dosificacion de productos
        // instantiate and use the dompdf class
        /*$dompdf = new Dompdf();
        $dompdf->loadHtml('Nueva Factura');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();*/
        //return "Facturaaa";
        $data = [
            'titulo' => 'Styde.net'
        ];
        $invoice=Invoice::find($id);
        $invoice_details=Consumption::join('products','consumptions.product_id','products.id')
        ->where('consumptions.customer_id', $invoice->customer_id)
        ->whereDate('consumptions.created_at', $invoice->invoice_date)
        ->select('products.product_name', 'products.product_description', 
        'products.product_price', 'consumptions.consumption_amount',
        'consumptions.consumption_date', 'consumptions.customer_id')
        ->get();
        $entry_price = 25;
        $subtotal=0;
        //calculamos el subtotal
        foreach ($invoice_details as $invoice_detail) {
            # code...
            $subtotal = $subtotal + ( $invoice_detail->product_price * $invoice_detail->consumption_amount );
        }
        $coupon_verify = CouponUsed::where('invoice_id', $id)->first();
        if ($coupon_verify) {
            # code...
            //el pago se realizo con un cupon
            $discuont = $coupon_verify->discount_coupon;
            $total = $total - $discount; 
            $discount_active = 'Yes';
        }else{
            $discount = 0;
            $discount_active = 'No';
        }
        //aumentamos la entrada
        $total = $subtotal + $entry_price;
        //obtencion de datos de la empresa
        $invoice_nit=Company::first()->company_nit;
        $link_qr = 'https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$invoice_nit.'&cuf=78654383443f&numero='.$invoice->invoice_number.'&t=1';
        //convertimos los numeros
        $total_escrito=ConvertiraLetras::convertir($total,'Bolivianos',false,'Centavos');
        //obtener los productos en la vista con la fecha de la factura
        return PDF::loadView('invoicespdf', compact('invoice','invoice_details', 'subtotal', 'total', 'total_escrito', 'discount', 'discount_active', 'link_qr'))
            ->stream('archivo.pdf');
    }

    public function report()
    {
        # code...
        /*
          {{--
    
█ █▄░█ █░█ █▀█ █ █▀▀ █▀▀   █▀▀ █▀█ █▀█ █▀▄▀█   █ █▄░█ █░█ █▀█ █ █▀▀ █▀▀   █▀▀ █▀█ █▄░█ ▀█▀ █▀█ █▀█ █░░ █░░ █▀▀ █▀█
█ █░▀█ ▀▄▀ █▄█ █ █▄▄ ██▄   █▀░ █▀▄ █▄█ █░▀░█   █ █░▀█ ▀▄▀ █▄█ █ █▄▄ ██▄   █▄▄ █▄█ █░▀█ ░█░ █▀▄ █▄█ █▄▄ █▄▄ ██▄ █▀▄
    --}}
        */
        return view('invoicereport');
    }
}
