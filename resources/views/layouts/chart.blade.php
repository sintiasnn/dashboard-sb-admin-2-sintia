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

    const b1 =  {!! json_encode($values_b1) !!};
    const b2 =  {!! json_encode($values_b2) !!};
    const b3 =  {!! json_encode($values_b3) !!};
    
    A_puas = a1[0]+a2[0]+a3[0]+a4[0];
    A_sangat_puas = a1[1]+a2[1]+a3[1]+a4[1];
    A_tidak_puas = a1[2]+a2[2]+a3[2]+a4[2];

    B_puas = b1[0]+b2[0]+b3[0];
    B_sangat_puas = b1[1]+b2[1]+b3[1];
    B_tidak_puas = b1[2]+b2[2]+b3[2];

    //pie chart a
        const pieDataA = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: [A_puas,A_sangat_puas,A_tidak_puas],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const configA = {
        type: 'pie',
        data: pieDataA,
    };

    const pieChartA = new Chart(
        document.getElementById('pieChartA'),
        configA
    );

    //pie chart b
    const pieDataB = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: [B_puas,B_sangat_puas,B_tidak_puas],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const configB = {
        type: 'pie',
        data: pieDataB,
    };

    const pieChartB = new Chart(
        document.getElementById('pieChartB'),
        configB
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

    const pieData2 = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: a2,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const config2 = {
        type: 'doughnut',
        data: pieData2,
    };

    const pieChart2 = new Chart(
        document.getElementById('pieChart2'),
        config2
    );

        const pieData3 = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: a3,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const config3 = {
        type: 'doughnut',
        data: pieData3,
    };

    const pieChart3 = new Chart(
        document.getElementById('pieChart3'),
        config3
    );

        const pieData4 = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: a4,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const config4 = {
        type: 'doughnut',
        data: pieData4,
    };

    const pieChart4 = new Chart(
        document.getElementById('pieChart4'),
        config4
    );
</script>
