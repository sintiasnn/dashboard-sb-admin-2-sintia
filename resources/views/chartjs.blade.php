@extends('layouts.admin')
@push('footer_scripts')

@section('main-content')
  <h1 class="h3 mb-4 text-gray-800">{{ __('Grafik') }}</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks A </h6>
    </div>
    <div class="card-body">
      <canvas id="myChart" height="100px"></canvas>
    </div>
  </div>

@endsection