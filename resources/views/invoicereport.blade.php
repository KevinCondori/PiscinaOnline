@extends('layout')
@section('content')
    
<div class="container">
<h2>Reporte de Facturas</h2>

    <div>
    <div class="row">
      <form action="{{ route('invoice.report_date') }}" method="post">
        @csrf
        <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              <select class="form-control" id="exampleFormControlSelect1" name="report_selected">
                <option value="">Seleccione un reporte</option>
                <option value="factura">Factura</option>
                {{--<option value="factura_consumo">Factura consumo</option>
                <option value="factura_codigo">Factura sin codigo</option>--}}       
            </select>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
                <label for="example-date-input" class="form-control-label">De fecha</label>
                <input class="form-control" type="date" value="2020-03-14" id="example-date-input" name="report_date">
            </div>
          </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                <select class="form-control" id="exampleFormControlSelect1" name="report_format">
                  <option value="">Seleccione un formato</option>
                  <option value="PDF">Pdf</option>
                  <option value="EXCEL">Excel</option>       
              </select>
              </div>
            </div>
          </div>
        <div class="col-md-2">
            <button type="submit" class="btn bg-gradient-primary my-1 me-1">Generar reporte</button>
    </div>
  </form>
         
    
</div>

<div>
    <h5>Rango de fecha</h5>
    <div class="row">
      <form action="{{ route('invoice.report_range_date') }}" method="post">
        @csrf
        <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              <select class="form-control" id="exampleFormControlSelect1" name="report_selected2">
                <option value="">Seleccione un reporte</option>
                <option value="factura">Factura</option>
                {{--<option value="factura_consumo">Factura consumo</option>
                <option value="factura_codigo">Factura sin codigo</option>--}}       
            </select>
            </div>
          </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
              <div class="input-group mb-4">
                  <label for="example-date-input" class="form-control-label">Fecha</label>
                  <input class="form-control" type="date" value="2018-11-23" id="example-date-input" name="from">
              </div>
            </div>
          </div>
        <div class="col-md-5">
            <div class="form-group">
              <div class="input-group mb-4">
                  <label for="example-date-input" class="form-control-label">De fecha</label>
                  <input class="form-control" type="date" value="2018-11-23" id="example-date-input" name="to">
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <div class="input-group mb-4">
                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                <select class="form-control" id="exampleFormControlSelect1" name="report_format2">
                  <option value="">Seleccione un formato</option>
                  <option value="PDF">Pdf</option>
                  <option value="EXCEL">Excel</option>       
              </select>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <button class="btn bg-gradient-primary my-1 me-1">Rango de fecha</button>
          </div>
        </form>
    
    </div>
    

</div>


</div>

@endsection