@extends('layouts.chart')
@extends('layouts.admin')

@section('main-content')
  <h1 class="h3 mb-4 text-gray-800">{{ __('Grafik') }}</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks A </h6>
    </div>
    <div class="card-body">
      <canvas id="barChart" height="100px"></canvas>
    </div>
  </div>

  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4" style=" height:30%; width:30%">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Indeks A1 </h6>
      </div>
      <div class="card-body">
        <canvas id="pieChart" height="100px"></canvas>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4" style=" height:25%; width:25% ">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Indeks A2 </h6>
      </div>
    <div class="card-body">
      <canvas id="pieChart2" height="100px"></canvas>
    </div>
  </div>

@endsection
