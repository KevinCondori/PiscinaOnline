<div>
    <style>
        /* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  height: 150px;
  vertical-align: middle;
}

.btnlocker {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 2px solid rgba(238, 238, 238, 0.2);
  background: transparent;
}

.btnlocker:hover {
  background-color: rgba(13, 167, 228, 0.63);
}

.btnforms {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 2px solid rgba(238, 238, 238, 0.2);
  background: #0fd1eb;
}

.btnforms:hover {
  background-color: rgba(19, 224, 180, 0.63);
}

.newcolor {
    background-color: rgb(14, 214, 104);
}

.newcolor:hover {
    background-color: #1fe6aa;
}
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
  justify-content: center;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
   /* width: 33.3333%;*/
   width: 25%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #13e7b2 40%, #0cc0d8 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}
    
    </style>
@if (session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text">{{ session('message') }}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<!-- Modal -->
<div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Asignacion de Casillero {{$locker_name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
  
  
                  @if ($new_customer_form=='visible')
                  <p>Ingrese el CI y validar</p>
                  <div class="form-group {{$new_customer_form}} row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form-customerci">CI/NIT</label>
                          <input id="form-customerid" type="text" class="form-control" placeholder="CARNET/NIT" aria-label="Name" wire:model="ci">
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form-customersurname">Apellido</label>
                          <input id="form-customersurname" type="text" class="form-control" placeholder="Apellido" aria-label="Name" wire:model="surname">    
                        </div>
                      </div>
                      
                      <button type="button" wire:click.prevent="buscarid()" class="btn btnforms">Validar</button>
                    
                  </div>

                  @endif

                    
                   @if ($active_new_customer=='visible')
   
                    <div class="form-group">
                

                      <div class="form-group row">
                        <p>Se ha detectado un nuevo cliente vamos a registrarlo</p>
                        <div class="col-md-6">
                          <div class="form-group has-success">
                            <label for="form-customerci">CI/NIT</label>
                            <input type="text" class="form-control is-valid" id="form-customerci" placeholder="CI" wire:model="ci">
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form-customersurname">Apellidos</label>
                            <input id="form-customersurname" type="text" placeholder="Apellidos" class="form-control is-valid" aria-label="Name" aria-describedby="name-addon" wire:model="surname">
                          </div>
                        </div>
                      </div>

                        <div class="form-group row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form-customername">Nombre</label>
                              <input id="form-customername" type="text" placeholder="Nombre (opcional)" class="form-control"  wire:model="name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form-customerdepartment">Departamento</label>
                              <select class="form-control" id="form-customerdepartment" wire:model="department">
                                <option value="">Seleccione un departamento (Opcional)</option>
                              
                                <option value="La Paz">La Paz</option>
                                <option value="Cochabamba">Cochabamba</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Chuquisaca">Chuquisaca</option>
                                <option value="Oruro">Oruro</option>
                                <option value="Potosi">Potosi</option>
                                <option value="Tarija">Tarija</option>
                                <option value="Beni">Beni</option>
                                <option value="Pando">Pando</option>
                                <option value="Extranjero">Extranjero</option>  
                                </select>
                            </div>
                          </div>


                          </div>

                          <div class="form-group row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="form-customerphone">Teléfono/Celular</label>
                                <input id="form-customerphone" type="text" placeholder="Teléfono/Celular" class="form-control"  wire:model="phone">
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="form-group">
                                <label for="form-customeremail">email (opcional)</label>
                                <input id = "form-customeremail"  type="text" placeholder="email (opcional)" class="form-control"  wire:model="email">
                              </div>
                            </div>
  
  
                            </div>

                        </div>
                    @endif
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary newcolor" data-bs-dismiss="modal">Confirmar</button>
            </div>
       </div>
    </div>
  </div>















  <div class="card justify-content-center">

    <h5>Asignar casillero</h5>
    <div class="main">
        
        <ul class="cards">
            @foreach ($lockers as $locker)
            <li class="cards_item">
                <div class="card">
                  <div class="card_image justify-content-center"><img class="justify-content-center" src="project_img/cerrar-con-llave.png"></div>
                  <div class="card_content">
                    <h2 class="card_title">{{$locker->locker_name}}</h2>
                    <p class="card_text">{{$locker->locker_description}}</p>
                    <button class="btnlocker" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $locker->id }})">Asignar</button>
                  </div>
                </div>
              </li>
            @endforeach        
          </ul>
    
    
    </div>

  </div>
</div>