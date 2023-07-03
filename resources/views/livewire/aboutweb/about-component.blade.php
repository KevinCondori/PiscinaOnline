<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

{{-- Nav about web components --}}
<div class="card">
    <div class="content col-md-12">
  
      <div class="nav-wrapper position-relative end-0">
        <ul class="nav nav-pills nav-fill p-1" role="tablist">
           <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-simple" role="tab" aria-controls="profile" aria-selected="true">
              Empresa
              </a>
           </li>
           <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-simple" role="tab" aria-controls="profile" aria-selected="true">
            Activacion de Segmentos
            </a>
         </li>
           <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab" aria-controls="dashboard" aria-selected="false">
              Acerca de
              </a>
           </li>
           <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab" aria-controls="dashboard" aria-selected="false">
            Servicios
            </a>
         </li>
         <li class="nav-item">
          <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab" aria-controls="dashboard" aria-selected="false">
          Nosotros
          </a>
       </li>
         <li class="nav-item">
          <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-simple" role="tab" aria-controls="dashboard" aria-selected="false">
          Redes sociales
          </a>
       </li>
         </ul>
     </div>
    </div>
  </div>

    <form>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group has-success">
          <input type="text" placeholder="Success" value="{{$dataabout->aboutdescription}}" class="form-control is-valid" name="newdescription"/>
        </div>
      </div>
     
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group has-success">
              <input type="text" placeholder="Success" class="form-control is-valid" wire:model="newexperience"/>
            </div>
          </div>
    </div>
    <button type="button" wire:click.prevent="update()" class="btn btn-success btn-lg w-100">Publicar Cambios</button>
  </form>

</div>
