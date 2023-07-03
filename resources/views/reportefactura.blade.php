<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Reporte de las facturas</h2>

<table>
  <tr>
    <th>No</th>
	<th>N Autorización</th>
    <th>Nombre</th>
    <th>CI</th>
	<th>Código de control</th>
	<th>Cantidad</th>
	<th>IVA</th>
	<th>Despues de IVA</th>
	<th>Fecha</th>
  </tr>
  @php
		$total=0;
	  $total_iva=0;
	  $total_con_iva=0;
  @endphp
@foreach ($data_invoices as $data_invoice)
<tr>
    <td>{{$data_invoice->id}}</td>
	<td>{{$data_invoice->invoice_auth}}</td>
	<td>{{$data_invoice->invoice_name}}</td>
    <td>{{$data_invoice->invoice_ci_customer}}</td>
	<td>{{$data_invoice->invoice_control}}</td>
	<td>{{$data_invoice->invoice_price}}</td>
	@php
	$total=$total+$data_invoice->invoice_price;
		$invoice_iva=$data_invoice->invoice_price*0.13;
		$invoice_con_iva=$data_invoice->invoice_price-$invoice_iva;
		$total_iva=$total_iva+$invoice_iva;
		$total_con_iva=$total_con_iva+$invoice_con_iva;	
	@endphp
	<td>{{$invoice_iva}}</td>
	
	<td>{{$invoice_con_iva}}</td>

	<td>{{$data_invoice->invoice_date}}</td>
  </tr>
@endforeach
@php
	$invoice_con_iva
@endphp  
<tr>
	  <th>Total</th>
	  <th></th>
	  <th></th>
	  <th></th>
	  <th></th>
	  <th>{{$total}}</th>

	  <th>{{$total_iva}}</th>
	  <td>{{$total_con_iva}}</td>
	  <td></td>
  </tr>
  
</table>

</body>
</html>

