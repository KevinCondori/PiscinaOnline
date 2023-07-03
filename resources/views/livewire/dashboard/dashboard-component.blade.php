<div >
    {{-- Stop trying to control. --}}
    <h2>Bienvenid@ al Dashboard</h2>

    <div class="container-fluid py-4">

  {{--    <iframe src="{{asset('order1.pdf')}}" style="width:100%; height:700px;" frameborder="0" ></iframe>
  <a href="{{asset('order1.pdf')}}">download</a>
--}}
{{--
  PAGE ABOUT DASHBOARD
  --}}
  
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Ventas del dia</p>
                        <h5 class="font-weight-bolder mb-0">
                          {{$data_sales_today}} Bs.
                          <span class="text-success text-sm font-weight-bolder">+15%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total usuarios</p>
                        <h5 class="font-weight-bolder mb-0">
                          {{$datausers}}
                          <span class="text-success text-sm font-weight-bolder">+3%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Nuevos Clientes</p>
                        <h5 class="font-weight-bolder mb-0">
                          {{$datacustomerstoday}}
                          <span class="text-info text-sm font-weight-bolder">+2%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Ventas Total</p>
                        <h5 class="font-weight-bolder mb-0">
                          {{$total_sales}} Bs.
                          <span class="text-success text-sm font-weight-bolder">+5%</span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>        
          </div>

<div class="row mt-4">



    <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                  <p class="mb-1 pt-2 text-bold">Bienvenido</p>
                  <h5 class="font-weight-bolder">Sauna Piscina Israel</h5>
                  <p class="mb-5">Verifique su pagina web para mantener la informacion actulizada para sus clientes.</p>
                  <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                    Ver Mas
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary border-radius-lg h-100">
                  <img src="{{asset('/assets/img/shapes/waves-white.svg')}}" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100">
                    <img class="w-100 position-relative z-index-2 pt-4" src="{{asset('/assets/img/illustrations/rocket-white.png')}}" alt="rocket">
                  </div>
                </div>
              </div>              
            </div>
          </div>
        </div>


        <div class="col-lg-12 mb-lg-0 mb-4 mt-4">
          <div class="card">
            <div class="card-body p-3">
              <center><h5>Productos Top 2</h5></center>
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Producto</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nivel</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                       
                        </tr>
                      </thead>
                      <tbody>         
                          <tr>
                              <td>
                              <div class="d-flex px-2 py-1">
                                 
                                  <div class="d-flex flex-column justify-content-center">
                                  <p class="text-xs text-secondary mb-0">Coca Cola personal</p>
                                  </div>
                              </div>
                              </td>
          
                              <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm bg-gradient-success">Medio</span>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">Bebidas</p>
                                    </td>
           
                          </tr>
                          <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                               
                                <div class="d-flex flex-column justify-content-center">
                                <p class="text-xs text-secondary mb-0">Pique macho</p>
                                </div>
                            </div>
                            </td>
                           
                           
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-info">Bajo</span>
                                </td>
                                <td>
                                  <p class="text-xs font-weight-bold mb-0">Comidas</p>
                                  </td>
                                        
                        </tr>
              
                    
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>
          
                </div>




      </div>


      <div class="col-lg-6">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>CONSUMO</h6>
            <p class="text-sm">
              <i class="fa fa-arrow-up text-success"></i>
              <span class="font-weight-bold">Consumo</span> en 2022
            </p>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="chart-line" class="chart-canvas" height="340"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>Costo y Utilidad</h6>
            <p class="text-sm">
              <i class="fa fa-arrow-up text-success"></i>
              <span class="font-weight-bold">Utilidad</span> en 2022
            </p>
          </div>
          <div class="card-body p-3">
            <div class="card">
              <canvas id="mixed-chart" width="800" height="450"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="card z-index-2">
          <div class="card-header pb-0">
            <h6>Cupones</h6>
            <p class="text-sm">
              <i class="fa fa-arrow-up text-success"></i>
              <span class="font-weight-bold">Este mes</span> en 2022
            </p>
          </div>
          <div class="card-body p-3">
            <div class="card">
              <canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
            </div>
          </div>
        </div>
      </div>
    



</div>


    </div>
    <script src="{{asset('/assets/js/plugins/chartjs.min.js')}}"></script>
    
    <script>
      var ctx2 = document.getElementById("chart-line").getContext("2d");
    
      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
    
      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors
    
      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
    
      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
    
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Comidas",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [{{$datachart1}}, 50, 80, 75, 84, 70, 90, 100, 200],
              maxBarThickness: 6
    
            },
            {
              label: "Bebidas",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [100, 50, 70, 87, 20, 50, 70, 80, 150],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    </script>
    <script>
    new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ["Junio", "Julio", "Agosto", "Septiembre"],
      datasets: [{
          label: "Costo",
          type: "line",
          borderColor: "#8e5ea2",
          data: [100,80,89,110],
          fill: false
        }, {
          label: "Utilidad",
          type: "line",
          borderColor: "#3e95cd",
          data: [110,90,97,120],
          fill: false
        }, {
          label: "Costo",
          type: "bar",
          backgroundColor: "rgba(133, 255, 124, 0.8)",
          data: [100,80,89,110],
        }, {
          label: "Costo",
          type: "bar",
          backgroundColor: "rgba(123, 237, 255, 0.8)",
          backgroundColorHover: "#3e95cd",
          data: [110,90,97,120],
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions): Europe & Africa'
      },
      legend: { display: false }
    }
});
new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: '2022'
      }
    }
});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
     new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["Promocion marzo", " Promo de bienvenida"],
      datasets: [
        {
          label: "Mejores cupones",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [5,3,1]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: '2022'
      }
    }
});
    </script>
    
    
</div>




