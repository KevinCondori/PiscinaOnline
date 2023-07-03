<!-- Modal -->
<div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sauna Piscina Israel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST">
  @csrf
                    <div class="form-group">
                        <label>Nombre del Cliente</label>
                        <div class="input-group mb-3 has-success">
                          <input type="text" class="form-control is-valid" placeholder="Name" aria-label="Name" aria-describedby="name-addon" value="{{$name}} {{$surname}}" disabled>
                        </div>    
                    </div>
                    
                    <div class="form-group row">
                    <div class="col-md-6">
                      <label>CI/NIT</label>
                      <div class="input-group mb-3 has-success">
                        <input type="text" class="form-control is-valid" placeholder="Name" aria-label="Name" aria-describedby="name-addon" wire:model="ci" disabled>
                      </div>
  
                    </div>
                      <div class="col-md-6">
                        <label for="">Aplicar Coupon 
                        @if (session()->has('coupon_state'))
                        <p>{{ session('coupon_state') }}</p>  
                        @endif
                        </label>
                        <div class="input-group mb-4">
                          <input type="text" class="form-control" placeholder="CUPON" wire:model="cupon">
                       
                          <span wire:click="cupon()"class="input-group-text"><i class="ni ni-money-coins"></i></span>
                       
                    
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-md-6">
                        <div class="form-group has-success">
                          <input type="text" class="form-control is-valid" placeholder="CI" wire:model="invoice_ci_customer">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Nombre" class="form-control is-valid" wire:model="invoice_name">
                        </div>
                      </div>
                    </div>
<div class="form-group">

@if (!empty($customer_id))
    
  {{--@if (!empty($invoice_data))--}}
  {{--@if ($invoice_data1=='visible')--}}

{{--<P>{{$invoice_data}}</P>--}}
  <table class="table">
    <thead class="table-dark">
      <th scope="col"># pedido</th>
      <th scope="col">producto</th>
     
      <th scope="col">Cantidad</th>
      <th scope="col">precio</th>
    </thead>
    <tbody>
      @foreach (App\Models\Customer::join('consumptions', 'consumptions.customer_id','=', 'customers.id')
      ->join('products','products.id','=','consumptions.product_id')
    ->select('customers.*','consumptions.*','products.product_name', 'products.product_price')
    ->where('consumptions.consumption_date',date('Y-m-d'))
    ->where('customers.id',$customer_id)
    ->get() as $invoice)
      <tr>
        <td>{{$invoice->id}}</td>
      <td>{{$invoice->product_name}}</td>
      
      <td>{{$invoice->consumption_amount}}</td>
      <td>{{$invoice->product_price}} Bs.</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <th></th>
      <th></th>
      <th>Total Consumo</th>
      <th>{{$total_price}} Bs.</th>
     <tr>
       <th></th>
       <th></th>
       <th>Precio Ingreso <br> + Casillero</th>
       <th>{{$entryprice}} Bs.</th>
     </tr>
     @if (session()->has('coupon_state') == 'ready')
     <tr>
      <th></th>
      <th></th>
      <th>Descuento</th>
    <th>
    {{$coupon_showdiscount}} Bs.
    </th>
    </tr> 
     @endif 
     <tr>
        <th></th>
        <th></th>
        <th>Total</th>
      <th>
    {{$final_price}} Bs.
      </th>
      </tr>
      
    </tfoot>
  </table>

@endif



</div>
  


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" data-bs-dismiss="modal" class="btn bg-gradient-secondary">Cancelar</button>
               {{-- <button type="button" wire:click.prevent="updateinvoice()" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>--}}
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-bs-dismiss="modal">Generar detalle</button>    
              <button type="button" wire:click.prevent="updateinvoice_name()" class="btn btn-primary" data-bs-dismiss="modal">Sin Nombre</button>  
              </div>
       </div>
    </div>
  </div>