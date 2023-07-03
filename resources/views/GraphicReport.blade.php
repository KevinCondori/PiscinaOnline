@extends('layout')
@section('content')
    
<div class="container" id="imprimible">
    <h1>Reporte de Ventas de los productos</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

    @if(session('state'))
    <div class="content">
        <form method="Post" action="{{ url('/graphic-report-refrescar')}}">
            {{ csrf_field() }}
            <div class="col-md-5">
                <div class="form-group">
                  <div class="input-group mb-4">
                      <label for="example-date-input" class="form-control-label">De Fecha</label>
                      <input class="form-control" type="date" value="{{$form_data->from}}" id="example-date-input" name="from">
                  </div>
                </div>
              </div>
            <div class="col-md-5">
                <div class="form-group">
                  <div class="input-group mb-4">
                      <label for="example-date-input" class="form-control-label">A fecha</label>
                      <input class="form-control" type="date" value="{{$form_data->to}}" id="example-date-input" name="to">
                  </div>
                </div>
              </div>
              <button class="btn bg-gradient-primary my-1 me-1" type="submit">Rango de fecha</button>
        </form>

    </div>
  @endif

    <div class="content">
        <form method="Post" action="{{ url('/graphic-report-refrescar')}}">
            {{ csrf_field() }}
            <div class="col-md-5">
                <div class="form-group">
                  <div class="input-group mb-4">
                      <label for="example-date-input" class="form-control-label">De Fecha</label>
                      <input class="form-control" type="date" value="2018-11-23" id="example-date-input" name="from">
                  </div>
                </div>
              </div>
            <div class="col-md-5">
                <div class="form-group">
                  <div class="input-group mb-4">
                      <label for="example-date-input" class="form-control-label">A fecha</label>
                      <input class="form-control" type="date" value="2018-11-23" id="example-date-input" name="to">
                  </div>
                </div>
              </div>
              <button class="btn bg-gradient-primary my-1 me-1" type="submit">Rango de fecha</button>
        </form>

    </div>

    <canvas id="myChart" height="100px"></canvas>
</div>

<button id="btnImprimirDiv">Imprimir div</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {!! json_encode($labels) !!};
    var users =  {!! json_encode($data) !!};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'Venta de productos',
            backgroundColor: {!! json_encode($colours) !!},
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>
<script>
function imprimirElemento(elemento){
  var ventana = window.open('', 'PRINT', 'height=600,width=800');
  ventana.document.write('<html><head><title>' + document.title + '</title>');
  ventana.document.write('</head><body >');
  ventana.document.write(elemento.innerHTML);
  ventana.document.write('</body></html>');
  ventana.document.close();
  ventana.focus();
  ventana.print();
  ventana.close();
  return true;
}


  document.querySelector("#btnImprimirDiv").addEventListener("click", function() {
  var div = document.querySelector("#myChart");
  imprimirElemento(div);
});
  
</script>
@endsection