$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Marginal Cost vs Profit'
        },
        xAxis: {
            categories: ['Cost function', 'Marginal Profit', 'Profit']
        },
        yAxis: {
            title: {
                text: 'Rounds'
            }
        },
        series: [{
            name: 'Jane',
            data: [1, 0, 4]
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
});