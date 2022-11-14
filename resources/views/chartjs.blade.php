@extends('layouts.chart')
@extends('layouts.admin')

@section('main-content')
  <h1 class="h3 mb-4 text-gray-800">{{ __('Grafik') }}</h1>

  <!-- indeks a -->
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-4 align-self-center">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Indeks A </h6>
          </div>
          <div class="card-body">
            <canvas id="pieChartA" height="100px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- indeks a donut chart -->
  <div class="row">
    <!-- indeks a1 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A1 </h6>
        </div>
        <div class="card-body">
          <canvas id="donutChartA1" height="100px"></canvas>
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
          <canvas id="donutChartA2" height="100px"></canvas>
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
          <canvas id="donutChartA3" height="100px"></canvas>
        </div>
      </div>
    </div>
    <!-- indeks a4 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks A4 </h6>
        </div>
        <div class="card-body">
          <canvas id="donutChartA4" height="100px"></canvas>
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
          <canvas id="pieChartB" height="100px"></canvas>
        </div>
      </div>
    </div>
  </div>

    <!-- indeks b donut chart -->
  <div class="row">
    <!-- indeks b1 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks B1 </h6>
        </div>
        <div class="card-body">
          <canvas id="donutChartB1" height="100px"></canvas>
        </div>
      </div>
    </div>
    <!-- indeks B2 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks B2 </h6>
        </div>
        <div class="card-body">
          <canvas id="donutChartB2" height="100px"></canvas>
        </div>
      </div>
    </div>
    <!-- indeks B3 -->
    <div class="col-xl-4 col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Indeks B3 </h6>
        </div>
        <div class="card-body">
          <canvas id="donutChartB3" height="100px"></canvas>
        </div>
      </div>
    </div>
  </div>

@endsection
