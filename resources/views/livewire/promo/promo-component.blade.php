<div>
    @include('livewire.promo.new-promo')
    {{-- Stop trying to control. --}}
    <h5>Promociones</h5>
    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>

    <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Promoción</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Desde</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasta</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descuento</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>

              <th class="text-secondary opacity-7">Acciones</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($promotions as $promotion)
                  
              <tr>
                  <td>
                  <div class="d-flex px-2 py-1">
                     
                      <div class="d-flex flex-column justify-content-center">
                      <p class="text-xs text-secondary mb-0">{{$promotion->promo_name}}</p>
                      </div>
                  </div>
                  </td>
                  <td>
                  <p class="text-xs font-weight-bold mb-0">{{$promotion->promo_description}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{$promotion->promo_from}}</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$promotion->promo_to}}</span>
                        </td>
                  <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$promotion->promo_discount}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$promotion->promo_type}}</span>
                    </td>
                    @if ($promotion->promo_state='Activo')
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{$promotion->promo_state}}</span>
                      </td>                       
                    @else
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-danger">{{$promotion->promo_state}}</span>
                      </td>  
                    @endif
                  <td class="align-middle">
                      <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $promotion->id }})">Editar</button>
                  @if ($promotion->promo_state=='Activo')
                  <button type="button" class="btn bg-gradient-danger"  wire:click="delete({{ $promotion->promo_state }})"><i class="fas fa-power-off"></i></button>
                  @else
                  <button type="button" class="btn bg-gradient-success" wire:click="active({{ $promotion->promo_state }})"><i class="fas fa-power-off"></i></button>
                  @endif
                  </td>
              </tr>
  
  
              @endforeach
           
  
          </tbody>
        </table>
      </div>

</div>
