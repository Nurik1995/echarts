{{-- <style>
    .custom-table th {
        white-space: nowrap;
        font-size: 13px;
    }

    .custom-table td {
        font-size: 13px;
        padding: 6px;
    }

    .table-dark {
        background-color: #0b1e33;
    }
</style> --}}


<style>
    body {
        background: #0f172a;
    }

    .modal-content {
        background: #0b1f33;
        color: #fff;
        border-radius: 18px;
    }

    .bere_kommersiya_table thead th {
        background: #1f4f82;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        font-size: 14px;
        /* white-space: nowrap; */
        /* table-layout: fixed; */
    }

    .bere_kommersiya_table tbody td {
        background: #0f253d;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }

    .bere_kommersiya_table tbody tr:hover td {
        background: #14345a;
    }

    .bere_kommersiya_table tfoot td {
        background: #111827;
        font-weight: bold;
        text-align: center;
        color: white;
    }

    /* .text-white td {
        color: white;
    } */

    /* . {
        table-layout: fixed;
        width: 100%;
    } */

    .bere_kommersiya_table th {
        padding: 4px 4px;
        /* DAR */
        font-size: 12px;
        /* balaca */
        line-height: 1.1;
        white-space: normal;
        /* <br> işləsin */
        text-align: center;
    }

    .bere_kommersiya_table {
        table-layout: fixed !important;
        width: 100% !important;
        min-width: unset !important;
    }

    .bere_kommersiya_table th,
    .bere_kommersiya_table td {
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

    .bereModalHead {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .bereModalHead .btn-close {
        position: absolute;
        right: 1rem;
        top: 10px;
    }
</style>


<!-- MODAL -->
<div class="modal fade" id="bere_kommersiya_table" tabindex="-1">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bereModalHead">
                <h5 class="modal-title"></h5>
                <h3 class="fw-bold">
                    Bərə gəmilərinin kommersiya göstəriciləri
                </h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Bağla"></button>
            </div>

            <div class="modal-body">

                <div class="table-responsive">
                    <table
                        class="table table-bordered table-dark table-sm bere_kommersiya_table align-middle text-center custom-table ">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Gəmi adı</th>
                                <th rowspan="2">Gəminin tipi</th>

                                <th colspan="3" class="bg-primary">Səfər sayları</th>
                                <th colspan="6" class="bg-warning text-dark">Yükdaşıma göstəriciləri</th>
                                <th colspan="3" class="bg-info">Gəlirlilik göstəriciləri</th>
                            </tr>
                            <tr>
                                <th>Plan</th>
                                <th>Fakt</th>
                                <th>Fərq</th>

                                <th class="bg-secondary">Planlaşdırılan vaqon sayı, əd.</th>
                                <th class="bg-secondary">Faktiki daşınan vaqon sayı, əd.</th>
                                <th class="bg-secondary">Fərq, əd.</th>

                                <th class="bg-success">Planlaşdırılan Tır sayı, əd.</th>
                                <th class="bg-success">Faktiki daşınan Tır sayı, əd.</th>
                                <th class="bg-success">Fərq, əd.</th>

                                <th>Planlaşdırılan gəlir, $</th>
                                <th>Faktiki gəlir, $</th>
                                <th>Fərq, $</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Azərbaycan</td>
                                <td>Ro-Pax/Bərə</td>
                                <td>2</td>
                                <td>1</td>
                                <td class="text-danger">1</td>
                                <td>40</td>
                                <td>20</td>
                                <td class="text-danger">-20</td>
                                <td>80</td>
                                <td>60</td>
                                <td class="text-danger">-20</td>
                                <td>150,000</td>
                                <td>100,000</td>
                                <td class="text-danger">-50,000</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Zərifə Əliyeva</td>
                                <td>Ro-Pax/Bərə</td>
                                <td>2</td>
                                <td>1</td>
                                <td class="text-danger">1</td>
                                <td>40</td>
                                <td>20</td>
                                <td class="text-danger">-20</td>
                                <td>80</td>
                                <td>60</td>
                                <td class="text-danger">-20</td>
                                <td>150,000</td>
                                <td>100,000</td>
                                <td class="text-danger">-50,000</td>
                            </tr>

                            <!-- digər sətrlər eyni strukturla -->
                        </tbody>

                        <tfoot>
                            <tr class="fw-bold bg-secondary">
                                <td colspan="3">Cəmi</td>
                                <td>12</td>
                                <td>8</td>
                                <td>4</td>
                                <td>409</td>
                                <td>245</td>
                                <td>-164</td>
                                <td>312</td>
                                <td>200</td>
                                <td>-112</td>
                                <td>1,000,000</td>
                                <td>800,000</td>
                                <td>-200,000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
