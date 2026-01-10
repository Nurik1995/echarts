<style>
    body {
        background: #1f2a36;
        font-family: Arial, sans-serif;
    }

    .dashboard {
        background: #2b3440;
        border-radius: 20px;
    }

    .custom-card {
        background: #353f4d;
        border-radius: 15px;
        color: #fff;
        border: none;
    }

    .card-header {
        background: #1f2a36;
        color: #fff;
        border-radius: 15px 15px 0 0;
    }

    .section-title {
        color: #9ddcff;
        margin-bottom: 10px;
    }

    .list-dark .list-group-item {
        background: transparent;
        color: #fff;
        border: none;
        padding-left: 0;
    }

    /* Qrafik imitasiya */
    .bar-wrapper {
        display: inline-block;
        width: 120px;
        text-align: center;
        margin-right: 30px;
        vertical-align: bottom;
    }

    .bar {
        width: 100%;
        border-radius: 8px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        color: #fff;
        padding-bottom: 8px;
        font-weight: bold;
    }

    .bar.orange {
        background: #f07c3a;
    }

    .bar.green {
        background: #17b45b;
    }

    .bar.blue {
        background: #2b6cb0;
    }

    .bar-label {
        display: block;
        margin-top: 8px;
        font-size: 14px;
    }

    .difference {
        display: inline-block;
        padding: 6px 14px;
        border-radius: 6px;
        font-weight: bold;
        margin-left: 20px;
    }

    .difference.negative {
        background: #b30000;
    }

    .difference.positive {
        background: #1e9d4c;
    }

    /* modal style */

    .bg-dark-blue {
        background: #1f2a36;
    }

    .dashboard-modal {
        background: #2b3440;
        border-radius: 20px;
    }

    .dashboard-card {
        background: #353f4d;
        border-radius: 18px;
        border: none;
    }

    .card-header {
        background: #1f2a36;
        border-radius: 18px 18px 0 0;
    }

    .section-title {
        color: #9ddcff;
        font-weight: 600;
    }

    .indicator-list .list-group-item {
        background: transparent;
        color: #fff;
        display: flex;
        /* justify-content: space-between; */
        border: none;
        padding-left: 0;
    }

    .chart-box {
        background: #2b3440;
        border-radius: 12px;
        |padding: 16px;
        /* height: 500px; */
    }

    .chart-div {
        width: 100% !important;
        height: 200px;
        min-width: 300px !important;
    }

    .modal-body span {
        font-weight: bold;
    }

    @media (min-width: 992px) {
        .divider-col {
            border-color: rgba(255, 255, 255, 0.2) !important;
        }
    }

    @media (max-width: 991px) {
        .divider-col {
            border-start: none !important;
            padding-left: 0 !important;
        }
    }

    .divider-col {
        border-left-style: dashed;
        /* optional */
    }

    @media (min-width: 992px) {
        .chart-col {
            border-left: 2px solid rgb(255, 255, 255);
            padding-left: 1.25rem;
        }
    }

    @media (max-width: 991px) {
        .chart-col {
            border-left: none;
            padding-left: 0;
        }
    }

    /* Bere Pie */

    .chart-card {
        background: #2f3b4a;
        border-radius: 12px;
        padding: 20px;
    }

    .chart-title {
        text-align: center;
        font-weight: 600;
        margin-bottom: 10px;
        color: white;
        font-size: 15px !important;
    }

    .bere-chart-box {
        height: 260px;
    }
</style>

