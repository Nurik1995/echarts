 <style>
     body {
         background: #0f172a;
     }

     .modal-content {
         background: #0b1f33;
         color: #fff;
         border-radius: 18px;
     }

     .table thead th {
         background: #1f4f82;
         color: #fff;
         text-align: center;
         vertical-align: middle;
         font-size: 14px;
         white-space: nowrap;
     }

     .table tbody td {
         background: #0f253d;
         color: #fff;
         text-align: center;
         vertical-align: middle;
         white-space: nowrap;
     }

     .table tbody tr:hover td {
         background: #14345a;
     }

     .util {
         background: #7c3aed !important;
         font-weight: 600;
     }

     .plan {
         background: #92400e !important;
     }

     .fact {
         background: #6d28d9 !important;
     }

     .diff {
         background: #4c1d95 !important;
     }

     .table tfoot td {
         background: #111827;
         font-weight: bold;
         text-align: center;
     }
 </style>
 </head>

 <body class="d-flex justify-content-center  vh-100">



     <!-- MODAL -->
     <div class="modal fade" id="tanker_taymcarter" tabindex="-1">
         <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
             <div class="modal-content">

                 <div class="modal-header border-0">
                     <h5 class="modal-title fw-bold">
                         Taym-Çarterdə işləyən Tankerlərin kommersiya göstəriciləri
                     </h5>
                     <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                 </div>

                 <div class="modal-body">

                     <div class="table-responsive">
                         <table class="table table-bordered align-middle mb-0">

                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Gəmi adı</th>
                                     <th>Gəminin tipi</th>
                                     <th>Təqvim,<br>gün</th>
                                     <th>Təmir,<br>gün</th>
                                     <th>Ehtiyat,<br>gün</th>
                                     <th>Daxili<br>təminat</th>
                                     <th>İş<br>gözləmə</th>
                                     <th>Hava<br>şəraiti</th>
                                     <th>Cəmi<br>off-hire</th>
                                     <th>Cəmi işlənmiş<br>gün</th>
                                     <th class="util">Kommersiya<br>util.</th>
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

                             <tfoot>
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
