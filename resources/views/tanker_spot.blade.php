<style>
    :root {
        --head-blue: #1f4f82;
        --row-dark: #0f253d;
        --row-hover: #14345a;
        --modal-bg: #0b1f33;
        --card-bg: #0f172a;
    }

    body {
        background: var(--card-bg);
        color: #fff;
        font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        padding: 32px;
    }

    /* Modal / table styling */
    .modal-content {
        background: var(--modal-bg);
        color: #fff;
        border-radius: 12px;
    }

    .modal-header {
        border-bottom: 0;
        background: transparent;
    }

    .table thead th {
        background: var(--head-blue);
        color: #fff;
        text-align: center;
        vertical-align: middle;
        font-size: 13px;
        white-space: nowrap;
        padding: 10px;
        border-right: 1px solid rgba(255, 255, 255, 0.03);
    }

    .table tbody td {
        background: var(--row-dark);
        color: #fff;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        padding: 10px;
        border-right: 1px solid rgba(255, 255, 255, 0.03);
        font-size: 13px;
    }

    .table tbody tr:hover td {
        background: var(--row-hover);
    }

    /* special header colors (matching image) */
    .util {
        /* background: #196837 !important; */
        background: #873e23 !important;
        font-weight: 600;
    }

    /* green-ish */
    .comm {
        background: #a33b00 !important;
    }

    /* orange-ish */
    .usage {
        background: #873e23 !important;
    }

    /* purple-ish */
    .plan {
        background: #351368 !important;
    }

    /* dark orange */
    .fact {
        background: #351368 !important;
    }

    /* deep purple */
    .diff {
        background: #351368 !important;
    }

    .offhire {
        background: rgb(24, 90, 24) !important;
        font-weight: 600;
    }

    .worked {
        background: rgb(24, 90, 24) !important;
        font-weight: 600;
    }

    /* diff purple */

    .table tfoot td {
        background: #0b1624;
        font-weight: 700;
        text-align: center;
        padding: 10px;
        border-right: 1px solid rgba(255, 255, 255, 0.03);
    }

    /* small screens: reduce padding and font-size */
    @media (max-width: 768px) {

        .table thead th,
        .table tbody td,
        .table tfoot td {
            padding: 8px;
            font-size: 12px;
        }
    }

    .btn-open {
        min-width: 220px;
    }

    /* keep header title centered inside modal header area */
    .modal-title {
        font-weight: 700;
        font-size: 1.06rem;
    }

    /* new  */

    .tankerSpotTable th {
        padding: 4px 4px;
        /* DAR */
        font-size: 12px;
        /* balaca */
        line-height: 1.1;
        white-space: normal;
        /* <br> işləsin */
        text-align: center;
    }

    .tankerSpotTable {
        table-layout: fixed !important;
        width: 100% !important;
        min-width: unset !important;
    }

    .tankerSpotTable th,
    .tankerSpotTable td {
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

    .table {
        min-width: 0 !important;
    }

    .tankerSpotModalHead {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .tankerSpotModalHead .btn-close {
        position: absolute;
        right: 1rem;
        top: 10px;
    }

    .tankerSpotTable tfoot td {
        background: #111827;
        font-weight: bold;
        text-align: center !important;
        color: white;
    }
</style>

{{-- <div class="d-flex justify-content-center">
    <button class="btn btn-primary btn-lg btn-open" data-bs-toggle="modal" data-bs-target="#tanker_spot">
        Spot cədvəlini aç
    </button>
</div> --}}

<!-- Modal -->
<div class="modal fade" id="tanker_spot" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header tankerSpotModalHead">
                <h5 class="modal-title"></h5>
                <h3 class="fw-bold">
                    Spotda işləyən Tankerlərin kommersiya göstəriciləri
                </h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Bağla"></button>
            </div>

            <div class="modal-body pt-0">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle mb-0 tankerSpotTable fw-bold">
                        <thead>
                            <tr>
                                <th style="min-width:48px">No</th>
                                <th style="min-width:180px">Gəmi adı</th>
                                <th style="min-width:170px">Gəminin tipi</th>
                                <th>Təqvim,<br>gün</th>
                                <th>Təmir,<br>gün</th>
                                <th>Ehtiyat,<br>gün</th>
                                <th>Daxili<br>təminat, gün</th>
                                <th>İş<br>gözləmə, gün</th>
                                <th>Hava<br>şəraiti, gün</th>
                                <th class="offhire">Texniki<br>işlənməmış, gün</th>
                                <th class="worked">Cəmi işlənmiş,<br>gün</th>
                                <th class="util">Kommersiya<br>utilizasiyası</th>
                                <th class="usage">İstismar<br>utilizasiyası</th>
                                <th class="plan">Bazar TC<br>qiyməti, $</th>
                                <th class="fact">TC ekvivalenti, $</th>
                                <th class="diff">Fərq, $</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- 1 -->
                            <tr>
                                <td>1</td>
                                <td class="text-start">Prezident H.Əliyev</td>
                                <td class="text-start">13,000 tonluq tanker</td>
                                <td>7</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                <td>6</td>
                                <td>61%</td>
                                <td>65%</td>
                                <td>35,000</td>
                                <td>40,000</td>
                                <td>5,000</td>
                            </tr>

                            <!-- 2 -->
                            <tr>
                                <td>2</td>
                                <td class="text-start">Culfa</td>
                                <td class="text-start">13,000 tonluq tanker</td>
                                <td>7</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                <td>6</td>
                                <td>61%</td>
                                <td>62%</td>
                                <td>28,700</td>
                                <td>35,000</td>
                                <td>6,300</td>
                            </tr>

                            <!-- 3 -->
                            <tr>
                                <td>3</td>
                                <td class="text-start">Cabbar Həşimov</td>
                                <td class="text-start">12,000 tonluq tanker</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>6</td>
                                <td>42%</td>
                                <td>60%</td>
                                <td>28,700</td>
                                <td>35,000</td>
                                <td>6,300</td>
                            </tr>

                            <!-- 4 -->
                            <tr>
                                <td>4</td>
                                <td class="text-start">Laçın</td>
                                <td class="text-start">8,000 tonluq tanker</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>7</td>
                                <td>42%</td>
                                <td>50%</td>
                                <td>28,800</td>
                                <td>32,500</td>
                                <td>3,700</td>
                            </tr>

                            <!-- 5 -->
                            <tr>
                                <td>5</td>
                                <td class="text-start">Kəlbəcər</td>
                                <td class="text-start">8,000 tonluq tanker</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>7</td>
                                <td>42%</td>
                                <td>50%</td>
                                <td>28,800</td>
                                <td>32,500</td>
                                <td>3,700</td>
                            </tr>

                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-start">Cəmi</td>
                                <td>35</td> <!-- Təqvim -->
                                <td>2</td> <!-- Təmir -->
                                <td>0</td> <!-- Ehtiyat -->
                                <td>0</td> <!-- Daxili təminat -->
                                <td>1</td> <!-- İş gözləmə -->
                                <td>0</td> <!-- Hava -->
                                <td>3</td> <!-- Texniki işlənməmış -->
                                <td>32</td> <!-- Cəmi işlənmiş -->
                                <td>50%</td> <!-- Kommersiya util -->
                                <td>57%</td> <!-- İstismar util -->
                                <td>30,000</td> <!-- Bazar TC ort -->
                                <td>35,000</td> <!-- TC ekv ort -->
                                <td>5,000</td> <!-- Fərq -->
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
