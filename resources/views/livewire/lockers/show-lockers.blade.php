<div class="card">
    @include('livewire.lockers.create')
    @include('livewire.lockers.update')
<div class="text-center">
    <h5>Casilleros</h5>
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
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Casillero</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">modificación</th>
            <th class="text-secondary opacity-7">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($lockers as $locker)
                
            <tr>
                <td>
                <div class="d-flex px-2 py-1">
                   
                    <div class="d-flex flex-column justify-content-center">
                    <p class="text-xs text-secondary mb-0">{{$locker->locker_name}}</p>
                    </div>
                </div>
                </td>
                <td>
                <p class="text-xs font-weight-bold mb-0">{{$locker->locker_description}}</p>
                </td>
                @if ($locker->locker_state=='Activo')
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{$locker->locker_state}}</span>
                    </td>
                @else
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">{{$locker->locker_state}}</span>
                    </td>
                @endif
                
                <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">{{$locker->updated_at}}</span>
                </td>
                <td class="align-middle">
                    <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $locker->id }})">Editar</button>
                @if ($locker->locker_state=='Activo')
                <button type="button" class="btn bg-gradient-danger"  wire:click="delete({{ $locker->id }})"><i class="fas fa-power-off"></i></button>
                @else
                <button type="button" class="btn bg-gradient-success" wire:click="active({{ $locker->id }})"><i class="fas fa-power-off"></i></button>
                @endif
                </td>
            </tr>


            @endforeach
         

        </tbody>
      </table>
    </div>
  </div>