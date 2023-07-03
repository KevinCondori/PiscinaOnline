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

<h2>Reporte de Eventos</h2>

<table>
  <tr>
    <th>#</th>
    <th>Evento</th>
    <th>Descripción</th>
    <th>Fecha</th>
    <th>Tipo</th>
    <th>Publico</th>
    <th>Precio</th>
    <th>Cliente CI</th>
    <th>Registro</th>  
</tr>
  @foreach ($reportbydate2 as $datareport)
  <tr>
    <td>{{$datareport->id}}</td>
    <td>{{$datareport->eventname}}</td>
    <td>{{$datareport->eventdescription}}</td>
    <td>{{$datareport->event_date}}</td>
    <td>{{$datareport->event_type}}</td>
    <td>{{$datareport->event_public}}</td>
    <td>{{$datareport->event_price}}</td>
    <td>{{$datareport->event_ci_customer}} {{$datareport->event_customer}}</td>
    <td>{{$datareport->created_at}}</td>
    
  </tr>    
  @endforeach
  
</table>
</body>
</html>