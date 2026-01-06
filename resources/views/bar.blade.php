<style>
    * {
        margin: 0;
        padding: 0;
    }

    /* #chart-container {
        position: absolute;
        height: 100vh;
        overflow: hidden;
    } */
</style>

<script>
    // import * as echarts from 'echarts/lib/echarts'
    var dom = document.getElementById('chart-container2');
    var myChart = echarts.init(dom, null, {
        renderer: 'canvas',
        useDirtyRect: true,
        width: 1250,
        height: 1250
    });
    var app = {};


    var option;

    option = {
        title: {
            text: 'Waterfall Chart',
            subtext: 'Living Expenses in Shenzhen'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            formatter: function(params) {
                var tar = params[1];
                return tar.name + '<br/>' + tar.seriesName + ' : ' + tar.value;
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: {
            type: 'category',
            splitLine: {
                show: false
            },
            data: ['Total', 'Rent', 'Utilities', 'Transportation', 'Meals', 'Other']
        },
        yAxis: {
            type: 'value'
        },
        series: [{
            name: 'Placeholder',
            type: 'bar',
            stack: 'Total',
            itemStyle: {
                borderColor: 'transparent',
                color: 'transparent'
            },
            emphasis: {
                itemStyle: {
                    borderColor: 'transparent',
                    color: 'transparent'
                }
            },
            data: [0, 1700, 1400, 1200, 300, 0]
        }, | {
            name: 'Life Cost',
            type: 'bar',
            stack: 'Total',
            label: {
                show: true,
                position: 'inside'
            },
            data: [2900, 1200, 300, 200, 900, 300]
        }]
    };

    if (option && typeof option === 'object') {
        myChart.setOption(option);
    }

    myChart.resize({
        width: 700,
        height: 400
    });
</script>
