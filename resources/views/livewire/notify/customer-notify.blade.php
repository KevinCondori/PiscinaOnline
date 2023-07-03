<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    
   @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <div class="container">
        <div class="card">
            <div class="card-body center">
                <h5>Enviando notificaciones al cliente</h5>
                <form action="">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Título</label>
                        <input type="text" class="form-control" placeholder="Ingrese un título" wire:model="notification_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comunicado para los clientes</label>
                        <textarea class="form-control" id="" rows="3" wire:model="notification_description"></textarea>
                    </div>
                    <div class="center sendbutton">
                       {{-- <button type="button" class="btn bg-gradient-danger"  wire:click.prevent="store()"><i class="fas fa-power-off"></i></button>
                        <button type="button" class="btn bg-gradient-success"  wire:click.prevent="demo1()"><i class="fas fa-power-off"></i></button>                        
                        <button type="button"  class="btn btn-outline-success btn-lg w-100" wire:click="store()"Enviar<img src="project_img\Whatsapp_37229.png" width="25" height="25"></button>
                        --}}
                        <button type="button" id="alert-notify" wire:click.prevent="store()" class="btn btn-outline-success btn-lg w-100 alert-notify" >Enviar<img src="project_img\Whatsapp_37229.png" width="25" height="25"></button>
                    </div>
                </form>
                <div class="center table-shadow">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if ($notifications)
                            @foreach ($notifications as $notification)
                            <tr>
                               <th scope="row">{{$notification->id}}</th>
                               <td>{{$notification->notification_name}}</td>
                               <td>{{$notification->notification_description}}</td>
                               <td>{{$notification->created_at}}</td>
                            </tr> 
                            @endforeach
                            
                            @else

                            <tr>
                                <th>{{"No hay datos para mostrar"}}</th>
                            </tr>
                            
                            @endif
                         
                         {{--<tr>
                            <th scope="row">1</th>
                            <td>Mensaje de prueba</td>
                            <td>2022</td>
                          </tr>--}} 
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        
    </div>
    <style>
        .table-shadow{
            box-shadow: -3px 2px 9px 3px rgba(41,182,222,0.34);
            -webkit-box-shadow: -3px 2px 9px 3px rgba(41,182,222,0.34);
            -moz-box-shadow: -3px 2px 9px 3px rgba(41,182,222,0.34);
            }
        .sendbutton{
            align-items: center;
        }
    </style>
   <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script>
var notifications = document.getElementById("alert-notify");
notifications.addEventListener(
    'click',
    ()=>{
       /*
       INPUT YOUR CODE ABOUT SWEET ALERT
       */
       let timerInterval
Swal.fire({
  title: 'Enviando notificaciones!',
  /*html: 'Esto demora solo unos <b></b> segundos.',
  */
  html: 'Esto demora solo un momento.',
    timer: 2000,
    timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 120)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
    Swal.fire('Enviado!', '', 'success')
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})

    }
)
     
</script>
</div>
