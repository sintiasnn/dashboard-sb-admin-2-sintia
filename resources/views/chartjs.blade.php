@extends('layouts.chart')

@section('main-content')
  <h1 class="h3 mb-4 text-gray-800">{{ __('Grafik') }}</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks A </h6>
    </div>
    <div class="card-body">
      <canvas id="barChart1" height="100px"></canvas>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks A1 </h6>
    </div>
    <div class="card-body">
      <canvas id="pieChart" height="50px" weight="0"></canvas>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Indeks B </h6>
    </div>
    <div class="card-body">
      <canvas id="barChart2" height="100px"></canvas>
    </div>
  </div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
    const labels = ['Puas','Sangat Puas','Kurang Puas'];
    const a1 =  {!! json_encode($values_a1) !!};
    const a2 =  {!! json_encode($values_a2) !!};
    const a3 =  {!! json_encode($values_a3) !!};
    const a4 =  {!! json_encode($values_a4) !!};

    const b1 =  {!! json_encode($values_b1) !!};
    const b2 =  {!! json_encode($values_b2) !!};
    const b3 =  {!! json_encode($values_b3) !!};

//<!-- Script for display bar chart indeks a -->
    const barData1 = {
        labels: labels,
        datasets: [{
          label: 'A1',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: a1,
        },
        {
          label: 'A2',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: a2,
        },
        {
          label: 'A3',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: a3,
        },
        {
          label: 'A4',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: a4,
        }]
    };
  
    const barChart1 = {
        type: 'bar',
        data: barData1,
        options: {
            y: {
                beginAtZero: true
            }
        }
    };
  
    const chart = new Chart(
        document.getElementById('barChart1'),
        barChart1
    );

    //<!-- Script for display pie chart indeks a -->
    const pieData = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: a1,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: pieData,
    };

    const pieChart = new Chart(
        document.getElementById('pieChart'),
        config
    );

    //<!-- Script for display bar chart indeks b -->
    const barData2 = {
        labels: labels,
        datasets: [{
          label: 'B1',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: b1,
        },
        {
          label: 'b2',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: b2,
        },
        {
          label: 'b3',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: b3,
        }]
    };
  
    const barChart2 = {
        type: 'bar',
        data: barData2,
        options: {
            y: {
                beginAtZero: true
            }
        }
    };
  
    const chart = new Chart(
        document.getElementById('barChart2'),
        barChart2
    );
</script>

@endpush