@extends('layout')
@section('content')
    
<div class="container">
      @livewire('dashboard.dashboard-component')
</div>



@endsection


@push('custom-scripts')



<script src="{{asset('/assets/js/plugins/chartjs.min.js')}}"></script>


@endpush