<div class="modal fade" id="bere_kommersiya" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content dashboard-modal">

            <!-- MODAL HEADER -->
            <div class="modal-header border-0">
                <h5 class="modal-title text-white fw-bold">
                    Bərələrin kommersiya göstəriciləri
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">

                <!-- TAYM CHARTER -->
                <div class="card dashboard-card mb-4" data-bs-toggle="modal" data-bs-target="#bere_kommersiya_table">
                    <div class="card-header text-center fw-semibold text-white">
                        Taym Çarter
                    </div>
                    <div class="card-body">
                        <div class="row g-4">

                            <div class="col-12 col-lg-5">
                                <h6 class="section-title mb-3">Əsas istismar indikatorları</h6>
                                <ul class="list-group list-group-flush indicator-list">
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/calendar.png" width="20" height="20"
                                                alt="">
                                            <span>Cəmi təqvim günləri:</span>
                                        </div>
                                        <span class="fw-semibold">390</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/offhire.png" width="20" height="20" alt="">
                                            <span>Cəmi təmir günləri:</span>
                                        </div>
                                        <span class="fw-semibold">120</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/calendar.png" width="20" height="20"
                                                alt="">
                                            <span>Cəmi boşdayanma günləri:</span>
                                        </div>
                                        <span class="fw-semibold">36</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/ship.png" width="20" height="20" alt="">
                                            <span>Plan üzrə səfər sayı:</span>
                                        </div>
                                        <span class="fw-semibold">12</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/ship.png" width="20" height="20" alt="">
                                            <span>Faktiki səfər sayı:</span>
                                        </div>
                                        <span class="fw-semibold">8</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/commercial.png" width="20" height="20"
                                                alt="">
                                            <span>Kommersiya Utilizasiyası:</span>
                                        </div>
                                        <span class="fw-semibold">62%</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/time.png" width="20" height="20" alt="">
                                            <span>Limanda gözləmə vaxtı</span>
                                        </div>
                                        <span class="fw-semibold">396%</span>
                                    </li>
                                </ul>


                            </div>

                            <div class="col-lg-7 col-12 chart-col">
                                <h6 class="section-title mb-3"><img src="/images/commercial.png" width="20"
                                        height="20" alt=""> Gəlirlilik göstəriciləri</h6>
                                <div id="bereTimeCharter" class="chart-div chart-box"></div>

                                <h6 class="section-title mb-3">Yükdaşıma həcmi, ədəd</h6>
                                {{-- bere pie --}}

                                {{-- <div id="berePie" class="chart-div bere-chart-box"></div> --}}

                                {{-- <div class="container py-4"> --}}
                                <div class="row g-4">

                                    <!-- Vaqon -->
                                    <div class="col-md-6">
                                        <div class="chart-card">
                                            <div class="chart-title">
                                                <small>Planlaşdırılan həcm: <b>409 vaqon</b></small>
                                            </div>
                                            <div id="vaqonChart" class="bere-chart-box"></div>
                                        </div>
                                    </div>

                                    <!-- TIR -->
                                    <div class="col-md-6">
                                        <div class="chart-card">
                                            <div class="chart-title">
                                                <small>Planlaşdırılan həcm: <b>312 TIR</b></small>
                                            </div>
                                            <div id="tirChart" class="bere-chart-box"></div>
                                        </div>
                                    </div>

                                </div>
                                {{-- </div> --}}


                                {{-- bere pie son --}}



                            </div>

                        </div>
                    </div>
                </div>

                <!-- SPOT -->

            </div>

        </div>
    </div>
</div>

{{-- <script src="https://echarts.apache.org/en/js/vendors/echarts/dist/echarts.min.js"></script> --}}

