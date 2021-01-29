<!doctype html>
<html class="fixed js flexbox flexboxlegacy no-touch csstransforms csstransforms3d no-overflowscrolling no-mobile-device custom-scroll">

    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>UnivTerbuka Bandung</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Universitas Terbuka Bandung">
        <meta name="author" content="UTBDG">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="/assets/stylesheets/theme-depan.css">
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="/assets/vendor/select2/css/select2.css" />
        <link rel="stylesheet" href="/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="/assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
         <link rel="stylesheet" href="/assets/stylesheets/theme-depan.css">

        <!-- Head Libs -->
        <script src="/assets/vendor/modernizr/modernizr.js"></script>
    </head>
    <body>
        <section class="body">
            <header class="header">
                <div class="logo-container">
                    <a href="{{url('/')}}" class="logo">
                        <img src="/assets/images/logo.png" height="38" width="180" alt="Porto Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            </header>
            <div class="inner-wrapper">
                <div class="container">

                    <div class="col-md-12">

                    @if (session('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('error') }}
                        </div>
                    @endif

                    @if (session('info'))
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('info') }}
                        </div>
                    @endif

                    @if (session('any'))
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('any') }}
                        </div>
                    @endif

                        <section class="panel">
                            <div class="alert alert-info">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
                                </div>
                                    <p><center><h2><b>Data Realtime Stok Bahan Ajar/Modul SIPAS UT Bandung</b></h2>
                                        <h3><b>Silahkan Lihat Stok ketersediaan Bahan Ajar<br/>
                                    Gunakan Kata Kunci NAMA PROGRAM STUDI serta Semester pada colom *search*</b></h3></center></p>
                            </div>
                            <div class="panel-body">
                                <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="background-color:#33CCFF; color:#696969;"><center>No</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>UPBJJ</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>Kode Paket</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>Nama Paket</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>Jenis Paket</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>Edisi</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>Status</center></th>
                                            <th style="background-color:#33CCFF; color:#696969;"><center>Jumlah Tersedia</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($result as $a)
                                        <tr role="row" class="odd">
                                            <td><center>{{$no++}}</center></td>
                                            <td><center>{{$a->nama_agen}}</center></td>
                                            <td>{{$a->kode_paket}}</td>
                                            <td>{{$a->nama_paket}}</td>
                                            <td>{{$a->nama_jenis_paket}}</td>
                                            <td><center>{{$a->edisi}}</center></td>
                                            <td><center>{{$a->status_bac}}</center></td>
                                            <td><center>{{$a->saldo_akhir_upbjj}}</center></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                </section>
            </div>
        </div>
    </div>
        <table width="1000" align="center">
            <tbody>
                <tr>
                  <td rowspan="4">
                  <img src="/assets/images/footer.png" style="width:1730px;height:160px;">
                  </td>
                </tr>
            </tbody>
        </table>
        <!-- Vendor -->
        <script src="/assets/vendor/jquery/jquery.js"></script>
        <script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="/assets/vendor/select2/js/select2.js"></script>
        <script src="/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
        <script src="/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="/assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="/assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="/assets/javascripts/theme.init.js"></script>

        <!-- Examples -->
        <script src="/assets/javascripts/tables/examples.datatables.default.js"></script>
        <script src="/assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
        <script src="/assets/javascripts/tables/examples.datatables.tabletools.js"></script>
    </body>
</html>

