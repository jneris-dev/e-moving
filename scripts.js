// Tabela Semanal
var dataChartLucros = Array.prototype.map.call(document.querySelectorAll('#table01 tr'), function (tr) {
    return Array.prototype.map.call(tr.querySelectorAll('td.lucro'), function (td) {
        return td.innerHTML;
    });
}).slice(1).map(i => Number(i));

var dataChartSemanas = Array.prototype.map.call(document.querySelectorAll('#table01 tr'), function (tr) {
    return Array.prototype.map.call(tr.querySelectorAll('td.semana'), function (td) {
        return td.innerHTML;
    });
}).slice(1);

var optionsWeek = {
    chart: {
        type: 'line'
    },
    series: [{
        name: 'Lucro semanal',
        data: dataChartLucros

    }],
    colors: ["#43488e"],
    xaxis: {
        categories: dataChartSemanas
    }
}

var chartLine = new ApexCharts(document.querySelector("#chart-week"), optionsWeek);

chartLine.render();

// Tabela Mensal
var dataChartLucroTotal = Array.prototype.map.call(document.querySelectorAll('#table02 tr'), function (tr) {
    return Array.prototype.map.call(tr.querySelectorAll('td.lucro-total'), function (td) {
        return td.innerHTML;
    });
}).slice(1).map(i => Number(i));

var dataChartMes = Array.prototype.map.call(document.querySelectorAll('#table02 tr'), function (tr) {
    return Array.prototype.map.call(tr.querySelectorAll('td.mes'), function (td) {
        return td.innerHTML;
    });
}).slice(1);

var optionsMonth = {
    series: [{
        name: 'Lucro semanal',
        data: dataChartLucroTotal
    }],
    chart: {
        type: 'bar',
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
        categories: dataChartMes
    },
    fill: {
        opacity: 1,
        colors: ['#43488e']
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    }
}

var chartBar = new ApexCharts(document.querySelector("#chartMonth"), optionsMonth);

chartBar.render();