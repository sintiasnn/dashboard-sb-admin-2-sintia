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

    //doughnut a1
    const donutDataA1 = {
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

    const configA1 = {
        type: 'doughnut',
        data: donutDataA1,
    };

    const donutChartA1 = new Chart(
        document.getElementById('donutChartA1'),
        configA1
    );

    //donutData a2
    const donutDataA2 = {
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

    const configA2 = {
        type: 'doughnut',
        data: donutDataA2,
    };

    const donutChartA2 = new Chart(
        document.getElementById('donutChartA2'),
        configA2
    );

        //donutData a3
        const donutDataA3 = {
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

    const configA3 = {
        type: 'doughnut',
        data: donutDataA3,
    };

    const donutChartA3 = new Chart(
        document.getElementById('donutChartA3'),
        configA3
    );

    //donutData a4
    const donutDataA4 = {
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

    const configA4 = {
        type: 'doughnut',
        data: donutDataA4,
    };

    const donutChartA4 = new Chart(
        document.getElementById('donutChartA4'),
        configA4
    );

        //doughnut B1
    const donutDataB1 = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: b1,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const configB1 = {
        type: 'doughnut',
        data: donutDataB1,
    };

    const donutChartB1 = new Chart(
        document.getElementById('donutChartB1'),
        configB1
    );

    //donutData B2
    const donutDataB2 = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: b2,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const configB2 = {
        type: 'doughnut',
        data: donutDataB2,
    };

    const donutChartB2 = new Chart(
        document.getElementById('donutChartB2'),
        configB2
    );

        //donutData b3
        const donutDataB3 = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: b3,
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    };

    const configB3 = {
        type: 'doughnut',
        data: donutDataB3,
    };

    const donutChartB3 = new Chart(
        document.getElementById('donutChartB3'),
        configB3
    );
</script>
