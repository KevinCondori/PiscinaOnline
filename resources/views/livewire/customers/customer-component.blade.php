<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}


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
                @foreach ($customers as $customer)
                <tr>
                    @php
                @endphp
                <td>{{ $customer->id}}</td>
                <td>{{ $customer->name }} {{$customer->surname}} {{$user->ci}}</td>
                <td>{{ $customer->ci}} {{$customer->department}}</td>
                <td>{{ $customer->customer_phone}}</td>
                <td>{{ $customer->created_at}}</td>
                <td>Btn1</td>    
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






</div>
