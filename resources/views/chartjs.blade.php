@extends('layouts.chart')
@extends('layouts.admin')

@section('main-content')
  <h1 class="h3 mb-4 text-gray-800">{{ __('Grafik') }}</h1>

  <!-- indeks a -->
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A </h6>
        </div>
        <div class="card-body">
          <canvas id="barChart" height="100px"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- indeks a pie chart -->
  <div class="row">
    <!-- indeks a1 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A1 </h6>
        </div>
        <div class="card-body">
          <canvas id="pieChart" height="100px"></canvas>
        </div>
      </div>
    </div>
    <!-- indeks a2 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A2 </h6>
        </div>
        <div class="card-body">
          <canvas id="pieChart2" height="100px"></canvas>
        </div>
      </div>
    </div>
    <!-- indeks a3 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A3 </h6>
        </div>
        <div class="card-body">
          <canvas id="pieChart3" height="100px"></canvas>
        </div>
      </div>
    </div>
    <!-- indeks a3 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A4 </h6>
        </div>
        <div class="card-body">
          <canvas id="pieChart4" height="100px"></canvas>
        </div>
      </div>
    </div>
  </div>


    <!-- indeks b -->
  <div class="row">
    <div class="col">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks B </h6>
        </div>
        <div class="card-body">
          <canvas id="barChart2" height="100px"></canvas>
        </div>
      </div>
    </div>
  </div>
@endsection
