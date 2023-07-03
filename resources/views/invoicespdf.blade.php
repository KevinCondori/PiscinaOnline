<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .clearfix:after {
        content: "";
        display: table;
        clear: both;
      }

      a {
        color: #5D6975;
        text-decoration: underline;
      }

      body {
        position: relative;
        /*width: 21cm;  
        height: 29.7cm;*/ 
        margin: 0 auto; 
        color: #001028;
        background: #FFFFFF; 
        font-family: Arial, sans-serif; 
        font-size: 12px; 
        font-family: Arial;
      }

      header {
        padding: 10px 0;
        margin-bottom: 30px;
      }

      #logo {
        text-align: center;
        margin-bottom: 10px;
      }

      #logo img {
        width: 90px;
      }

      h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;
        background: url(dimension.png);
      }

      #project {
        float: left;
      }

      #project span {
        color: #5D6975;
        text-align: right;
        width: 52px;
        margin-right: 10px;
        display: inline-block;
        font-size: 0.8em;
      }

      #company {
        float: right;
        text-align: right;
      }

      #project div,
      #company div {
        white-space: nowrap;        
      }

      table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        /*margin-bottom: 20px;*/
      }

      table tr:nth-child(2n-1) td {
        background: #F5F5F5;
      }

      table th,
      table td {
        text-align: center;
      }

      table th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;        
        font-weight: normal;
      }

      table .service,
      table .desc {
        text-align: left;
      }

      table td {
        padding: 1px;
        text-align: right;
      }

      table td.service,
      table td.desc {
        vertical-align: top;
      }

      table td.unit,
      table td.qty,
      table td.total {
        font-size: 1.2em;
      }

      table td.grand {
        border-top: 1px solid #5D6975;;
      }

      #notices .notice {
        color: #5D6975;
        font-size: 1.2em;
      }

      footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
      }
      .transformacion2 { text-transform: uppercase;}   
    </style>
</head>
<body>
    <header class="clearfix">
        @php
            $company=App\Models\Company::find(1);
        @endphp
        <div id="logo">
            <div>{{$company->company_name}}</div>
          <div>{{$company->company_address}}</div>
          <div>{{$company->company_phone}}</div>
          <div><a href="mailto:{{$company->company_email}}">{{$company->company_email}}</a></div>
          {{--<img src="logo.png">--}}
        </div>
        <h1>FACTURA</h1>
        @php
            $data_control=App\Models\Invoicecontrol::find(1);
        @endphp
        <div id="logo" class="clearfix">
          <div>N DE AUTORIZACIÓN:   {{$data_control->control_auth}}</div>
          <div>NIT:                 {{$company->company_nit}}</div>
          <div>N FACTURA:           {{$invoice->invoice_number}}</div>

        </div>
        <center><p><b>--------------------------------------------------------------------------------------------------------------</b></p></center>
        <div id="logo">
          <div><span>ACTIVIDAD ECONÓMICA: </span> {{$data_control->control_activity}}</div>
          {{--<div><span>PROJECT</span> Website development</div>--}}
          <div><span>CLIENTE</span> {{$invoice->invoice_name}}</div>
          <div><span>NIT/CI</span> {{$invoice->invoice_ci_customer}}</div>
          {{--<div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>--}}
          <div><span>FECHA</span> {{$invoice->invoice_date}}</div>
          {{--<div><span>DUE DATE</span> September 17, 2015</div>--}}
        </div>
        <center><p><b>--------------------------------------------------------------------------------------------------------------</b></p></center>
      </header>
      <main>
        <table>
          <thead>
            <tr>
            <th></th>
              <th class="service">Detalle</th>
              <th class="desc">Cantidad</th>
              <th>Precio Unitario</th>
              <th>Sub Total</th>
            </tr>
          </thead>
          <tbody>
              {{--@foreach (App\Models\Product::join('consumptions','products.id','consumptions.product_id')
                                                ->where('consumptions.customer_id', $invoice->customer_id)
                                                ->whereDate('consumptions.created_at', $invoice->invoice_date)
                                                ->select('products.product_name', 'products.product_description', 'products.product_price', 'consumptions.consumption_amount','consumptions.consumption_date', 'consumptions.customer_id')->get() as $invoice_detail)
              --}}

            {{--@foreach (App\Models\Consumption::join('products','consumptions.product_id','products.id')
              ->where('consumptions.customer_id', $invoice->customer_id)
              ->whereDate('consumptions.created_at', $invoice->invoice_date)
              ->select('products.product_name', 'products.product_description', 'products.product_price', 'consumptions.consumption_amount','consumptions.consumption_date', 'consumptions.customer_id')->get() as $invoice_detail)
--}}
            @foreach ($invoice_details as $invoice_detail)

             <tr>
                 <td></td>
                <td class="service">{{$invoice_detail->product_name}}</td>
                <td class="desc">{{$invoice_detail->consumption_amount}}</td>
                <td class="unit">{{ $invoice_detail->product_price }}</td>
                <td class="total">{{$invoice_detail->product_price * $invoice_detail->consumption_amount}}</td>
              
            </tr>      
              @endforeach
            
            
            
            {{--
                

                TOTAL


                --}}
            <tr>
                <!--sumar los datos de la factura y hacer los reportes-->
              <td colspan="4">SUBTOTAL</td>
              <td class="total">{{$subtotal}}</td>
            </tr>
            <tr>
                <!--sumar los datos de la factura y hacer los reportes-->
              <td colspan="4">INGRESO</td>
              <td class="total">Bs. {{$invoice->invoice_entryprice}}</td>
            </tr>
            <tr>
              <td colspan="4">DESCUENTO</td>


              @if ($discount_active == 'Yes')
              <td class="total">Bs. {{$discount}}</td>
              @else
              <td class="total">Bs. 0</td>
              @endif
              
            </tr>
            <tr>
              <td colspan="4" class="grand total">TOTAL</td>
              <td class="grand total">{{$total}}</td>
            </tr>
          </tbody>
        </table>
        <div id="notices">
          <center><p><b>--------------------------------------------------------------------------------------------------------------</b></p></center>
         <center><p class="transformacion2">SON: {{$total_escrito}}</p></center>
        {{--    <div>NOTICE:</div>
          <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        --}}
        <center><p>CÓDIGO DE CONTROL: {{$invoice->invoice_control}}</p></center>
        <center><p>FECHA DE LÍMITE DE EMISIÓN: {{$invoice->invoice_limit_date}}</p></center>
        
            {{--<img src="https://siatinfo.impuestos.gob.bo/images/2021/qrfactura.png" alt="" width="200" height="200">--}}
           
              {{--{!!QrCode::size(300)->generate('https://pilotosiat.impuestos.gob.bo/consulta/QR?nit={{$company->company_nit}}&cuf=78654383443f&numero={{$new_invoice->invoice_number}}&t=1') !!}--}}
            
              
              <div>
                <center>
                  <img src="data:image/png;base64, {{ base64_encode(QrCode::size(125)->generate($link_qr)) }} ">
                </center>
              </div>
        <center><p>ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO
            SERÁ SANCIONADO PENALMENTE DE ACUERDO A LEY</p></center>
        </div>
      </main>
     
      <footer>
        <center><p>Ley N 453: Los servicios deben suministrarse en condiciones de inocuidad, calidad y seguridad.</p></center>
      </footer>
      
</body>
</html>