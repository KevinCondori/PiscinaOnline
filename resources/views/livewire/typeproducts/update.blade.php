<div class="modal fade" wire:ignore.self id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Segmento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
  
  
                    <div class="form-group">
                        <input type="hidden" wire:model="product_id">
                        <label>Segmento Actual</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Segmento" aria-label="Name" wire:model="product_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Descripción" aria-label="Name" aria-describedby="name-addon" wire:model="product_description">
                    </div>
                      
                    </div>
                    <div class="form-group">
                        <label for="">Estado del segmento</label>
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="product_type">
                            <option value="">Seleccione estado</option>
                           
                            <option value="Activo">Activado</option>
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