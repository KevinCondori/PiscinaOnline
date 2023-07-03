<div>
    {{-- Be like water. --}}
    <style>
.flex-container {
  display: flex;
  /*background-color: DodgerBlue;*/
}

.flex-container > div {
  /*background-color: #f1f1f1;*/
  margin-right: 5px;
  margin-left: 5px;
  margin: 5px;
  padding: 20px;
  /*font-size: 30px;*/
}
</style>
  <div class="flex-container">
    <div>
      <h4>Reportes</h4>
    </div>
    <div>
      <a type="button" class="btn bg-gradient-success btn-tooltip" href="{{url('graphic-report')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Reporte Gráfico">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
          <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
        </svg>
      </a>
    </div>
  
  </div>


<div>
    <div class="row">
        <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              <select class="form-control" id="exampleFormControlSelect1" wire:model="reportselected">
                <option value="">Seleccione un reporte</option>
                <option value="newcustomers">Clientes Nuevos</option>
                <option value="salesreport">Ventas</option>
                <option value="consumptionreport">Consumo</option>
                <option value="eventreport">Eventos</option>       
            </select>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
            <div class="input-group mb-4">
                <label for="example-date-input" class="form-control-label">De fecha</label>
                <input class="form-control" type="date" value="2018-11-23" id="example-date-input" wire:model="datereport">
            </div>
          </div>
        </div>
        <div class="col-md-2">
            <button class="btn bg-gradient-primary my-1 me-1" wire:click="getreportdate()">Reporte por fecha</button>
          </div>  
    </div>
      
         
    
</div>
<div>
    <h5>Rango de fecha</h5>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
              <div class="input-group mb-4">
                  <label for="example-date-input" class="form-control-label">Fecha</label>
                  <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
              </div>
            </div>
          </div>
        <div class="col-md-5">
            <div class="form-group">
              <div class="input-group mb-4">
                  <label for="example-date-input" class="form-control-label">De fecha</label>
                  <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <button class="btn bg-gradient-primary my-1 me-1">Rango de fecha</button>
          </div>
          
    
    </div>
    

</div>
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
