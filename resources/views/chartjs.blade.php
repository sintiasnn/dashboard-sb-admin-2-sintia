@extends('layouts.chart')
@extends('layouts.admin')

@section('main-content')
  <h1 class="h3 mb-4 text-gray-800">{{ __('Grafik') }}</h1>

  <!-- indeks a -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks A </h6>
    </div>
    <div class="card-body">
      <canvas id="barChart" height="100px"></canvas>
    </div>
  </div>

<!-- indeks b -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks B </h6>
    </div>
    <div class="card-body">
      <canvas id="barChart2" height="100px"></canvas>
    </div>
  </div>

<div class="row">
  <div class="col-xl-8 col-lg-7" style=" height:50%; width:50% ">
    <div class="card shadow mb-4" style=" height:50%; width:50%">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Indeks A1 </h6>
      </div>
      <div class="card-body">
        <canvas id="pieChart" height="100px"></canvas>
      </div>
    </div>
  </div>

  <div class="col-xl-8 col-lg-7" style=" height:50%; width:50% ">
    <div class="card shadow mb-4" style=" height:50%; width:50% ">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Indeks A2 </h6>
      </div>
    <div class="card-body">
      <canvas id="pieChart2" height="100px"></canvas>
    </div>
  </div>

    <div class="col-xl-8 col-lg-7" style=" height:75%; width:75% ">
    <div class="card shadow mb-4" style=" height:75%; width:75%">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Indeks A3 </h6>
      </div>
      <div class="card-body">
        <canvas id="pieChart3" height="100px"></canvas>
      </div>
    </div>
  </div>
</div>
@endsection
