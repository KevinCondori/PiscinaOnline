@extends('layout')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="card">
   <div class="card-body">

    <h5>Datos de control <span class="badge badge-sm bg-gradient-success"> En línea</span></h5>
    <p>Los datos son usados en el sistema y al momento de generar la factura</p>
    
    <p><span class="badge badge-sm bg-gradient-info"> Última modificación {{$data->updated_at}}</span></p>
      <form action="{{ route('invoicecontrol.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
           
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-success">
                          <label for="">Numero de autorización</label>
                      <input type="text" placeholder="Success" value="{{$data->control_auth}}" class="form-control is-valid" name="control_auth" />
                    </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group has-success">
                              <label for="">Llave de dosificación</label>
                          <input type="text" placeholder="Success" value="{{$data->control_key}}" class="form-control is-valid" name="control_key" />
                        </div>
                      </div>
                      
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group has-success">
                          <label for="">Número de factura inicial</label>
                      <input type="text" placeholder="Success" value="{{$data->control_invoice}}" class="form-control is-valid" name="control_invoice" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group has-success">
                          <label for="control_activity">Actividad Económica</label>
                      <input type="text" placeholder="Acitividad económica" id="control_activity" value="{{$data->control_activity}}" class="form-control is-valid" name="control_activity" />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group has-success">
                          <label for="control_date">Fecha de límite de emisión</label>
                      <input type="date" name="control_date" id="control_date" class="form-control is-valid" value="{{$data->control_date}}">
                    </div>
                  </div>

            </div>
            <button type="submit" class="btn btn-success btn-lg w-100">Publicar Cambios</button>
          </form>
   </div>
</div>

@endsection