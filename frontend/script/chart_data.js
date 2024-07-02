document.addEventListener('DOMContentLoaded', function () {
    // Bar Chart
    var barOptions = {
        series: [{
            name: 'Total Tasks',
            data: [60, 42, 8, 10, 20]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Total Tasks', 'In progress', 'Completed', 'Not started', 'Over due'],
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val
                }
            }
        }
    };

    var barChart = new ApexCharts(document.querySelector("#bar-chart"), barOptions);
    barChart.render();

    // Pie Chart
    var pieOptions = {
        series: [44, 55, 13],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['Engaged', 'Not engaged', 'On Vacation'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var pieChart = new ApexCharts(document.querySelector("#pie-chart"), pieOptions);
    pieChart.render();
});
