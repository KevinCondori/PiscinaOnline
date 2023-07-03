<form wire:submit.prevent="submit">
  <h5>Rango de fecha</h5>
  <div class="row">
      <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
                <label for="example-date-input" class="form-control-label">De Fecha</label>
                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
            </div>
          </div>
        </div>
      <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
                <label for="example-date-input" class="form-control-label">A fecha</label>
                <input class="form-control" type="date" value="2018-11-23" id="example-date-input" wire:model.defer="to">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          {{$estado}}
          <button wire:click="$refresh">c</button>
          <button class="btn bg-gradient-primary my-1 me-1" wire:click.prevent="getgraphic()">Rango de fecha</button>
        
{{--  @foreach ($sales as $sale)
@php
$product=App\Models\Product::where('id', $sale->product_id)->first();

@endphp
<th>{{$product->product_name}}</th>       
<th>{{$sale->product_id}}</th>
@endforeach
--}}
@foreach ($saleswithsum as $item)
  <th>{{$item}}</th>
@endforeach
  </div>
  

</div>
<button type="submit" wire:click="refresh" class="btn btn-primary">Save Contact</button>
</form>


    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <style>
        .chart1{
        width: 300px;
        height: 500px;
        }
    </style>
    <div class="card">

        <h4>Reporte Gráfico</h4>
        {{ csrf_field() }}
<div>


{{$estado}}
        <div >
            <P>Gráfico</P> 

            <div  class="card text-center">
            <button wire:click="refresh">refrescar</button>
              {!! $estado !!}
               <div class="card-body"> <canvas id="bar-chart" height="120"></canvas></div>
            </div>
        </div>
    </div>
    <script>
        // Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      
      
    labels: {!! json_encode($sales)!!},
      datasets: [
      
      {
          label: "Unidades",
          type: "line",
          borderColor: "#8e5ea2",
          
          data: {!! json_encode($total_sales) !!},
          fill: true
        },   
      {
          label: "Venta en (Bs)",
          backgroundColor: {!! json_encode($colours) !!},
          data: {!! json_encode($saleswithsum) !!},
          fill: false
        },
        
      ]
    },
    options: {
      legend: { display: true },
      title: {
        display: true,
        text: 'Venta de productos'
      }
    }
});
    </script>
</div>
