<!-- Script for display chart indeks a -->
@push('footer_scripts')
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
  
    const chart1 = new Chart(
        document.getElementById('barChart1'),
        barChart1
    );


    const barData2 = {
        labels: labels,
        datasets: [{
          label: 'B1',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: b1,
        },
        {
          label: 'B2',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: b2,
        },
        {
          label: 'B3',
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
  
    const chart2 = new Chart(
        document.getElementById('barChart2'),
        barChart2
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
