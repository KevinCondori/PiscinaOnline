<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h4>Componente Asignacion de Casilleros</h4>
    
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
                      
                      <button type="button" wire:click.prevent="buscarid()" class="btn btn-primary">Validar</button>
                    
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
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
            </div>
       </div>
    </div>
  </div>




    <div>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Casilleros</th>
                <th scope="col">Descripcion</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($lockers as $locker)
             <tr>
                <th scope="row">{{$locker->id}}</th>
                <td>{{$locker->locker_name}}</td>
                <td>{{$locker->locker_description}}</td>
                <td>
                      <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $locker->id }})">Ocupar</button>
                </td>
              </tr> 
             @endforeach
                
            
            </tbody>
          </table>
    
    
    </div>
</div>
