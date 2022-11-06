@extends('layouts.admin')
@stack('footer_scripts')

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

@push('footer_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
      const labels = ['Puas','Sangat Puas','Kurang Puas'];
      const a1 =  {!! json_encode($values_a1) !!};
      const a2 =  {!! json_encode($values_a2) !!};
      const a4 =  {!! json_encode($values_a4) !!};
  
      const data = {
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
          label: 'A4',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: a4,
        }]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {
            y: {
                beginAtZero: true
            }
        }
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
</script>
@endpush