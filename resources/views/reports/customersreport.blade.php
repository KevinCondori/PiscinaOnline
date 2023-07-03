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
    <th>Departamento</th>
    <th>Correo</th>
  </tr>
  @foreach ($reportbydate as $datareport)
  <tr>
    <td>{{$datareport->id}}</td>
    <td>{{$datareport->name}} {{$datareport->surname}}</td>
    <td>{{$datareport->ci}}</td>
    <td>{{$datareport->department}}</td>
    <td>{{$datareport->email}}</td>
  </tr>    
  @endforeach
  
  
</table>
</body>
</html>