<div>
    {{-- The Master doesn't talk, he acts. --}}

<h5>Personalizacion de web</h5>



@if (session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-text">{{ session('message') }}</span>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
{{-- Nav about webcomponents --}}
<div class="card">
  <div class="content col-md-12">

    <div class="nav-wrapper position-relative end-0">
      <ul class="nav nav-pills nav-fill p-1" role="tablist">
         <li class="nav-item">
            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#profile-tabs-simple" role="tab" aria-controls="profile" aria-selected="false">
            Empresa
            </a>
         </li>
         <li class="nav-item">
          <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-simple" role="tab" aria-controls="code" aria-selected="true">
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


<div class="card col-md-12">
  <div class="card-frame table-responsive">
    
    <table class="table table-hover align-items-center mb-0">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Segmento</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Funcionamiento</th>
          <th scope="col">Modificado en</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($modules as $module)
       <tr>
          <th scope="row">{{$module->id}}</th>
          <td>{{$module->modulename}}</td>
          <td>{{$module->moduledescription}}</td>
          @if ($module->modulestate=='Activado')
          <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">{{$module->modulestate}}</span>
            </td>
          @else
          <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-danger">{{$module->modulestate}}</span>
            </td>
          @endif
          <td>{{$module->updated_at}}</td>
          <td>
                
              
              @if ($module->modulestate=='Activado')
              <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="desactive({{ $module->id }})">Desactivar</button>    
              @else
              <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="active({{ $module->id }})">Activar</button>    
                  
              @endif
          </td>
        </tr> 
       @endforeach
          
      
      </tbody>
    </table>
  
  
  </div> 
  


</div>
</div>
