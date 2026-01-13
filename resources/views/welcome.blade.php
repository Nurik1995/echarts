<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }

        .datepicker {
            z-index: 9999 !important;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="https://echarts.apache.org/en/js/vendors/echarts/dist/echarts.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" --}}
    {{-- rel="stylesheet"> --}}


    @include('tanker_taymcarter')
    @include('tanker_spot')
    @include('tanker_kommersiya')
    @include('quruyuk_taymcarter')
    @include('quruyuk_spot')
    @include('quruyuk_kommersiya')
    @include('bere_kommersiya')
    @include('bere_kommersiya_table')
    @include('xdnd_kommersiya')
    @include('xdnd_taymcarter_table')
    @include('aparat_kommersiya')
    @include('aparat_taymcarter_table')
    {{-- @include('bar') --}}




    <style>
        body {
            background-color: #eee
        }

        .card {
            border: none;
            border-radius: 10px;
            font-size: 11px;
        }

        .c-details span {
            font-weight: 300;
            font-size: 13px
        }

        .icon {
            width: 50px;
            height: 50px;
            background-color: #eee;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 39px
        }

        .badge span {
            background-color: #fffbec;
            width: 60px;
            height: 25px;
            padding-bottom: 3px;
            border-radius: 5px;
            display: flex;
            color: #fed85d;
            justify-content: center;
            align-items: center
        }

        .progress {
            height: 10px;
            border-radius: 10px
        }

        /* .progress div {
            background-color: red
        } */

        .text1 {
            font-size: 14px;
            font-weight: 600
        }

        .text2 {
            color: #a5aec0
        }

        /* .ci {
            font-size: 13px;
        } */

        .hr-bw {
            border: 0;
            height: 2px;
            background: white;
            opacity: 1;
            margin-top: -10px;
        }

        .shipTable tr td {
            background-color: #36454F;
            color: white;
        }

        .shipTable td:first-child {
            text-align: left !important;
            padding-left: 0.75rem;
            /* istəsən 0 da edə bilərsən */
        }

        .shipTable td:first-child {
            text-align: left;
            padding-left: 0.75rem;
        }

        .shipTable td {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            line-height: 0.1;
        }
    </style>
</head>

{{-- <script>
    $(document).ready(function() {

        $.fn.datepicker.dates['az'] = {
            months: ["Yanvar", "Fevral", "Mart", "Aprel", "May", "İyun", "İyul", "Avqust", "Sentyabr",
                "Oktyabr", "Noyabr", "Dekabr"
            ],
            monthsShort: ["Yan", "Fev", "Mar", "Apr", "May", "İyn", "İyl", "Avq", "Sen", "Okt", "Noy",
                "Dek"
            ],
            today: "Bu gün",
            clear: "Təmizlə",
            format: "mm/yyyy"
        };

        $('#monthPicker').datepicker({
            language: 'az',
            format: 'mm/yyyy',
            startView: 1, // 🔥 AY GÖRÜNÜR
            minViewMode: 1, // 🔥 GÜN YOX
            autoclose: true,
            orientation: 'bottom'
        });

    });


</script> --}}

<script>
    $(document).ready(function() {

        $('#start').on('change', function() {
            let selectedMonth = $(this).val(); // format: YYYY-MM

            console.log('Seçilən ay:', selectedMonth);

            // Məsələn: AJAX, chart refresh, table filter
            // loadData(selectedMonth);
        });

    });
</script>


