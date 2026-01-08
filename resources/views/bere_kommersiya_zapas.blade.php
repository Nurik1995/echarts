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
                <div class="card dashboard-card mb-4" data-bs-toggle="modal" data-bs-target="#bere_kommersiya">
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
                                            <span>Cəmi off-hire günləri:</span>
                                        </div>
                                        <span class="fw-semibold">104</span>
                                    </li>

                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/calendar.png" width="20" height="20"
                                                alt="">
                                            <span>Cəmi işlənmiş günlər:</span>
                                        </div>
                                        <span class="fw-semibold">286</span>
                                    </li>

                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/commercial.png" width="20" height="20"
                                                alt="">
                                            <span>Kommersiya Utilizasiyası:</span>
                                        </div>
                                        <span class="fw-semibold">71%</span>
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
                                                Yükləşmə həcmi, ədəd<br>
                                                <small>Planlaşdırılan həcm: <b>409 vaqon</b></small>
                                            </div>
                                            <div id="vaqonChart" class="bere-chart-box"></div>
                                        </div>
                                    </div>

                                    <!-- TIR -->
                                    <div class="col-md-6">
                                        <div class="chart-card">
                                            <div class="chart-title">
                                                Yükləşmə həcmi, ədəd<br>
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

    function createPie(domId, data, colors, label) {
        let berePie = echarts.init(document.getElementById(domId));

        var optionPie = {
            tooltip: {
                trigger: 'item'
            },
            title: {
                text: 'Referer of a Website',
                subtext: 'Fake Data',
                left: 'center',
                top: 10,
                textStyle: {
                    color: '#aaa',
                    fontSize: 18
                },
                subtextStyle: {
                    color: '#777'
                }
            },
            tooltip: {
                trigger: 'item',
                formatter: '{b}: {c} ({d}%)'
            },

            legend: {
                orient: 'vertical',
                left: 10,
                bottom: 10,
                textStyle: {
                    color: '#ccc'
                }
            },
            series: [{
                type: 'pie',
                radius: ['45%', '70%'], // DONUT
                center: ['50%', '55%'],
                avoidLabelOverlap: false,
                label: {
                    show: true,
                    position: 'center',
                    formatter: '{d}%',
                    fontSize: 20,
                    fontWeight: 'bold',
                    color: '#fff'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: 22
                    }
                },
                labelLine: {
                    show: true,
                    length: 15,
                    length2: 10
                },
                data: data,
                color: colors,
                emphasis: {
                    itemStyle: {
                        shadowBlur: 15,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0,0,0,0.6)'
                    }
                }
            }]
        }

        if (optionPie && typeof optionPie === 'object') {
            berePie.setOption(optionPie);
        }

        var modalEl2 = document.getElementById('bere_kommersiya');

        modalEl2.addEventListener('shown.bs.modal', function() {
            if (!berePie) {
                berePie = echarts.init(document.getElementById('berePie'));
                berePie.setOption(option);
            } else {
                berePie.resize();
            }
        });

    }

    // Vaqon Pie
    createPie(
        'vaqonChart',
        [{
                value: 245,
                name: 'Vaqon daşınma'
            },
            {
                value: 164,
                name: 'Qalıq'
            }
        ],

        // [{
        //         value: 1048,
        //         name: 'Search Engine'
        //     },
        //     {
        //         value: 735,
        //         name: 'Direct'
        //     },
        //     {
        //         value: 580,
        //         name: 'Email'
        //     },
        //     {
        //         value: 484,
        //         name: 'Union Ads'
        //     },
        //     {
        //         value: 300,
        //         name: 'Video Ads'
        //     }
        // ],


        ['#f07c2b', '#6c757d']
    );

    // TIR Pie
    createPie(
        'tirChart',
        [{
                value: 200,
                name: 'TIR daşınma'
            },
            {
                value: 112,
                name: 'Qalıq'
            },
            // {
            //     value: 300,
            //     name: 'qazanc'
            // },

        ],
        ['#7b1fa2', '#6c757d', 'green']
    );

    // window.addEventListener('resize', () => chart.resize());
</script>
