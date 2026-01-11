 <style>
     body {
         background: #0f172a;
     }

     .modal-content {
         background: #0b1f33;
         color: #fff;
         border-radius: 18px;
     }

     .aparatTimeCharterTable thead th {
         background: #1f4f82;
         color: #fff;
         text-align: center;
         vertical-align: middle;
         font-size: 14px;
         /* white-space: nowrap; */
         /* table-layout: fixed; */
     }

     .aparatTimeCharterTable tbody td {
         background: #0f253d;
         color: #fff;
         text-align: center;
         vertical-align: middle;
         white-space: nowrap;
     }

     .aparatTimeCharterTable tbody tr:hover td {
         background: #14345a;
     }

     .offhire {
         background: rgb(24, 90, 24) !important;
         font-weight: 600;
     }

     .worked {
         background: rgb(24, 90, 24) !important;
         font-weight: 600;
     }

     .util {
         background: #873e23 !important;
         font-weight: 600;
     }

     .plan {
         background: #351368 !important;
     }

     .fact {
         background: #351368 !important;
     }

     .diff {
         background: #351368 !important;
     }

     .aparatTimeCharterTable tfoot td {
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

     .aparatTimeCharterTable th {
         padding: 4px 4px;
         /* DAR */
         font-size: 12px;
         /* balaca */
         line-height: 1.1;
         white-space: normal;
         /* <br> işləsin */
         text-align: center;
     }

     .aparatTimeCharterTable {
         table-layout: fixed !important;
         width: 100% !important;
         min-width: unset !important;
     }

     .aparatTimeCharterTable th,
     .aparatTimeCharterTable td {
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

     .aparatTimeCharterModalHead {
         display: flex;
         align-items: center;
         justify-content: center;
         position: relative;
     }

     .aparatTimeCharterModalHead .btn-close {
         position: absolute;
         right: 1rem;
         top: 10px;
     }
 </style>
 </head>

 {{-- <body class="d-flex justify-content-center  vh-100"> --}}

 <!-- MODAL -->
 <div class="modal fade" id="aparat_taymcarter_table" tabindex="-1">
     <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header aparatTimeCharterModalHead">
                 <h5 class="modal-title"></h5>
                 <h3 class="fw-bold">
                     Taym-Çarterdə işləyən Aparat gəmilərinin kommersiya göstəriciləri
                 </h3>
                 <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                     aria-label="Bağla"></button>
             </div>

             <div class="modal-body">

                 <div class="table-responsive">
                     <table class="table table-bordered fw-bold align-middle mb-0 aparatTimeCharterTable">

                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Gəmi adı</th>
                                 <th>Gəminin tipi</th>
                                 <th>Müştəri</th>
                                 <th>Təqvim,<br>gün</th>
                                 <th>Təmir,<br>gün</th>
                                 <th>Ehtiyat,<br>gün</th>
                                 <th>Daxili<br>təminat,<br>gün</th>
                                 <th>İş<br>gözləmə,<br>gün</th>
                                 <th>Hava<br>şəraiti,<br>gün</th>
                                 <th class="offhire" style="background-color: green">Cəmi<br>off-hire,<br>gün</th>
                                 <th class="worked" style="background-color: green">Cəmi işlənmiş<br>gün</th>
                                 <th class="util">Kommersiya<br>utilizasiyası</th>
                                 <th class="plan">Plan üzrə<br>gəlir $</th>
                                 <th class="fact">Faktiki<br>gəlir $</th>
                                 <th class="diff">Fərq $</th>
                             </tr>
                         </thead>

                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>Aitolos</td>
                                 <td>Aframax tipli tanker</td>
                                 <td>Azneft İB</td>
                                 <td>7</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>7</td>
                                 <td>100%</td>
                                 <td>280,000</td>
                                 <td>280,000</td>
                                 <td>-</td>
                             </tr>

                             <tr>
                                 <td>2</td>
                                 <td>Zaqatala</td>
                                 <td>13,000 tonluq tanker</td>
                                 <td>Azneft İB</td>
                                 <td>7</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>7</td>
                                 <td>100%</td>
                                 <td>66,500</td>
                                 <td>66,500</td>
                                 <td>-</td>
                             </tr>

                             <tr>
                                 <td>9</td>
                                 <td>Çalil Məmmədquluzadə</td>
                                 <td>8,000 tonluq tanker</td>
                                 <td>Azneft İB</td>
                                 <td>7</td>
                                 <td>3</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>3</td>
                                 <td>4</td>
                                 <td>35%</td>
                                 <td>20,000</td>
                                 <td>10,000</td>
                                 <td>10,000</td>
                             </tr>
                             <!-- digər sətirlər eyni qaydada -->
                         </tbody>

                         <tfoot class="text-white">
                             <tr>
                                 <td colspan="3">Cəmi</td>
                                 <td>91</td>
                                 <td>16</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>16</td>
                                 <td>75</td>
                                 <td>71%</td>
                                 <td>960,000</td>
                                 <td>900,000</td>
                                 <td>60,000</td>
                             </tr>
                         </tfoot>

                     </table>
                 </div>

             </div>

         </div>
     </div>
 </div>
