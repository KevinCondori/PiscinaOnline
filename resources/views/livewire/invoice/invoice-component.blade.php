<div>
    {{-- Success is as dangerous as failure. --}}

    @include('livewire.invoice.new-invoice')

  <h5>Detalle de Consumo</h5>

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span class="alert-icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-text">{{ session('message') }}</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    {{--<button type="button" class="btn bg-gradient-primary" wire:click="pdfdemo()" formtarget="_blank">Generar demo boton</button>
          <a href="{{$pdfdemo}}" type="button" class="btn bg-gradient-primary" wire:click="pdfdemo()">Generar demo2</a>
          <a href="{{$pdfdemo}}" target="_blank" rel="noopener noreferrer" wire:click="pdfdemo()">
            Link
        </a>--}}
          <div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">CI</th>
            <th scope="col">Departamento</th>
            <th scope="col">Casillero</th>
         
            <th scope="col">Acciones</th>
            
          </tr>
        </thead>
        <tbody>
         @foreach ($customers as $customer)
         <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}} {{$customer->surname}}</td>
            <td>{{$customer->ci}}</td>
            <td>{{$customer->department}}</td>
            <td>{{$customer->locker_name}}</td>
            
                        <td>
                  {{--<button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $customer->id }})">Generar</button>--}}
                  {{--<button type="button" onclick="return confirm('Al generar el detalle se desocupara el casillero ¿Esta seguro?');" class="btn bg-gradient-primary" wire:click="edit({{ $customer->id }})">Generar</button>--}}
                  <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{ $customer->id }})">Generar</button>
            </td>
          </tr> 
         @endforeach
            
        
        </tbody>
      </table>
   

</div>

</div>
