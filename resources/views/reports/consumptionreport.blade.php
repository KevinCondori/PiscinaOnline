<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
<h2>Reporte de Consumo</h2>

<table>
  <tr>
    <th>Producto</th>
    <th>Consumo Total</th>
    <th>Ingreso del Producto</th>
  </tr>
  @foreach ($reportbydate as $datareport)
  <tr>
      @php
          $product=App\Models\Product::where('id', $datareport->product_id)->first();

      @endphp
    <td>{{$product->product_name}}</td>
    <td>{{$datareport->total_sales}}</td>
    <td>{{$product->product_price*$datareport->total_sales}} Bs.</td>
  </tr>    
  @endforeach
</table>
</body>
</html>