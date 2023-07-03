<div>
    {{-- The whole world belongs to you. --}}
    @if (session()->has('message'))
    <div class="alert alert-success" style="margin-top:30px;">x
      {{ session('message') }}
    </div>
@endif
    <h4>Anote su reserva con nosotros</h4>
    
        <form action="#"  wire:submit.prevent="submit">
            @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Nombres</label>
                <input type="text" class="form-control" placeholder="Nombre" wire:model="name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellidos" wire:model="surname">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">CI/NIT</label>
                <input type="text" class="form-control" placeholder="Ingrese su correo" wire:model="ci">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Departamento</label>
                <input type="text" class="form-control" placeholder="Ingrese su correo" wire:model="department">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="">Correo</label>
                <input type="text" class="form-control" placeholder="Ingrese su correo" wire:model="email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Numero de referencia</label>
                <input type="text" class="form-control" placeholder="Telefono\Celular" wire:model="phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Fecha</label>
                <input type="date" class="form-control" id="" placeholder="Date" wire:model="reservation_date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tomar en cuenta</label>
                <input type="text" class="form-control" id="book_time" name= "date" value="Tus datos necesarios para ingresar" placeholder="Time" disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Personas</label>
                <div class="select-wrap one-third">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control" wire:model="reservation_count">
                    <option value="">Personas</option>
                    <option value="1">1</option>
                    <option value="dos o mas">2+</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="form-group text-center">
              {{--<input type="submit" value="Enviar2" class="btn btn-primary py-3 px-5">--}}
              <button class="btn btn-primary py-3 px-5" wire:click.prevent="store()">Enviar</button>
              </div>
            </div>
          </div>
        </form>
    
</div>
