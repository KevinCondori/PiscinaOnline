@extends('layout')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="card">
   <div class="card-body">

    <h5>Empresa <span class="badge badge-sm bg-gradient-success"> En línea</span></h5>
    <p>Los datos son usados en el sistema y en la página web para nuestros clientes</p>
    
    <p><span class="badge badge-sm bg-gradient-info"> Última modificación {{$data->updated_at}}</span></p>
      <form action="{{ route('companysettings.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group has-success">
                      <label for="">Descripción</label>
                  <input type="text" placeholder="Success" value="{{$data->company_description}}" class="form-control is-valid" name="newdescription"/>
                </div>
              </div>
             
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group has-success">
                          <label for="">NIT</label>
                      <input type="text" placeholder="Success" value="{{$data->company_nit}}" class="form-control is-valid" name="new_nit" />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group has-success">
                          <label for="">Precio de ingreso (Bs.) </label>
                      <input type="text" placeholder="Precio de ingreso a la picina" value="{{$data->company_entryprice}}" class="form-control is-valid" name="new_entryprice" />
                    </div>
                  </div>
                  <div class="col-md-2">
                        <div class="form-group has-success">
                              <label for="">Número</label>
                          <input type="text" placeholder="Success" value="{{$data->company_phone}}" class="form-control is-valid" name="new_phone" />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group has-success">
                              <label for="">Correo(para el contacto con la empresa)</label>
                          <input type="text" placeholder="Success" value="{{$data->company_email}}" class="form-control is-valid" name="new_email" />
                        </div>
                      </div>
                      
            </div>
            <div class="row">

                  <div class="form-group">
                        <label for="exampleFormControlTextarea1">Caracteristicas</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="new_address">{{$data->company_address}}</textarea>
                      </div>

            </div>
            <label for="archivo"><b>Imágen Logo: </b></label><br>
  <input type="file" name="archivo">
            <button type="submit" class="btn btn-success btn-lg w-100">Publicar Cambios</button>
          </form>
   </div>
</div>

@endsection