<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />

        <title>UnivTerbuka Bandung</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/vnd.microsoft.icon">
        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="/assets/vendor/select2/css/select2.css" />
        <link rel="stylesheet" href="/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
        <link rel="stylesheet" href="/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

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
                <section>
                    <h3 style="color:white; text-align: center ">Grafik Mahasiswa Baru Universitas Terbuka Bandung <br/>Masa Registrasi 2020.2</h3>
                    <div class="progress progress-striped light active m-md">
                        <div id="loads" class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="550" aria-valuemin="0" aria-valuemax="600" style="width: 91.67%">reload dalam 9:10</div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-quartenary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Sudah Validasi</h4>
                                                    <div class="info">
                                                        @foreach ($mabavalidasi as $item)
                                                        <strong class="amount">{{ $item->jumlahmahasiswa }}</strong>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-quartenary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Belum Validasi</h4>
                                                    <div class="info">
                                                        @foreach ($mabablmvalidasi as $item)
                                                        <a href="{{ route('grafik.exportd') }}">
                                                            <strong class="amount">{{ $item->jumlahmahasiswa }}</strong>
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-info">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-info">
                                                    <i class="fa fa-file"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Cetak SPP</h4>
                                                    <div class="info">
                                                        @foreach ($npcetakspp as $item)
                                                        <strong class="amount">{{ $item->total }}</strong>
                                                        @endforeach
                                                        <span class="text-primary">(Non Pendas)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-info">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-info">
                                                    <i class="fa fa-file"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Cetak SPP</h4>
                                                    <div class="info">
                                                        @foreach ($pcetakspp as $item)
                                                        <strong class="amount">{{ $item->total }}</strong>
                                                        @endforeach
                                                        <span class="text-primary">(Pendas)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-info">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-info">
                                                    <i class="fa fa-file"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Cetak SPP</h4>
                                                    <div class="info">
                                                        @foreach ($pscetakspp as $item)
                                                        <strong class="amount">{{ $item->total }}</strong>
                                                        @endforeach
                                                        <span class="text-primary">(Pascasarjana)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-success">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-success">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Bayar SPP</h4>
                                                    <div class="info">
                                                        @foreach ($npbayarspp as $item)
                                                        <strong class="amount">{{ $item->total }}</strong>
                                                        @endforeach
                                                        <span class="text-primary">(Non Pendas)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-success">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-success">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Bayar SPP</h4>
                                                    <div class="info">
                                                        @foreach ($pbayarspp as $item)
                                                        <strong class="amount">{{ $item->total }}</strong>
                                                        @endforeach
                                                        <span class="text-primary">(Pendas)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-success">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-success">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Mahasiswa Baru Bayar SPP</h4>
                                                    <div class="info">
                                                        @foreach ($psbayarspp as $item)
                                                        <strong class="amount">{{ $item->total }}</strong>
                                                        @endforeach
                                                        <span class="text-primary">(Pascasarjana)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Calon Maba Tervalidasi Per Kabko Rumah (NonPendas)
                                            <i class="fa fa-question-circle-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Data ini adalah data mahasiswa baru yang sudah mencetak LIP baik yang BELUM BAYAR SPP atau SUDAH BAYAR SPP"></i>
                                        </h2>
                                        <div class="panel-actions">
                                        </div>
                                    </header>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped mb-none" id="datatable">
                                            <thead>
                                            <tr>
                                                <th>Kode Kabko</th>
                                                <th>Nama Kabko</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kabko as $item)
                                                <tr>
                                                    <td>{{ $item->kode_kabko }}</td>
                                                    <td>{{ $item->nama_kabko }}</td>
                                                    <td>{{ $item->total }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>

                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Calon Maba Tervalidasi Per Kabko Rumah (Pendas)
                                            <i class="fa fa-question-circle-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Data ini adalah data mahasiswa baru yang sudah mencetak LIP baik yang BELUM BAYAR SPP atau SUDAH BAYAR SPP"></i>
                                        </h2>
                                        <div class="panel-actions">
                                        </div>
                                    </header>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped mb-none" id="datatable">
                                            <thead>
                                            <tr>
                                                <th>Kode Kabko</th>
                                                <th>Nama Kabko</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pkabko as $item)
                                                <tr>
                                                    <td>{{ $item->kode_kabko }}</td>
                                                    <td>{{ $item->nama_kabko }}</td>
                                                    <td>{{ $item->total }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>


                            <div class="col-md-12 col-lg-4 col-xl-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Calon Maba Tervalidasi Per Kabko Rumah (Pascasarjana)
                                            <i class="fa fa-question-circle-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Data ini adalah data mahasiswa baru yang sudah mencetak LIP baik yang BELUM BAYAR SPP atau SUDAH BAYAR SPP"></i>
                                        </h2>
                                        <div class="panel-actions">
                                        </div>
                                    </header>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped mb-none" id="datatable">
                                            <thead>
                                            <tr>
                                                <th>Kode Kabko</th>
                                                <th>Nama Kabko</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pskabko as $item)
                                                <tr>
                                                    <td>{{ $item->kode_kabko }}</td>
                                                    <td>{{ $item->nama_kabko }}</td>
                                                    <td>{{ $item->total }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Jumlah Sipas Maba
                                            <i class="fa fa-question-circle-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Data ini adalah data mahasiswa baru yang SUDAH CETAK LIP dan SUDAH BAYAR SPP"></i>
                                        </h2>
                                        <div class="panel-actions">
                                        </div>
                                    </header>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped mb-none" id="datatable">
                                            <thead>
                                            <tr>
                                                <th>Sipas</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>09 / Sistem Paket Semester (SIPAS) Semi  S1 - Non Pendas</td>
                                                    <td>22</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Detail Prodi Sipas Maba
                                            <i class="fa fa-question-circle-o" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Data ini adalah data mahasiswa baru yang SUDAH CETAK LIP dan SUDAH BAYAR SPP"></i>
                                        </h2>
                                        <div class="panel-actions">
                                        </div>
                                    </header>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-striped mb-none" id="datatable">
                                            <thead>
                                            <tr>
                                                <th>Prodi</th>
                                                <th>Semester</th>
                                                <th>Jumlah</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>118 / PGSD - S1</td>
                                                    <td>1</td>
                                                    <td>28</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>-->
                </section>
            </div>
        </section>
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
        <script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        
        <!-- Theme Base, Components and Settings -->
        <script src="/assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="/assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="/assets/javascripts/theme.init.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true
                } );
            } );
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                var timeleft = 600;
                var downloadTimer = setInterval(function(){
                    document.getElementById("loads").setAttribute('aria-valuenow', timeleft);
                    var wt = timeleft / 600 * 100;
                    document.getElementById("loads").setAttribute('style','width: '+wt.toFixed(2)+'%');
                    var minutes = Math.floor(timeleft / 60); // 7
                    var seconds = timeleft % 60; // 30
                    document.getElementById("loads").innerHTML = "reload dalam " + minutes + ":" + seconds;
        
                    timeleft -= 1;
                    if(timeleft <= 0)
                        clearInterval(downloadTimer);
                }, 1000);
            });
        </script>
</body>
</html>