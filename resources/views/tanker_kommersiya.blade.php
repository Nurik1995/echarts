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
        justify-content: space-between;
        border: none;
        padding-left: 0;
    }

    .chart-box {
        background: #2b3440;
        border-radius: 12px;
        |padding: 16px;
    }

    .chart-div {
        width: 100% !important;
        height: 200px;
        min-width: 300px !important;
    }
</style>


{{-- <div class="modal" id="tanker_kommersiya">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container my-4">
                    <div class="dashboard p-4">

                        <h2 class="text-center text-white mb-4">
                            Tankerlərin kommersiya göstəriciləri
                        </h2>

                        <!-- TAYM CARTER -->
                        <div class="card custom-card mb-4">
                            <div class="card-header text-center fw-bold">Taym Çarter</div>
                            <div class="card-body">
                                <div class="row g-4">

                                    <div class="col-lg-5">
                                        <h6 class="section-title">Əsas istismar indikatorları</h6>
                                        <ul class="list-group list-dark">
                                            <li class="list-group-item">📅 Cəmi təqvim günləri: <b>390 gün</b></li>
                                            <li class="list-group-item">❌ Off-hire günləri: <b>104 gün</b></li>
                                            <li class="list-group-item">⚙️ İşlənmiş günlər: <b>286 gün</b></li>
                                            <li class="list-group-item">📈 Kommersiya util.: <b>71%</b></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-7">
                                        <h6 class="section-title">Gəlirlilik göstəriciləri</h6>
                                        <canvas id="timeCharterChart"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- SPOT -->
                        <div class="card custom-card">
                            <div class="card-header text-center fw-bold">Spot</div>
                            <div class="card-body">
                                <div class="row g-4">

                                    <div class="col-lg-5">
                                        <h6 class="section-title">Əsas istismar indikatorları</h6>
                                        <ul class="list-group list-dark">
                                            <li class="list-group-item">📅 Təqvim günləri: <b>150 gün</b></li>
                                            <li class="list-group-item">🛠️ Təmir günləri: <b>40 gün</b></li>
                                            <li class="list-group-item">⏳ Boşdayanma: <b>20 gün</b></li>
                                            <li class="list-group-item">📊 Kommersiya util.: <b>50%</b></li>
                                            <li class="list-group-item">⚙️ İstismar util.: <b>57%</b></li>
                                            <li class="list-group-item">⏱️ Liman gözləmə: <b>220 saat</b></li>
                                            <li class="list-group-item">💰 Demerec: <b>$360,000</b></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-7">
                                        <h6 class="section-title">Gəlirlilik göstəriciləri</h6>
                                        <canvas id="spotChart"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div> --}}



{{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reportModal">
  Hesabatı aç
</button> --}}
<!-- MODAL -->

<div class="modal fade" id="tanker_kommersiya" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content dashboard-modal">

            <!-- MODAL HEADER -->
            <div class="modal-header border-0">
                <h5 class="modal-title text-white fw-bold">
                    Tankerlərin kommersiya göstəriciləri
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">

                <!-- TAYM CHARTER -->
                <div class="card dashboard-card mb-4" data-bs-toggle="modal" data-bs-target="#tanker_taymcarter">
                    <div class="card-header text-center fw-semibold text-white">
                        Taym Çarter
                    </div>
                    <div class="card-body">
                        <div class="row g-4">

                            <div class="col-12 col-lg-5">
                                <h6 class="section-title mb-3">Əsas istismar indikatorları</h6>
                                <ul class="list-group list-group-flush indicator-list">
                                    <li class="list-group-item">📅 Təqvim günləri <span>390</span></li>
                                    <li class="list-group-item">❌ Off-hire <span>104</span></li>
                                    <li class="list-group-item">⚙️ İşlənmiş <span>286</span></li>
                                    <li class="list-group-item">📈 Utilizasiya <span>71%</span></li>
                                </ul>
                            </div>

                            <div class="col-lg-7">
                                <h6 class="section-title mb-3">Gəlirlilik göstəriciləri</h6>
                                <div id="chart-container2" class="chart-div chart-box"></div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- SPOT -->
                <div class="card dashboard-card" data-bs-toggle="modal" data-bs-target="#tanker_spot">
                    <div class="card-header text-center fw-semibold text-white">
                        Spot
                    </div>
                    <div class="card-body">
                        <div class="row g-4">

                            <div class="col-12 col-lg-5">
                                <h6 class="section-title mb-3">Əsas istismar indikatorları</h6>
                                <ul class="list-group list-group-flush indicator-list">
                                    <li class="list-group-item">📅 Günlər <span>150</span></li>
                                    <li class="list-group-item">🛠️ Təmir <span>40</span></li>
                                    <li class="list-group-item">⏳ Boşdayanma <span>20</span></li>
                                    <li class="list-group-item">📊 Kommersiya <span>50%</span></li>
                                    <li class="list-group-item">⚙️ İstismar <span>57%</span></li>
                                    <li class="list-group-item">⏱️ Liman <span>220 saat</span></li>
                                    <li class="list-group-item">💰 Demerec <span>$360,000</span></li>
                                </ul>
                            </div>

                            <div class="col-12 col-lg-7">
                                <h6 class="section-title mb-3">Gəlirlilik göstəriciləri</h6>
                                <div class="chart-box">
                                    <canvas id="spotChart"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



<script src="https://echarts.apache.org/en/js/vendors/echarts/dist/echarts.min.js"></script>

<script>
    // import * as echarts from 'echarts/lib/echarts'
    var dom = document.getElementById('chart-container2');
    var myChart = echarts.init(dom);
    var app = {};

    var plan = 300;
    var fakt = 300;
    // var dif = plan - fakt;

    var option;
    var data = [];
    var x;

    data[0] = {
        value: plan,
        itemStyle: {
            color: 'orange'
        } // Total - mavi
    }

    data[2] = {
        value: fakt,
        itemStyle: {
            color: 'blue'
        } // Total - mavi
    }

    console.log(data);

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
            itemStyle: {
                color: "green"
            }
        }
        x = plan;
    } else if (plan == fakt) {
        data[0].itemStyle.color = "pink";
        data[2].itemStyle.color = "pink";
    }



    option = {
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
            left: '0%',
            right: '0%',
            bottom: '0%',
            top: '0%',
            containLabel: true
        },
        // grid: {
        //     left: 0,
        //     top: 0,
        //     right: 0,
        //     bottom: 0,
        //     containLabel: true
        // }
        xAxis: {
            type: 'category',
            splitLine: {
                show: false
            },
            data: ['Total', 'Rent', 'Utilities']
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
                data: [0, x, 0]
            },
            {
                name: 'Life Cost',
                type: 'bar',
                stack: 'Total',
                label: {
                    show: true,
                    position: 'inside'
                },
                // data: [960, 60, 900]
                data: data
            }
        ]
    };

    if (option && typeof option === 'object') {
        myChart.setOption(option);
    }


    var modalEl = document.getElementById('tanker_kommersiya');

    modalEl.addEventListener('shown.bs.modal', function() {
        if (!myChart) {
            myChart = echarts.init(document.getElementById('chart-container2'));
            myChart.setOption(option);
        } else {
            myChart.resize();
        }
    });
</script>
