<div class="modal fade" wire:ignore.self id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Producto</h5>
        </div>
        <div class="modal-body">
            <div class="card-body pb-3">
                <form>
                  <label>Nombre</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" wire:model="product_name">
                  </div>
                  
                  <div class="row">

                    <div class="col-md-6">
                      <label>Tipo de Producto</label>
                      <div class="input-group mb-3">
                        <select class="form-control" id="exampleFormControlSelect1" wire:model="product_type_id">
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
                      <label>Stock</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="stock" aria-label="Name" aria-describedby="name-addon" wire:model="product_stock">
                      </div>
                    </div>


                  </div>
                  
                  <div class="row">
                    <div class="col-md-3">
 
                      <label>Precio</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Precio de venta" aria-label="Name" aria-describedby="name-addon" wire:model="product_price">
                      </div>
                    </div>

                    <div class="col-md-3">
 
                      <label>Costo</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Costo aproximado" aria-label="Name" aria-describedby="name-addon" wire:model="product_cost">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label>Cantidad</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cantidad" aria-label="Name" aria-describedby="name-addon" wire:model="product_amount">
                      </div>
                    </div>
                  </div>
                  <label>Descripcion</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Descripcion" aria-label="Name" aria-describedby="name-addon" wire:model="product_description">
                  </div>
                  <label>Imagen</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="imagen" aria-label="Name" aria-describedby="name-addon" wire:model="product_image">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click.prevent="update()" class="btn bg-gradient-primary">Actualizar</button>
                  </div>
                </form>
              </div>
        </div>
       
      </div>
    </div>
  </div>