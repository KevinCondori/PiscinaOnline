<div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
  
  
                    <div class="form-group">
                        <input type="hidden" wire:model="product_id">
                        <label>Casillero</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Casillero" aria-label="Name" wire:model="locker_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Descripción" aria-label="Name" aria-describedby="name-addon" wire:model="locker_description">
                    </div>
                      
                    </div>
                    <div class="form-group">
                        <label for="">Estado del casillero</label>
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="locker_state">
                            <option value="">Seleccione estado</option>
                           
                            <option value="Activo">Activado</option>
                            <option value="Desactivado">Desactivado</option>  
                     
                               
                              
                             </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
            </div>
       </div>
    </div>
  </div>