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
                      <label>Nombre</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Name" aria-label="Name" wire:model="product_name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label>Precio</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" wire:model="product_price">
                  </div>
                    
                  </div>
                  <div class="form-group">
                    <label>Cantidad</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Cantidad a Pedir" aria-label="Name" aria-describedby="name-addon" wire:model="consumption_amount">
                </div>
                  
                </div>
                  <div class="form-group">
                    <label>Cliente</label>
                <div class="input-group mb-3">
                 
                
                  <select class="form-control" id="exampleFormControlSelect1" wire:model="customer_id">
                    <option value="">Seleccione un cliente</option>
                    @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}} {{$customer->surname}} CI: {{$customer->ci}}</option> 
                    @endforeach
                       
                      
                     </select>
   

                

                </div>
                  
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