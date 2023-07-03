<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @include('livewire.products.update')
    @include('livewire.products.addition')
    <h2>Vista de productos
    </h2>
    @if (session()->has('message'))
    <div class="alert alert-success" style="margin-top:30px;">x
      {{ session('message') }}
    </div>
@endif
    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Producto
      </button>
     
      <a href="{{ url('/reports') }}" type="button" class="btn bg-gradient-info btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Ir a reportes" data-container="body" data-animation="true">Reporte <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
      </svg></a>
      
      <button type="button" class="btn bg-gradient-success btn-tooltip" wire:click="history()" data-bs-toggle="tooltip" data-bs-placement="top" title="Historial de adición de productos"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
      </svg></button>
      <!-- Modal -->
<div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        </div>
        <div class="modal-body">
            <div class="card-body pb-3">
                <form>
                  <label>Nombre</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Name" wire:model="product_name">
                  </div>
                  <label>Tipo de Producto</label>
                  <div class="input-group mb-3">
                    {{--<input type="text" class="form-control" placeholder="Tipo de producto" aria-label="Email" aria-describedby="email-addon" wire:model="product_type_id">
      --}}
                    <select class="form-control" id="exampleFormControlSelect1" wire:model="product_type_id">
      
                      <option value="">Seleccione Tipo</option>
                     @foreach ($selectproducts as $selectproduct)
                     <option value="{{ $selectproduct->id}}">{{$selectproduct->product_name}}</option> 
                     @endforeach
                           
                       </select>
                  </div>
                  <label>Descripcion</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Descripcion" aria-label="Name" aria-describedby="name-addon" wire:model="product_description">
                  </div>
                  <label>Stock</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Stock" aria-label="Name" aria-describedby="name-addon" wire:model="product_stock">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Precio</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Precio Bs." aria-label="Name" aria-describedby="name-addon" wire:model="product_price">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label>Costo</label>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Costo Bs." aria-label="Name" aria-describedby="name-addon" wire:model="product_cost">
                      </div>
                    </div>
                  </div>
                  
                  <label>Cantidad</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cantidad" aria-label="Name" aria-describedby="name-addon" wire:model="product_amount">
                  </div>
                  <label>Imagen</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="Imagen" aria-label="Name" aria-describedby="name-addon" wire:model="product_image">
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click.prevent="store()" class="btn bg-gradient-primary">Registrar</button>
                  </div>
                </form>
              </div>
        </div>
       
      </div>
    </div>
  </div>

  <div class="card">

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descricion</th>
          <th scope="col">stock</th>
          <th scope="col">Precio</th>
          <th scope="col">Costo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($products as $product)
       <tr>
          <th scope="row">{{$product->id}}</th>
          <td>
            @php
                 $product_type=App\Models\ProductType::find($product->product_type_id);
            @endphp
            {{$product_type->product_name}}
          </td>
          <td>{{$product->product_name}}</td>
          <td>{{$product->product_description}}</td>
          <td>{{$product->product_stock}}</td>
          <td>{{$product->product_price}}</td>
          <td>{{$product->product_cost}}</td>
          <td>{{$product->product_amount}}</td>
          <td>
            <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $product->id }})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></button>
            @if ($product->product_state=='Activo')
            <button type="button" class="btn bg-gradient-danger"  wire:click="delete({{ $product->id }})"><i class="fas fa-power-off"></i></button>
            <button type="button" class="btn bg-gradient-success btn-tooltip" data-bs-toggle="modal" data-bs-target="#additionModal" wire:click="add({{ $product->id }})" data-bs-toggle="tooltip" data-bs-placement="top" title="Adicionar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
            </svg></button>
            @else
            <button type="button" class="btn bg-gradient-success" wire:click="active({{ $product->id }})"><i class="fas fa-power-off"></i></button>
            @endif
              
              </td>
        </tr> 
       @endforeach
          
      
      </tbody>
    </table>
 
  </div>
    

</div>
