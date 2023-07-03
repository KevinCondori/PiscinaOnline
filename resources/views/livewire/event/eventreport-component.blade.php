<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        
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
    

    <div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reporte de los eventos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <button class="btn bg-gradient-success my-1 me-1" wire:click="reportevent()">Visualizar</button>
                    @if ($viewreport=='active')
<div class="col-xs-12">
<h5>Su reporte se genero exitosamente</h5>

<embed src="{{asset($this->reportfile)}}" type="application/pdf" height="370px" width="100%" class="responsive">

</div>    
@else
    <div>
        <h5>Seleccione su reporte y se podra visualizar</h5>
    </div>
    
@endif
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
                    <button type="button" wire:click.prevent="store()" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
                </div>
           </div>
        </div>
      </div>

{{--Detalle de evento--}}
<div class="modal fade" wire:ignore.self id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalle del evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <button class="btn bg-gradient-success my-1 me-1" wire:click="reportevent()">Visualizar</button>
                @if ($viewreport=='active')
<div class="col-xs-12">
<h5>Su reporte se genero exitosamente</h5>

<embed src="{{asset($this->reportfile)}}" type="application/pdf" height="370px" width="100%" class="responsive">

</div>    
@else
<div>
    <h5>Seleccione su reporte y se podra visualizar</h5>
</div>

@endif
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
            </div>
       </div>
    </div>
  </div>


        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Evento</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Publico</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Precio</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente CI</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Registro</th>
                <th class="text-secondary opacity-7">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                        <p class="text-xs text-secondary mb-0">{{$event->id}}</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">{{$event->eventname}}</p>
                    </td>
                   
                    <td class="align-middle text-center text-sm">
                        <span class="text-secondary text-xs font-weight-bold">{{$event->eventdescription}}</span>
                        </td>
                    
                   
                   
                    
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$event->event_date}}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$event->event_type}}</span>
                        </td>
                        @if ($event->event_public=='Si')
                        <td class="align-middle text-center">
                            <span class="badge badge-sm bg-gradient-success">{{$event->event_public}}</span>
                        </td>
                        @else
                        <td class="align-middle text-center">
                            <span class="badge badge-sm bg-gradient-danger">{{$event->event_public}}</span>
                        </td>
                        @endif
                        
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$event->event_price}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$event->event_ci_customer}} {{$event->event_customer}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{$event->created_at}}</span>
                        </td>
                    <td class="align-middle">
                        <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $event->id }})">Detalle</button>
                    
                    </td>
                </tr>
    
    
                @endforeach
             
    
            </tbody>
          </table>
        </div>
      </div>
</div>
