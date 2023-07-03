<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sauna Piscina Israel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('appweb/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('appweb/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('appweb/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('appweb/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('appweb/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('appweb/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('appweb/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('appweb/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('appweb/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('appweb/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('appweb/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('appweb/css/style.css')}}">
    @livewireStyles
  </head>
  <body>
    @php
        $aboutmodule1=App\Models\Moduleabout::first();
        $posts=App\Models\Post::all();
    @endphp
    {{--<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>--}}
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Sauna Piscina Israel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
	        	{{--<li class="nav-item"><a href="about.html" class="nav-link">Conocenos</a></li>
	        	<li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Historias</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>--}}
	          <li class="nav-item cta"><a href="{{url('login')}}" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(https://urgente.bo/sites/default/files/Se-reanudan-las-fiestas-piscinas-y-las-canchas-municipales-en-La-Paz-1_0.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Sauna Piscina Israel</span>
              <h1 class="mb-4">Mejores Saunas</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(https://cdn.bolivia.com/sdi/2018/02/27/como-preparar-el-mejor-pique-macho-boliviano-613772.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Sauna Piscina Israel</span>
              <h1 class="mb-4">Mejores Platos</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(https://www.tododisca.com/wp-content/uploads/2021/03/Beneficios-salud-jugo-de-limon.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Sauna Piscina Israel</span>
              <h1 class="mb-4">Mejores Bebidas</h1>
            </div>

          </div>
        </div>
      </div>
    </section>
<!--
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="featured">
    					<div class="row">
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    						<div class="col-md-3">
    							<div class="featured-menus ftco-animate">
			              <div class="menu-img img" style="background-image: url(images/breakfast-4.jpg);"></div>
			              <div class="text text-center">
		                  <h3>Grilled Beef with potatoes</h3>
				              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
			              </div>
			            </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	-->

 {{-- @php
      $aboutmodule=App\Models\Module::where('modulename','Acerca de nosotros')->first();
  @endphp
@if ($aboutmodule->modulestate=='Activado')
<section class="ftco-section ftco-wrap-about">
  <div class="container">
    <div class="row">
      <div class="col-md-7 d-flex">
        <div class="img img-1 mr-md-2" style="background-image: url(appweb/images/about.jpg);"></div>
        <div class="img img-2 ml-md-2" style="background-image: url(appweb/images/about-1.jpg);"></div>
      </div>
      <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
        <div class="heading-section mb-4 my-5 my-md-0">
          <span class="subheading">Acerca de</span>
          <h2 class="mb-4">Sauna Piscina Israel</h2>
        </div>
        <p>{{$aboutmodule1->aboutdescription}}.</p>
        <pc class="time">
          <span>Lunes - Domingo <strong>9 AM - 8 PM</strong></span>
          <span><a href="https://api.whatsapp.com/send?phone=59160505288&text=Hola,%20quisiera%20contactarme%20con%20Piscina%20Israel">+591 60505288 o dale click al enlace de WhatsApp</a></span>
        </p>
      </div>
    </div>
  </div>
</section>
@endif
		


@php
$charactersmodule=App\Models\Module::where('modulename','Caracteristicas')->first();
$aboutmodule=App\Models\Moduleabout::first();
@endphp
@if ($charactersmodule->modulestate=="Activado")
<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
  <div class="container">
    <div class="row d-md-flex">
      <div class="col-md-9">
        <div class="row d-md-flex align-items-center">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="{{$aboutmodule->aboutexperience}}">0</strong>
                <span>Años de experiencia</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="{{$aboutmodule->aboutmenu}}">0</strong>
                <span>Menú(Alimentos y bebidas)</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="{{$aboutmodule->aboutplace}}">0</strong>
                <span>Lugar</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="15000">100</strong>
                <span>Clientes ya Pasaron por nuestras intalaciones</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center text-md-left">
        <p>{{$aboutmodule->aboutcharacters}}</p>
      </div>
    </div>
  </div>
</section>
@endif
		
@php
$servicemodule=App\Models\Module::where('modulename','Servicios')->first();
@endphp
@if ($servicemodule->modulestate=="Activado")
    
@endif--}}
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Servicios</span>
            <h2 class="mb-4">Recreacion</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sauna Seco y Vapor</h3>
                <p>Los ambientes más cómodos de La Paz para una relajación completa.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Piscina Atemperada</h3>
                <p>Piscina atemperada para puedas disfrutar sin importar el clima</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Menú Especial</h3>
                <p>El restaurante cuenta con diferentes opciones gastronomicas para el gusto de nuestros clientes, con las bebidas de su preferencia</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Especialidades</span>
            <h2 class="mb-4">Mira lo que ofrecemos a nuestros clientes</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(http://4.bp.blogspot.com/-NREGANbbxho/UtgjZraMptI/AAAAAAAAANc/lOIKR2VgR2U/s1600/pique+paprika+1.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Pique Macho</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">Especial</span>
		                </div>
		              </div>
		              <p>Un plato delicioso especial del lugar</p>
		              <p><a href="#" class="btn btn-primary">Ven ahora</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(https://www.filo.news/__export/1590673502240/sites/claro/img/2020/05/28/hambuuuu.jpg_1902800913.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Las Hamburguesas con papas</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">Especiales</span>
		                </div>
		              </div>
		              <p>Las Hamburguesas cuentan con carne especial y su pocion de papas que no falta.</p>
		              <p><a href="#" class="btn btn-primary">Ven ahora</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(https://cdn2.salud180.com/sites/default/files/que-es-en-realidad-el-refresco-de-cola.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Las mejores bebidas</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">Elije</span>
		                </div>
		              </div>
		              <p>Diferentes gaseosas a tu disposición</p>
		              <p><a href="#" class="btn btn-primary">No esperes más</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(https://easyrecetas.com/wp-content/uploads/2020/04/Receta-de-Jugo-Tropical.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Jugos</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">Naturales</span>
		                </div>
		              </div>
		              <p>Jugos naturales lo mejor para el calor de una sauna</p>
		              <p><a href="#" class="btn btn-primary">Ve ahora</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(https://i.pinimg.com/originals/51/4f/5c/514f5cec61d972bf060ce8cf80684167.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Nuestras bebidas Especiales</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">Especial</span>
		                </div>
		              </div>
		              <p>Lo mejor para disfrutar luego de la piscina o sauna</p>
		              <p><a href="#" class="btn btn-primary">Especial</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	
          {{--
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(appweb/images/breakfast-2.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Grilled Beef with potatoes</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$29</span>
		                </div>
		              </div>
		              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
		              <p><a href="#" class="btn btn-primary">Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>
--}}

        </div>
    	</div>
    </section>
    {{--
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Chef</span>
            <h2 class="mb-4">Our Master Chef</h2>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(appweb/images/chef-4.jpg);"></div>
							<div class="text pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">Restaurant Owner</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
							<div class="text pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(app/web/images/chef-3.jpg);"></div>
							<div class="text pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(appweb/images/chef-1.jpg);"></div>
							<div class="text pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Chef</span>
								<div class="faded">
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
--}}




		{{--Reservas componente--}}
    {{--<section class="ftco-section img" style="background-image: url(appweb/images/bg_3.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row d-flex">
    <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
        <div class="heading-section ftco-animate mb-5 text-center">
            <span class="subheading">Reservas</span>
          <h2 class="mb-4">Hacer una reserva</h2>
       
        </div>
    @livewire('reservation.makereservation-component')
  </div>
</div>
    </div>
</section>--}}
{{--
		<section class="ftco-section testimony-section img">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Jason McClean</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Stevenson</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Art Leonard</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rose Henderson</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ian Boner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		--}}
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Blog</span>
            <h2 class="mb-4">Recent Posts</h2>
          </div>
        </div>
				<div class="row">
         @foreach ($posts as $post)
         <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('storage/'.$post->imagepost)}}');">
            </a>
            <div class="text pt-3 pb-4 px-4">
              <div class="meta">
                <div><a href="#">{{$post->created_at}}</a></div>
                <div><a href="#">Sauna Piscina Israel</a></div>
              </div>
              <h3 class="heading"><a href="#">{{$post->namepost}}</a></h3>
              <p class="clearfix">
                <a href="#" class="float-left read">{{$post->descriptionpost}}</a>
                <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
              </p>
            </div>
          </div>
        </div>
         @endforeach
         



         {{-- <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('appweb/images/image_2.jpg');">
              </a>
              <div class="text pt-3 pb-4 px-4">
                <div class="meta">
                  <div><a href="#">Sept. 06, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-3 pb-4 px-4">
                <div class="meta">
                  <div><a href="#">Sept. 06, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading"><a href="#">Taste the delicious foods in Asia</a></h3>
                <p class="clearfix">
                  <a href="#" class="float-left read">Read more</a>
                  <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>--}}



        </div>
			</div>
		</section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        
        
        
      {{--  
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Feliciano</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(appweb/images/insta-1.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(appweb/images/insta-2.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(appweb/images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(appweb/images/insta-4.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(appweb/images/insta-5.jpg);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(appweb/images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
--}}

        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados hecho con <i class="icon-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">KEVIN CONDORI CONDE</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @livewireScripts
  <script src="{{asset('appweb/js/jquery.min.js')}}"></script>
  <script src="{{asset('appweb/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('appweb/js/popper.min.js')}}"></script>
  <script src="{{asset('appweb/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('appweb/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('appweb/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('appweb/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('appweb/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('appweb/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('appweb/js/aos.js')}}"></script>
  <script src="{{asset('appweb/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('appweb/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('appweb/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('appweb/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('appweb/js/google-map.js')}}"></script>
  <script src="{{asset('appweb/js/main.js')}}"></script>
    
  </body>
</html>