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

<h2>Historial de adición de los productos</h2>

<table>
  <tr>
    <th>No</th>
    <th>Producto</th>
    <th>Stock Inicial</th>
    <th>Cantidad Inicial</th>
	<th>Usuario</th>
	<th>Nuevo Stock</th>
	<th>Nueva Cantidad</th>
	<th>Fecha</th>
  </tr>
  @php
		$total=0;
	  $total_iva=0;
	  $total_con_iva=0;
  @endphp
@foreach ($products as $product)
<tr>
    <td>{{$product->id}}</td>
    @php
        $product_name=App\Models\Product::find($product->product_id);
        $user_name=App\Models\User::find($product->user_id);
    @endphp
    <td>{{$product_name->product_name}}</td>
    <td>{{$product->history_stock}}</td>
    <td>{{$product->history_amount}}</td>
    <td>{{$user_name->name}}</td>
    <td>{{$product->history_add_product}}</td>
    <td>{{$product->history_description}}</td>
    <td>{{$product->created_at}}</td>
    
  </tr>
@endforeach

</body>
</html>

