<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Mi first PDF</title>
		<style>
			table, th, td {
			  border:1px solid black;
			}
			.logo {
  
  margin-left: 250px;
}
			</style>
	</head>
	<body>
<div class="contenedor">
<div class="logo">
	<img src="https://img2.freepng.es/20190604/hao/kisspng-clip-art-swimming-logo-image-ulitsa-kosmonavtov-sportdisziplinen-1st-eurasian-amateur-swimming-c-5cf685b1554b15.1940092515596599533494.jpg" alt="" style="width: 300px">

</div>
	
</div>
@php
$company=App\Models\Company::first();
$todaydetail=date('Y-m-d H:s');
@endphp
<center><h3>{{$company->company_name}}</h3></center>
<center><p>Contacto {{$company->company_phone}}</p></center>
<center><h1>Detalle Consumo Sauna Piscina Israel</h1></center>
<center><p>NIT: {{$company->company_nit}}</p></center>
<center><p>Fecha y hora: {{$todaydetail}}</p></center>

<div>
@if ($new_invoice)
<h4>Nombre: {{$new_invoice->invoice_name}}</h4>
<h4>NIT/CI:  {{$new_invoice->invoice_ci_customer}}</h4>	
@else
<h4>Nombre: Sin nombre</h4>
<h4>NIT/CI:  Ninguno</h4>	
@endif

</div>

		<table style="width:100%">
		<tr>
			<th># pedido</th>
			<th>producto</th>
		   
			<th>Cantidad</th>
			<th>precio</th>
		  
		</tr>
			
			
			  @foreach ($order as $invoice)
			  <tr>
				<td>{{$invoice->id}}</td>
			  <td>{{$invoice->product_name}}</td>
			  
			  <td>{{$invoice->consumption_amount}}</td>
			  <td>{{$invoice->product_price}} Bs.</td>
			  </tr>
			 
			  @endforeach
			  
		
			
		  </table>
<table style="width: 100%">
	<tr>
		<th></th>
	<th></th>
	<th>Total Consumo</th>
	<th>{{$price_report}} Bs.</th>
	</tr>
   <tr>
	 <th></th>
	 <th></th>
	 <th>Precio Ingreso <br> + Casillero</th>
	 <th>25 Bs.</th>
   </tr>
	<tr>
	  <th></th>
	  <th></th>
	  <th>Total</th>
	<th>
{{$report_final_price}} Bs.
	</th>
	</tr>


</table>
<center><p>Ley N 453: Los servicios deben suministrarse en condiciones de inocuidad, calidad y seguridad.</p></center>
	</body>
</html>