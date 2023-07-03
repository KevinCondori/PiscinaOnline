<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fullcalendar.io/js/fullcalendar-2.4.0/fullcalendar.css'>
    <style>
    body {
        padding: 3em;
      }</style>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    {{--formulario de eventos--}}
	@if (session()->has('message'))
	<div class="alert alert-success" style="margin-top:30px;">x
	  {{ session('message') }}
	</div>
@endif

<div class="card">
	<!-- Button trigger modal -->
<button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
Nueva Evento
</button>
	<div class="card-body">
		<div id='calendar'></div>
<div id='calendar'></div>
	</div>
</div>



<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="modal-body">
            
           
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nombre del evento</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título de la publicación" wire:model="eventname">
                </div>
               
               
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descripción del evento</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="eventdescription"></textarea>
                </div>
                <div class="row">
					
					<div class="form-group col-md-3">
						<label for="exampleFormControlInput1">Precio/Monto</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título de la publicación" wire:model="event_price">
					  </div>
					  <div class="form-group col-md-4">
						<label for="exampleFormControlInput1">Fecha del evento</label>
						<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Título de la publicación" wire:model="event_date">
					  </div>
					  <div class="form-group col-md-5">
						<label for="exampleFormControlInput1">tipo de evento</label>
						<select class="form-control" id="exampleFormControlSelect1" wire:model="event_type">
							<option value="">Seleccione un evento</option>
						  
							<option value="Eventos infantiles">Eventos Infantiles</option>
							<option value="Eventos Generales">Eventos Generales</option>
							</select>
					  </div>

				</div>		
						<label for="switch-1" class="btn btn-success">Publicar</label>
						<label for="switch-2" class="btn btn-info">Mantener privado</label>
						<label for="switch-3" class="btn btn-secondary">Cliente</label>
						<input id="switch-1" type="radio" name="tog">
						<div>
							<div class="row" id="publicevent">
					
								<div class="form-group col-md-6">
									<label for="exampleFormControlInput1">Titulo para el post</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título de la publicación" wire:model="namepost">
								  </div>
									 
								  <div class="form-group col-md-6">
									<label for="exampleFormControlTextarea1">Descripción para el post</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="descriptionpost"></textarea>
								  </div>
			
								</div>
						</div>
						
						<input id="switch-2" type="radio" name="tog">
						<div>
							Evento no se publicara
						</div>
						
						<input id="switch-3" type="radio" name="tog">
						<div>
							<div class="row">
								<p>Detalle de evento</p>
							<div class="form-group col-md-6">
								<label for="exampleFormControlTextarea1">CI/NIT</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="event_ci_customer"></textarea>
							  </div>
							  <div class="form-group col-md-6">
								<label for="exampleFormControlTextarea1">Nombres</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" wire:model="event_customer"></textarea>
							  </div>
							</div>
						</div>
				
				<div class="form-group">
                    <label for="exampleFormControlInput1">Subir imagen del evento</label>
                    <input type="file" name="" id="" wire:model="eventimage">
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


    <!-- partial -->
      <script src='https://fullcalendar.io/js/fullcalendar-2.4.0/lib/moment.min.js'></script>
    <script src='https://fullcalendar.io/js/fullcalendar-2.4.0/lib/jquery.min.js'></script>
    <script src='https://fullcalendar.io/js/fullcalendar-2.4.0/fullcalendar.min.js'></script>
<script>
    var data = [
	
	@foreach ($events as $event)
	{
		title: '{{$event->eventname}}',
		start: '{{$event->event_date}} 09:00:00',
		end: '{{$event->event_date}} 23:30:00'
	},
@endforeach
	
];

var newData = [

	{
		title: 'stuff',
		start: '2021-12-06'
	},
	{
		title: 'stuff2',
		start: '2021-12-05'
	}
];

$(document).ready(function() {

	$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		defaultDate: '{{$today_event}}',
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: data
	});
	
	$('#calendar').on('click', '.fc-next-button', function() {
		//alert('clicked');
		$('#calendar').fullCalendar( 'removeEvents' );
		$('#calendar').fullCalendar( 'addEventSource', newData );
	});
	$('#calendar').on('click', '.fc-prev-button', function() {
		//alert('clicked');
		$('#calendar').fullCalendar( 'removeEvents' );
		$('#calendar').fullCalendar( 'addEventSource', data );
	});

});
</script>
<script>
	var button = document.getElementById('publicar'); // Assumes element with id='button'

button.onclick = function() {
    var div = document.getElementById('publicevent');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};
</script>
<style>[id^=switch],
	[id^=switch] + *{
	  display:none;
	}
	[id^=switch]:checked + *{
	  display:block;
	}</style>
</div>