<script>
    // Bere TIMECHARTER
    var dom = document.getElementById('bereTimeCharter');
    var bereTimeCharter = echarts.init(dom);
    var app = {};

    var plan = 500;
    var fakt = 400;

    var option;
    var data = [];
    var x;

    data[0] = {
        value: plan,
        itemStyle: {
            color: 'orange'
        }
    }

    data[2] = {
        value: fakt,
        itemStyle: {
            color: 'blue'
        }
    }

    if (plan - fakt > 0) {
        data[1] = {
            value: plan - fakt,
            itemStyle: {
                color: "red"
            }
        }
        x = fakt;
    } else if (plan - fakt < 0) {
        data[1] = {
            value: fakt - plan,
            // value: plan - fakt,
            itemStyle: {
                color: "green"
            }
        }
        x = plan;
    } else if (plan == fakt) {
        data[0].itemStyle.color = "pink";
        data[2].itemStyle.color = "pink";
    }

    console.log(data);

    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            formatter: function(params) {
                return params[1].name;
            }
        },
        grid: {
            top: 20,
            left: 5,
            right: 0,
            bottom: 0,
            containLabel: true
        },
        xAxis: {
            type: 'category',
            splitLine: {
                show: false
            },
            data: ['Plan', '', 'Fakt'],
            axisLabel: {
                color: 'white'
            }
        },
        yAxis: {
            type: 'value',
            axisLabel: {
                color: 'white'
            }
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
                data: [0, x, 0]
            },
            {
                name: 'Life Cost',
                type: 'bar',
                stack: 'Total',
                label: {
                    show: true,
                    position: 'inside',
                    formatter: function(params) {
                        return '$' + params.value.toLocaleString();
                    }
                },
                data: data
            }
        ]
    };

    if (option && typeof option === 'object') {
        bereTimeCharter.setOption(option);
    }

    var modalEl = document.getElementById('bere_kommersiya');

    modalEl.addEventListener('shown.bs.modal', function() {
        if (!bereTimeCharter) {
            bereTimeCharter = echarts.init(document.getElementById('bereTimeCharter'));
            bereTimeCharter.setOption(option);
        } else {
            bereTimeCharter.resize();
        }
    });

    // Bere Pie

    function createSimplePie(domId, used, total, mainColor, labelText) {

        const usedPercent = Math.round((used / total) * 100);
        const remainPercent = 100 - usedPercent;

        const chart = echarts.init(document.getElementById(domId));

        const option = {
            backgroundColor: 'transparent',
            graphic: [{
                type: 'group',
                left: 'center',
                top: '95%', // chartın altı
                children: [{
                        type: 'rect',
                        shape: {
                            width: 14,
                            height: 14
                        },
                        style: {
                            fill: mainColor
                        }
                    },
                    {
                        type: 'text',
                        left: 20, // kvadratın sağından başlasın
                        top: 0,
                        style: {
                            text: labelText,
                            fill: '#fff',
                            font: '14px sans-serif'
                        }
                    }
                ]
            }],
            legend: {
                orient: 'vertical',
                left: 'left',
                textStyle: {
                    color: '#000',
                    fontSize: 12
                },
                data: [{
                        name: 'Faktiki',
                        icon: 'circle'
                    },
                    {
                        name: 'Qalan',
                        icon: 'circle'
                    }
                ]
            },
            series: [{
                type: 'pie',
                radius: '90%',
                center: ['50%', '50%'],

                labelLine: {
                    show: false
                },

                label: {
                    show: true,
                    position: 'inside',
                    color: '#fff',
                    fontSize: 14,
                    fontWeight: 'bold',
                    formatter: function(params) {
                        if (params.name === 'used') {
                            return `${used},\n${usedPercent}%`;
                        } else {
                            return `${remainPercent}%`;
                        }
                    }
                },

                data: [{
                        value: used,
                        name: 'used',
                        itemStyle: {
                            color: mainColor
                        }
                    },
                    {
                        value: total - used,
                        name: 'remain',
                        itemStyle: {
                            color: 'grey'
                        }
                    }
                ]
            }]
        };

        chart.setOption(option);

        document
            .getElementById('bere_kommersiya')
            .addEventListener('shown.bs.modal', () => chart.resize());
    }

    // Vaqon Pie
    createSimplePie(
        'vaqonChart',
        245, // fakt
        409, // plan
        '#f07c2b',
        'Vaqon daşıma'
    );

    // Tir Pie
    createSimplePie(
        'tirChart',
        200,
        312,
        '#8e1b8e',
        'Tır daşıma'
    );

    // window.addEventListener('resize', () => chart.resize());
</script>
