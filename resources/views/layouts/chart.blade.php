<!-- Script for display chart indeks a -->
@yield('footer_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
    const labels = ['Puas','Sangat Puas','Kurang Puas'];
    const a1 =  {!! json_encode($values_a1) !!};
    const a2 =  {!! json_encode($values_a2) !!};
    const a3 =  {!! json_encode($values_a3) !!};
    const a4 =  {!! json_encode($values_a4) !!};
  
    const barData = {
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
  
    const barChart = {
        type: 'bar',
        data: barData,
        options: {
            y: {
                beginAtZero: true
            }
        }
    };
  
    const chart = new Chart(
        document.getElementById('barChart'),
        barChart
    );


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
</script>
