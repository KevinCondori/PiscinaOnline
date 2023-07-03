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

    <h5>Logs del sistema <span class="badge badge-sm bg-gradient-success"> En línea</span></h5>
    <p>El seguimiento se puede ver a continuación</p>
    
    
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Usuario</th>
                <th>Descripción</th>
                <th>Fecha y hora</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($systemlogs as $systemlog)
            <tr>
                @php
                $user=App\Models\User::find($systemlog->log_user);
            @endphp
            <td>{{ $systemlog->id}}</td>
            <td>{{ $user->name }} {{$user->surname}} {{$user->ci}}</td>
            <td>{{ $systemlog->log_description}}</td>
            <td>{{ $systemlog->created_at}}</td>    
            </tr>    
            @endforeach
           
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Usuario</th>
                <th>Descripción</th>
                <th>Fecha y hora</th>
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