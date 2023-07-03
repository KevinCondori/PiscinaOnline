@extends('layout')
@section('content')
    
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="card">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <div class="card-body">

    <h5>Lista de clientes</h5>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CI</th>
                <th>Número</th>
                <th>Fecha de ingreso</th>
                <th>Acción</th>                    
            </tr>
        </thead>
        <tbody>
            @php
             $customers=App\Models\Customer::all();
            @endphp
            @foreach ($customers as $customer)
            <tr>
              
            <td>{{ $customer->id}}</td>
            <td>{{ $customer->name }} </td>
            <td>{{$customer->surname}}</td>
            <td>{{ $customer->ci}} {{$customer->department}}</td>
            <td>{{ $customer->customer_phone}}</td>
            <td>{{ $customer->created_at}}</td>
            <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a></td>    
            </tr>    
            @endforeach
           
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CI</th>
                <th>Número</th>
                <th>Fecha de ingreso</th>
                <th>Acción</th>  
            </tr>
        </tfoot>
    </table>

   </div>
   


   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
   <script>
   $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]],
      language: {
        "decimal":        "",
    "emptyTable":     "No hay datos",
    "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
    "infoFiltered":   "(Filtro de _MAX_ total registros)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Mostrar _MENU_ registros",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No se encontraron coincidencias",
    "paginate": {
        "first":      "Primero",
        "last":       "Ultimo",
        "next":       "Próximo",
        "previous":   "Anterior"
    },
    "aria": {
        "sortAscending":  ": Activar orden de columna ascendente",
        "sortDescending": ": Activar orden de columna desendente"
    }
      }
    } );
} );
   </script>
</div>
@endsection