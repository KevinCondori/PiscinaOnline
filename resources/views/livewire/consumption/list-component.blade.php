<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="card">
        
    <div class="text-center">
        <h5>Lista de pedidos</h5>
    </div>
        @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text">{{ session('message') }}</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    
        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Producto</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pedido</th>
                <th class="text-secondary opacity-7">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($consumptions as $consumption)
                    
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                        <p class="text-xs text-secondary mb-0">{{$consumption->name}} {{$consumption->surname}}</p>
                        </div>
                    </div>
                    </td>
                
                    
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$consumption->product_name}}</span>
                        </td>
                    
                    
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$consumption->consumption_amount}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$consumption->created_at}}</span>
                        </td>
                    <td class="align-middle">
                       {{-- <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $locker->id }})">Editar</button>
                    --}}
                    <button type="button" class="btn bg-gradient-success"  wire:click="entregarpedido({{ $consumption->id }})">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                      </svg>
                    </button>
                    </td>
                </tr>
    
    
                @endforeach
             
    
            </tbody>
          </table>
        </div>
      </div>


</div>
