@extends('layout')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="card">
      <form action="{{ route('aboutsettings.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group has-success">
                      <label for="">Descripcion acerca de nosotros</label>
                  <input type="text" placeholder="Success" value="{{$data->aboutdescription}}" class="form-control is-valid" name="newdescription"/>
                </div>
              </div>
             
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group has-success">
                          <label for="">Experiencia</label>
                      <input type="text" placeholder="Success" value="{{$data->aboutexperience}}" class="form-control is-valid" name="newexperience" />
                    </div>
                  </div>
                  <div class="col-md-4">
                        <div class="form-group has-success">
                              <label for="">Menus</label>
                          <input type="text" placeholder="Success" value="{{$data->aboutmenu}}" class="form-control is-valid" name="newmenu" />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group has-success">
                              <label for="">Lugares</label>
                          <input type="text" placeholder="Success" value="{{$data->aboutplace}}" class="form-control is-valid" name="newplaces" />
                        </div>
                      </div>
            </div>
            <div class="row">

                  <div class="form-group">
                        <label for="exampleFormControlTextarea1">Caracteristicas</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="newcharacters">{{$data->aboutcharacters}}</textarea>
                      </div>

            </div>
            <label for="archivo"><b>Imagen 1: </b></label><br>
  <input type="file" name="archivo1" required>
  <label for="archivo"><b>Imagen 2: </b></label><br>
  <input type="file" name="archivo2" required>
            <button type="submit" class="btn btn-success btn-lg w-100">Publicar Cambios</button>
          </form>
</div>

@endsection