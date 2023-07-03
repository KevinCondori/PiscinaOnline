<div>
    {{-- Do your work, then step back. --}}

<div class="content">

  @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif

<!-- Button trigger modal -->
<button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nueva Publicacion
  </button>
  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva publicación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="modal-body">
            
           
                <div class="form-group">
                  <label for="exampleFormControlInput1">Título de la publicación</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título de la publicación" wire:model="namepost">
                </div>
               
               
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descripción</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="descriptionpost"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Subir imagen</label>
                    <input type="file" name="" id="" wire:model="imagepost">
                  </div>

                  
             


        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Publicar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
    
    <div>
        @foreach ($posts as $post)
        <div class="card col-md-8">
            <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
            {{--<a href="javascript:;" class="d-block">--}}
               {{-- <img src="{{url('storage/postimages/C4znT62lr286Z4yjKvoNEwLPP70cybs2m0A1ZEl5.jpg')}}" class="img-fluid border-radius-lg" width="" height="400px">--}}
                {{--{{$post->imagepost}}
                {{$path}}
                --}}
            {{--</a>--}}
          {{--  <img src="{{asset('storage/'.$post->imagepost)}}" class="img-fluid border-radius-lg" width="" height="400px">--}}
        {{--  <img src="{{ route('image.displayImage','img1.jpg') }}" alt="">
          --}}</div>
        
            <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Nuevo</span>
            <a href="javascript:;" class="d-block">
              <img src="{{asset('/storage/'.$post->imagepost)}}" class="img-fluid border-radius-lg" width="" height="400px">
          </a>
            <p class="card-description mb-4">
                {{$post->descriptionpost}}
            </p>
            <div class="author align-items-center">
                <img src="appweb/images/image_2.jpg" alt="..." class="avatar shadow">
                <div class="name ps-3">
                <span>Sauna Piscina Israel</span>
                <div class="stats">
                    <small>{{$post->created_at}}</small>
                </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        @endforeach
        
          
         


    </div>


       


</div>
