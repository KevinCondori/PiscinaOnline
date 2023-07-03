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
    @php
    $company=App\Models\Company::first();
    $todaydetail=date('Y-m-d H:s');
@endphp
<center><h3>{{$company->company_name}}</h3></center>
<center><p>Contacto {{$company->company_phone}}</p></center>
<center><h2>Detalle de evento</h2></center>
<center><p>NIT: {{$company->company_nit}}</p></center>

<center><p>Fecha y hora: {{$todaydetail}}</p></center>
<p>NIT/CI:{{$datareport->event_ci_customer}} </p>
<p>Señor(es): {{$datareport->event_customer}}</p>
<table>
  <tr>
    <th>#</th>
    <th>Evento</th>
    <th>Descripción</th>
    <th>Fecha</th>
    <th>Tipo</th>
    <th>Publico</th>
    <th>Precio</th>
    <th>Registro</th>  
</tr>
  <tr>
    <td>{{$datareport->id}}</td>
    <td>{{$datareport->eventname}}</td>
    <td>{{$datareport->eventdescription}}</td>
    <td>{{$datareport->event_date}}</td>
    <td>{{$datareport->event_type}}</td>
    <td>{{$datareport->event_public}}</td>
    <td>{{$datareport->event_price}}</td>
    
    <td>{{$datareport->created_at}}</td>
    
  </tr>    
  
</table>
<center><p>Ley N 453: Los servicios deben suministrarse en condiciones de inocuidad, calidad y seguridad.</p></center>
</body>
</html>