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
    
<h2>Reporte de clientes</h2>

<table>
  <tr>
    <th>#</th>
    <th>Cliente</th>
    <th>CI/NIT</th>
    <th>Monto del detalle</th>
    <th>Fecha</th>
  </tr>
  @foreach ($reportbydate2 as $datareport)
  <tr>
    <td>{{$datareport->id}}</td>
    <td>{{$datareport->invoice_name}}</td>
    <td>{{$datareport->invoice_ci_customer}}</td>
    <td>{{$datareport->invoice_price}}</td>
    <td>{{$datareport->created_at}}</td>
  </tr>    
  @endforeach
  <tr>
      <td></td>
      <td></td>
      <td>Total de ventas</td>
      <td>{{$reportbydate}}</td>
  </tr>
  
</table>
</body>
</html>