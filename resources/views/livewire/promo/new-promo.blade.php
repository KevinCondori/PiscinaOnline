<div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Promocion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store" enctype="multipart/form-data">
                   <div class="row">
                       


                    <div class="form-group col-md-6">
                        <input type="hidden">
                        <label>Nombre de promocion</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nombre de la promoción" aria-label="Name" wire:model="promo_name">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Seleccione canal</label>
                    <div class="input-group mb-3">
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="promo_canal">
                            <option value="">Seleccione</option>
                           
                            <option value="1">Whatsapp</option>
                            <option value="2">Página web</option>
                            <option value="3">Todos los canales</option>  
                     
                               
                             </select>
                    </div>
                    </div>



                   </div>


                    <div class="row">

                        <div class="form-group col-md-6">
                            <input type="hidden">
                            <label>Fecha de inicio</label>
                            <div class="input-group mb-3">
                            <input type="date" class="form-control" aria-label="Name" wire:model="promo_from">
                            </div>
                        </div>
    
                        <div class="form-group col-md-6">
                            <label>Fecha de finalización</label>
                        <div class="input-group mb-3">
                        <input type="date" class="form-control" aria-label="Name" aria-describedby="name-addon" wire:model="promo_to">
                        </div>
                        </div>
    
                    </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <input type="hidden">
                        <label>Cupón</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cupón opcional para activar la promoción" aria-label="Name" wire:model="promo_code">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Descuento en el consumo</label>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="la promoción se aplica al consumo" aria-label="Name" aria-describedby="name-addon" wire:model="promo_discount">
                    </div>
                    </div>

                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <input type="hidden">
                        <label>Mensaje a usar en la promo</label>
                        <div class="input-group mb-3">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje a usar en la promoción" wire:model="promo_message"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="hidden">
                        <label>Descripción de la promo</label>
                        <div class="input-group mb-3">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Descripción promoción" wire:model="promo_description"></textarea>
                        </div>
                    </div>
                   

                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label>Imagen de la promo</label>
                    <div class="input-group mb-3">
                    <input type="file" class="form-control" aria-label="Name" aria-describedby="name-addon" wire:model="promo_image">
                    </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Seleccione el tipo de promoción</label>
                    <div class="input-group mb-3">
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="promo_type">
                            <option value="">Seleccione</option>
                           
                            <option value="1">Cliente antiguos (mas de 3)</option>
                            <option value="2">Clientes nuevos</option>
                            <option value="3">Todos los clientes</option>  
                               
                             </select>
                    </div>
                    </div>
                    
                </div>
                    
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
                </div>
                </form>
            </div>
            
       </div>
    </div>
  </div>