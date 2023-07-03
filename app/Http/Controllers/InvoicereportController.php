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
use App\Exports\InvoicesExport;
use Barryvdh\DomPDF\Facade as PDF;


class InvoicereportController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('invoicereport');
    }
    public function range()
    {
        # code...
        //reporte por fecha
    }
    public function report_date(Request $request)
    {
        # code...
        $data_invoices=Invoice::where('invoice_date',$request->report_date)->get();
        switch ($request->report_format) {
            case 'PDF':
                # code...
                //Generamos un PDF
                switch ($request->report_selected) {
                    case 'factura':
                        # code...
                        return PDF::loadView('reportefactura', compact('data_invoices'))
                        ->stream('archivo.pdf');
                        break;
                    
                    case 'factura_consumo':
                        # code...
                        break;
                    
                    case 'factura_codigo':
                            # code...
                            break;
                    default:
                        # code...
                        break;
                }
                
                break;
            
                case 'EXCEL':

                return (new InvoicesExport([$request->report_date, $request->report_date]))->download('ejemplo.xlsx');

                break;
            default:
                # code...
                break;
        }
        

        return $data_invoices;
    }
    public function report_range_date(Request $request)
    {
        # code...
        $data_invoices=Invoice::whereBetween('invoice_date', [$request->from, $request->to])->get();
        
        switch ($request->report_format2) {
            case 'PDF':
                # code...
                //Generamos un PDF
                //return "dsfljdaflkdasjffadsjfalsd";
                switch ($request->report_selected2) {
                    case 'factura':
                        # code...
                        return PDF::loadView('reportefactura', compact('data_invoices'))->setPaper('a4', 'landscape')
                        ->stream('archivo.pdf');
                        break;
                    
                    case 'factura_consumo':
                        # code...
                        break;
                    
                    case 'factura_codigo':
                            # code...
                            break;
                    default:
                        # code...
                        break;
                }
                
                break;
            
                case 'EXCEL':
                return (new InvoicesExport([$request->from, $request->to]))->download('ejemplo.xlsx');
                
                break;
                default:
                # code...
                break;
        }

        return "holaaa";
//falta hacer el codigo de la factura, dosificacion de productos, costos y ganancias en dashboard

    }
}
