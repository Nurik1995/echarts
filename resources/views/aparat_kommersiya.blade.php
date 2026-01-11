<style>
    body {
        /* background: #1f2a36; */
        font-family: Arial, sans-serif;
    }

    .dashboard {
        /* background: #2b3440; */
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

    /* .xdndKommersiyaTable {
        color: #fff;
        font-size: 14px;
        border-collapse: collapse;
    }

    .xdndKommersiyaTable th {
        background-color: #2b7da5;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        border: 1px solid #444;
        white-space: nowrap;
    }

    .xdndKommersiyaTable tbody tr {
        background-color: #7a7a7a !important;
    }

    .xdndKommersiyaTable td {
        border: 1px solid #444 !important;
        vertical-align: middle;
    }

    .xdndKommersiyaTable td:first-child {
        font-weight: 600;
    } */

    /* .text-negative {
        color: #ff4d4d;
        font-weight: 600;
    }

    .text-neutral {
        color: #e0e0e0;
    } */

    table.aparatKommersiyaTable1 thead th {
        background-color: #2b7da5 !important;
        color: #fff !important;
        border: 1px solid #444;
        text-align: center;
    }

    /* TR – MƏCBURİ BOZ */
    table.aparatKommersiyaTable1 tbody tr {
        background-color: #7a7a7a !important;
    }

    /* TD */
    table.aparatKommersiyaTable1 tbody td {
        background-color: transparent !important;
        color: #fff;
        border: 1px solid #444;
        vertical-align: middle;
    }

    table.aparatKommersiyaTable1 td:first-child {
        font-weight: 600;
    }

    .text-negative {
        color: #ff4d4d !important;
        font-weight: 600;
    }

    .text-neutral {
        color: #e0e0e0;
    }

    table.aparatKommersiyaTable2 thead th {
        background-color: #2b7da5 !important;
        color: #fff !important;
        border: 1px solid #444;
        text-align: center;
    }

    /* TR – MƏCBURİ BOZ */
    table.aparatKommersiyaTable2 tbody tr {
        background-color: #7a7a7a !important;
    }

    /* TD */
    table.aparatKommersiyaTable2 tbody td {
        background-color: transparent !important;
        color: #fff;
        border: 1px solid #444;
        vertical-align: middle;
    }

    table.aparatKommersiyaTable2 td:first-child {
        font-weight: 600;
    }

    .aparatKommersiyaTable2 th {
        padding: 4px 4px;
        /* DAR */
        font-size: 12px;
        /* balaca */
        line-height: 1.1;
        white-space: normal;
        /* <br> işləsin */
        text-align: center;
    }

    .aparatKommersiyaTable2 {
        table-layout: fixed !important;
        width: 100% !important;
        min-width: unset !important;
    }

    .aparatKommersiyaTable2 th,
    .aparatKommersiyaTable2 td {
        padding: 4px 3px !important;
        font-size: 12px;
        line-height: 1.1;
        white-space: normal !important;
        word-break: break-word;
        overflow-wrap: break-word;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .aparatKommersiyaTable1 th,
    .aparatKommersiyaTable1 td {
        padding: 4px 3px !important;
        font-size: 12px;
        line-height: 1.1;
        white-space: normal !important;
        word-break: break-word;
        overflow-wrap: break-word;
    }

    /* Bere Pie */

    /* .chart-card {
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
    } */
</style>

<div class="modal fade" id="aparat_kommersiya" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content dashboard-modal">

            <!-- MODAL HEADER -->
            <div class="modal-header border-0">
                <h5 class="modal-title text-white fw-bold">
                    Aparat gəmilərinin kommersiya göstəriciləri
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">

                <!-- TAYM CHARTER -->
                <div class="card dashboard-card mb-4" data-bs-toggle="modal" data-bs-target="#aparat_taymcarter_table">
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
                                        <span class="fw-semibold">320</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/offhire.png" width="20" height="20" alt="">
                                            <span>Cəmi off-hire günləri:</span>
                                        </div>
                                        <span class="fw-semibold">120</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/calendar.png" width="20" height="20"
                                                alt="">
                                            <span>Cəmi işlənmiş günlər:</span>
                                        </div>
                                        <span class="fw-semibold">288</span>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/commercial.png" width="20" height="20"
                                                alt="">
                                            <span>Kommersiya Utilizasiyası:</span>
                                        </div>
                                        <span class="fw-semibold">90%</span>
                                    </li>
                                </ul>

                                <br><br><br><br>

                                <table class="table aparatKommersiyaTable1 table-sm text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th>Müştərinin adı</th>
                                            <th>Offhire gün sayı</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-start" style="background-color: #7a7a7a;">Azneft IB</td>
                                            <td>210,000</td>

                                        </tr>
                                        <tr>
                                            <td class="text-start">UBOC</td>
                                            <td>110,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Bahar Energy</td>
                                            <td>70,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">BP Azerbaijan</td>
                                            <td>60,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Saipem</td>
                                            <td>100,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">BOS Shelf</td>
                                            <td>50,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Caspian Marine Services</td>
                                            <td>100,000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Digər</td>
                                            <td>260,000</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>



                            <div class="col-lg-7 col-12 chart-col">
                                <h6 class="section-title mb-3"><img src="/images/commercial.png" width="20"
                                        height="20" alt=""> Gəlirlilik göstəriciləri</h6>
                                <div id="aparatTimeCharter" class="chart-div chart-box"></div>

                                {{-- <h6 class="section-title mb-3">Yükdaşıma həcmi, ədəd</h6> --}}
                                {{-- <div class="row g-4"> --}}

                                <!-- Vaqon -->
                                <br>
                                <table
                                    class="table table-responsive aparatKommersiyaTable2 table-sm text-center align-middle">
                                    <thead>
                                        <tr>
                                            <th>Müştərinin adı</th>
                                            <th>Plan gəlir</th>
                                            <th>Faktiki gəlir</th>
                                            <th>Fərq</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-start" style="background-color: #7a7a7a;">Azneft IB</td>
                                            <td>210,000</td>
                                            <td>200,000</td>
                                            <td class="text-negative">-5%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">UBOC</td>
                                            <td>110,000</td>
                                            <td>100,000</td>
                                            <td class="text-negative">-9%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Bahar Energy</td>
                                            <td>70,000</td>
                                            <td>50,000</td>
                                            <td class="text-negative">-29%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">BP Azerbaijan</td>
                                            <td>60,000</td>
                                            <td>50,000</td>
                                            <td class="text-negative">-17%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Saipem</td>
                                            <td>100,000</td>
                                            <td>100,000</td>
                                            <td class="text-neutral">–</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">BOS Shelf</td>
                                            <td>50,000</td>
                                            <td>50,000</td>
                                            <td class="text-neutral">–</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Caspian Marine Services</td>
                                            <td>100,000</td>
                                            <td>100,000</td>
                                            <td class="text-neutral">–</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Digər</td>
                                            <td>260,000</td>
                                            <td>250,000</td>
                                            <td class="text-negative">-4%</td>
                                        </tr>
                                    </tbody>
                                </table>

                                {{-- </div> --}}
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
    // aparat TIMECHARTER
    var dom = document.getElementById('aparatTimeCharter');
    var aparatTimeCharter = echarts.init(dom);
    var app = {};

    var plan = 900000;
    var fakt = 840000;

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
        aparatTimeCharter.setOption(option);
    }

    var modalEl = document.getElementById('aparat_kommersiya');

    modalEl.addEventListener('shown.bs.modal', function() {
        if (!aparatTimeCharter) {
            aparatTimeCharter = echarts.init(document.getElementById('aparatTimeCharter'));
            aparatTimeCharter.setOption(option);
        } else {
            aparatTimeCharter.resize();
        }
    });

    // Bere Pie
</script>
