<div class="modal fade" wire:ignore.self id="additionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Producto</h5>
        </div>
        <div class="modal-body">
            <div class="card-body pb-3">
                <form>
                  <label>Nombre</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" wire:model="product_name" disabled>
                  </div>
                  
                  <div class="row">

                    <div class="col-md-6">
                      <label>Tipo de Producto</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="product_type_id" disabled>
                          <option value="{{$product_type_id}}">{{$product_type}}</option>
                         @if ($typeproducts)
                         @foreach ($typeproducts as $typeproduct)
                         <option value="{{$typeproduct->id}}">{{$typeproduct->product_name}}</option>
                         @endforeach
                         @endif
                        </select>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <label>Cantidad anterior</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="stock" aria-label="Name" aria-describedby="name-addon" wire:model="product_amount" disabled>
                      </div>
                    </div>


                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                        <label>Cantidad Actual</label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="cantidad" aria-label="Name" aria-describedby="name-addon" wire:model="product_stock" disabled>
                        </div>
                      </div>


                    <div class="col-md-6">
                      <label>Cantidad a Adicionar</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="¿Cuánto desea adicionar?" aria-label="Name" aria-describedby="name-addon" wire:model="product_add_inventory">
                      </div>
                    </div>
                  </div>
                  <label>Descripcion</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Descripcion" aria-label="Name" aria-describedby="name-addon" wire:model="product_add_description">
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click.prevent="addition()" class="btn bg-gradient-primary">Actualizar</button>
                  </div>
                </form>
              </div>
        </div>
       
      </div>
    </div>
  </div>