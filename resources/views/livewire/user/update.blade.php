<div class="modal fade" wire:ignore.self id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
  
  <div class="row">

    <div class="form-group col-md-6">
        <input type="hidden" wire:model="product_id">
        <label>Nombre</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombres" aria-label="Name" wire:model="name">
        </div>
    </div>
    
    <div class="form-group col-md-6">
        <label>Apellidos</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Apellidos" aria-label="Name" aria-describedby="name-addon" wire:model="surname">
    </div>
    </div>
  </div>
  <div class="row">

    <div class="form-group col-md-3">
        <input type="hidden" wire:model="product_id">
        <label>Celular</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Telefono\Celular" aria-label="Name" wire:model="phone">
        </div>
    </div>
    
    <div class="form-group col-md-3">
        <label>CI</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Carnet" aria-label="Name" aria-describedby="name-addon" wire:model="ci">
    </div>
    </div>
    <div class="form-group col-md-6">
        <label>Correo</label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Correo" aria-label="Name" aria-describedby="name-addon" wire:model="email">
    </div>
    </div>
  </div>

                    <div class="form-group">
                        <label for="">Usuario</label>
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="user_role">
                            <option value="{{$user_role}}">{{$user_role}}</option>
                           
                            <option value="Administrador">Administrador</option>
                            <option value="Cajero">Cajero</option>  
                     
                               
                              
                             </select>
                    </div>
                    <div class="form-group">
                        <label for="">Estado</label>
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="state">
                            <option value="{{$state}}">{{$state}}</option>
                           
                            <option value="Activo">Activo</option>
                            <option value="Desactivado">Desactivado</option>  
                     
                               
                              
                             </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
            </div>
       </div>
    </div>
  </div>