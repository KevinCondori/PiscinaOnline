<div>
    {{-- The whole world belongs to you. --}}
   

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
   {{-- @include('livewire.consumption.new-consumption')
--}}
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
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
                  <input type="number" max="5" class="form-control" placeholder="Cantidad a Pedir" aria-label="Name" aria-describedby="name-addon" wire:model="consumption_amount">
                </div>
                  
                </div>


                {{--  <div class="form-group">
                    <label>Cliente</label>
                    <div class="input-group mb-3">
                  

                  <select class="form-control" id="exampleFormControlSelect1" wire:model="customer_id">
                   
                    <option value="">Seleccione un cliente</option>
                    
                    @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}} {{$customer->surname}} CI: {{$customer->ci}}</option> 
                    @endforeach
                    <option value="dato">
                      <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </option>
                      
                     </select>
   
                    </div>
                

                </div>
--}}
                <div class="input-group">
                  <div class="form-control jumbotron" wire:ignore>
                    <div class="container" wire:ignore>
                      <div class="col-md-12">
                        <label>Clientes</label>
                        <select id="multiple" class="js-states form-control" multiple style="width: 100%" autocomplete="off" wire:model="customer_id">
                          <option>Use el CI o Apellido del cliente</option>
                          @foreach ($customers as $customer)
                          <option value="{{$customer->id}}">{{$customer->name}} {{$customer->surname}} CI: {{$customer->ci}}</option> 
                          @endforeach
                          <option>Mas</option>
                        </select>
                      </div>
                    </div>
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
{{--
<div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descricion</th>
            <th scope="col">stock</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($products as $product)
         <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->product_type_id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_description}}</td>
            <td>{{$product->product_stock}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_amount}}</td>
            <td>
                  <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $product->id }})">Pedir</button>
            </td>
          </tr> 
         @endforeach
            
        
        </tbody>
      </table>


</div>
--}}





                  <div>
                    @php
                    $menuproductos=App\Models\ProductType::all();
                @endphp
                <div class="justify-content-center row">

                  @foreach ($menuproductos as $menucabecera)
                  {{--@if ($menucabecera->id=='1')
                  
                  @else--}}
                 
                  {{--@endif--}}
                  <div class="col">
                    {{--<button type="button" class="btn btn-outline-dark" wire:click="showmenu({{ $menucabecera->id }})">{{$menucabecera->product_name}}</button>--}}
                    <button type="button" class="btn btn-outline-dark" wire:click="showmenu({{ $menucabecera->id }})" >{{$menucabecera->product_name}}</button>
                  </div>
                 
               
                  @endforeach
                  

                </div>

                <div class="container">
                  <input wire:model="search" type="text" placeholder="Productos..."/>
                  <div class="row">
                    {{--@foreach (App\Models\Product::where('product_type_id',$item->id)->get() as $product)--}}
                    
                    @foreach ($products as $product)
                        
               
                    <div class="card card-frame col-md-3">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-md-10"><a href="javascript:;" class="d-block" >
                            <img src="{{ asset('storage/'.$product->product_image) }}" class="img-fluid border-radius-lg"  width="200px" height="200px">
                          </a>
                          </div>
                          <div class="col-md-2">
                            Bs{{$product->product_price}}
                          </div>
                        </div>
                        <strong>{{$product->product_name}}</strong>
                        <br>
                        {{$product->product_description}}
                        <br>
                        Quedan: {{$product->product_stock}}
                      
                        <button type="button" class="btn bg-gradient-primary col-md-12" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $product->id }})">Pedir</button>
                      </div>
                      
                    </div>
                    @endforeach
                  
                   
                
                  </div>
                </div>
                  
                  
                  </div>

           
                  <!-- jQuery -->
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                  <!-- Select2 -->
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
                  <script>
                    $("#single").select2({
                        placeholder: "Clientes",
                        allowClear: true
                    });
                    $("#multiple").select2({
                        placeholder: "Seleccione el cliente",
                        allowClear: true
                    });
                   /* $("#single").val('default').selectpicker("refresh");
                    $("#multiple").val('default').selectpicker("refresh");
                   */document.addEventListener('livewire:load', function () {
                    $('#multiple').on('change', function () {
                     @this.set('customer_id', this.value);
                   });
                   })
                    
                  </script>
</div>