<body class="antialiased">



    <div class="container mt-3 mb-3">


        {{-- <div style="max-width:130px">
            <input type="text" id="monthPicker" class="form-control form-control-sm text-center"
                placeholder="11/2025" readonly>
        </div> --}}

        {{-- <label for="start" style="color: black !important">Ay:</label>
        <input type="month" id="start" name="start" min="2018-03" value="2018-05" /> --}}

        <div class="d-flex justify-content-end align-items-center gap-2">
            <label for="start" class="mb-0" style="color:black">Ay:</label>
            <input type="month" id="start" name="start" class="form-control form-control-sm"
                style="max-width:160px" min="2018-03" value="2018-05">
        </div>


        {{-- <div class="container shadow min-vh-100 py-2"> --}}
        {{-- <h5>Bootstrap 5 date picker</h5>
        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-lg-3 col-sm-3">
                <label for="startDate">Start</label>
                <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span>
            </div>
            <div class="col-lg-3 col-sm-3">
                <label for="endDate">End</label>
                <input id="endDate" class="form-control" type="date" />
                <span id="endDateSelected"></span>
            </div>
        </div> --}}
        {{-- </div> --}}

        <div class="row">
            <div class="col-md-3 tanker " data-bs-toggle="modal" data-bs-target="#tanker_kommersiya">
                <div class="card p-3 mb-2 pt-1" style="background-color: #36454F;">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="/images/ship.png" style="width: 25px;height: 25px;" alt="Cinque Terre"> <span
                                class="text-light"> Tanker </span>

                        </div>
                    </div>

                    <div class="text-center"
                        style="background-color: black;width: auto;height: 25px;color: white;font-weight: bold; ">
                        <span style="font-size: 11px;">Taym Çarter</span>
                    </div>
                    {{-- @foreach ($val as $v)
                        {{ $v['ttc_calendar_day'] }}
                    @endforeach --}}

                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:71%">
                                                {{ $tankerTime[0]['tanker_time_commercial_utility_sum'] }}%</div>
                                        </div>

                                        {{-- <div class="progress custom-progress">
                                            <div class="progress-bar" role="progressbar" style="width:71%;"
                                                aria-valuenow="71" aria-valuemin="0" aria-valuemax="100">
                                                71%
                                            </div>
                                        </div> --}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Faktiki Gəlir</td>
                                <td style="text-align: center;">${{ $tankerTime[0]['tanker_time_income_fact_sum'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Plan ilə fərq</td>
                                @if ($tankerTime[0]['tanker_time_income_difference'] < 0)
                                    <td style="text-align: center;color: red;font-weight: bold;">
                                        ${{ $tankerTime[0]['tanker_time_income_difference'] }}</td>
                                @else
                                    <td style="text-align: center;color: green;font-weight: bold;">
                                        ${{ $tankerTime[0]['tanker_time_income_difference'] }}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>

                    <hr class="hr-bw">


                    <div class="text-center"
                        style="background-color: black;width: auto;height: 25px;color: white;font-weight: bold; marg ">
                        <span style="font-size: 11px;">Spot</span>
                    </div>


                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:50%">
                                                {{ $tankerSpot[0]['tanker_spot_commercial_utility_sum'] }}%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>İstismar Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:57%">
                                                {{ $tankerSpot[0]['tanker_spot_operation_utility_sum'] }}%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>TC ekvivalenti</td>
                                <td style="text-align: center;">${{ $tankerSpot[0]['tanker_spot_equality_price_sum'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Bazar TC tarifi ilə fərq</td>
                                @if ($tankerSpot[0]['tanker_spot_equality_difference'] < 0)
                                    <td style="text-align: center;color: red);font-weight: bold;">
                                        ${{ $tankerSpot[0]['tanker_spot_equality_difference'] }}</td>
                                @else
                                    <td style="text-align: center;color: rgb(68, 172, 68);font-weight: bold;">
                                        ${{ $tankerSpot[0]['tanker_spot_equality_difference'] }}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="col-md-3" data-bs-toggle="modal" data-bs-target="#quruyuk_kommersiya">
                <div class="card p-3 mb-2 pt-1" style="background-color: #36454F;">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="/images/ship.png" style="width: 25px;height: 25px;" alt="Cinque Terre"> <span
                                class="text-light">Quru yük</span>

                        </div>
                    </div>

                    <div class="text-center"
                        style="background-color: black;width: auto;height: 25px;color: white;font-weight: bold; ">
                        <span style="font-size: 11px;">Taym Çarter</span>
                    </div>


                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:71%">
                                                {{ $dryCargoTime[0]['dry_cargo_time_commercial_utility_sum'] }}%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Faktiki Gəlir</td>
                                <td style="text-align: center;">
                                    ${{ $dryCargoTime[0]['dry_cargo_time_income_fact_sum'] }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Plan ilə fərq</td>
                                @if ($dryCargoTime[0]['dry_cargo_time_income_difference'] < 0)
                                    <td style="text-align: center;color: red;font-weight: bold;">
                                        ${{ $dryCargoTime[0]['dry_cargo_time_income_difference'] }}</td>
                                @else
                                    <td style="text-align: center;color: green;font-weight: bold;">
                                        ${{ $dryCargoTime[0]['dry_cargo_time_income_difference'] }}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>

                    <hr class="hr-bw">


                    <div class="text-center"
                        style="background-color: black;width: auto;height: 25px;color: white;font-weight: bold; marg ">
                        <span style="font-size: 11px;">Spot</span>
                    </div>


                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:50%">50%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>İstismar Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:57%">57%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>TC ekvivalenti</td>
                                <td style="text-align: center;">$35,000</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Bazar TC tarifi ilə fərq</td>
                                <td style="text-align: center;color: rgb(68, 172, 68);font-weight: bold;">+$5,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- bere --}}

            <div class="col-md-3" data-bs-toggle="modal" data-bs-target="#bere_kommersiya">
                <div class="card p-3 mb-2 pt-1" style="background-color: #36454F;">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="/images/ship.png" style="width: 25px;height: 25px;" alt="Cinque Terre"> <span
                                class="text-light">Bərə</span>

                        </div>
                    </div>

                    <div class="text-center"
                        style="background-color: black;width: auto;height: 25px;color: white;font-weight: bold; ">
                        <span style="font-size: 11px;">Yükgötürmə qabiliyyətindən istifadə səviyyəsi</span>
                    </div>


                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:50%">
                                                {{ $tankerSpot[0]['tanker_spot_commercial_utility_sum'] }}%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/vaqon.png" style="width: 17px;height: 17px;"
                                        alt="Cinque Terre"> Daşınan vaqon sayı: 245 ədəd</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:67%">67%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/truck.png" style="width: 17px;height: 15px;"
                                        alt="Cinque Terre">
                                    Daşınan TIR sayı: 200 ədəd</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:56%">56%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <hr class="hr-bw">

                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Faktiki Gəlir</td>
                                <td style="text-align: center;">$800,000</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Plan ilə fərq</td>
                                <td style="text-align: center;color: red;font-weight: bold;">-$200,000</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr class="hr-bw">

                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td><img src="/images/ship.png" style="width: 17px;height: 15px;" alt="Cinque Terre">
                                    Faktiki səfər sayı</td>
                                <td style="text-align: center;">8 səfər</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Plan ilə fərq</td>
                                <td style="text-align: center;color: red;font-weight: bold;">-4 səfər</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            {{-- bere-son --}}

            {{-- XDND --}}
            <div class="col-md-3 card-body" style="display: grid">
                <div class="card p-3 mb-2" style="background-color: #36454F;" data-bs-toggle="modal"
                    data-bs-target="#xdnd_kommersiya">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="/images/ship.png" style="width: 25px;height: 25px;" alt="Cinque Terre"> <span
                                class="text-light"> XDND</span>

                        </div>
                    </div>

                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:90%">
                                                {{ $xdndTime[0]['xdnd_time_commercial_utility_sum'] }}%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Faktiki Gəlir</td>
                                <td style="text-align: center;">${{ $xdndTime[0]['xdnd_time_income_fact_sum'] }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Plan ilə fərq</td>
                                @if ($xdndTime[0]['xdnd_time_income_difference'] < 0)
                                    <td style="text-align: center;color: red;font-weight: bold;">
                                        ${{ $xdndTime[0]['xdnd_time_income_difference'] }}</td>
                                @else
                                    <td style="text-align: center;color: green;font-weight: bold;">
                                        ${{ $xdndTime[0]['xdnd_time_income_difference'] }}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>

                </div>
                {{-- XDND son --}}

                {{-- Aparat --}}
                <div class="card p-3 mb-2 float-bottom" style="background-color: #36454F;" data-bs-toggle="modal"
                    data-bs-target="#aparat_kommersiya">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="/images/ship.png" style="width: 25px;height: 25px;" alt="Cinque Terre"> <span
                                class="text-light"> Aparat</span>

                        </div>
                    </div>

                    <table class="table table-borderless shipTable" style="line-height: 0.5">
                        <tbody>
                            <tr>
                                <td>Kommersiya Utilizasiyası</td>
                                <td style="text-align: center;">
                                    <div class="container ">
                                        <div class="progress" style="border-radius: 2px">
                                            <div class="progress-bar" style="width:90%">
                                                {{ $ascoTime[0]['asco_time_commercial_utility_sum'] }}%</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Faktiki Gəlir</td>
                                <td style="text-align: center;">${{ $ascoTime[0]['asco_time_income_fact_sum'] }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Plan ilə fərq</td>
                                @if ($ascoTime[0]['asco_time_income_difference'] < 0)
                                    <td style="text-align: center;color: red;font-weight: bold;">
                                        ${{ $ascoTime[0]['asco_time_income_difference'] }}</td>
                                @else
                                    <td style="text-align: center;color: green;font-weight: bold;">
                                        ${{ $ascoTime[0]['asco_time_income_difference'] }}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- Aparat son --}}
            </div>



        </div>
    </div>




    {{-- <script>
        let startDate = document.getElementById('startDate')
        let endDate = document.getElementById('endDate')

        startDate.addEventListener('change', (e) => {
            let startDateVal = e.target.value
            document.getElementById('startDateSelected').innerText = startDateVal
        })

        endDate.addEventListener('change', (e) => {
            let endDateVal = e.target.value
            document.getElementById('endDateSelected').innerText = endDateVal
        })
    </script> --}}

    {{-- <script src="https://echarts.apache.org/en/js/vendors/echarts/dist/echarts.min.js"></script> --}}
</body>

</html>
