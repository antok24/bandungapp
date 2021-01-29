<!doctype html>
<html class="fixed js flexbox flexboxlegacy no-touch csstransforms csstransforms3d no-overflowscrolling no-mobile-device custom-scroll">

    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

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

        <!-- Theme CSS -->
        <link rel="stylesheet" href="/assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="/assets/stylesheets/theme-depan.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

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

                    <!-- start: page -->
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                        
                                <h2 class="panel-title">Cari Sertifikat Seminar Yang Pernah Anda Ikuti</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <form action="{{ url('/sertifikat-kegiatan/cari')}}" method="GET"  role="cari">
                                                    {{csrf_field()}}
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Masukan NIM :*')}}</label>
                                                            <div class="col-md-4">
                                                                <input type="text" name="cari" class="form-control{{ $errors->has('cari') ? ' is-invalid' : '' }}" value="{{ old('cari') }}" maxlength="9" required="" autofocus="">
                                                                @if ($errors->has('cari'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('cari') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-sm-9 col-sm-offset-3">
                                                                    &nbsp; &nbsp;<button type="submit" class="mb-xs mt-xs mr-xs btn btn-lg btn-primary">Cari data</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                    </div>
                                </div>
                                </table>
                            </div>
                        </section>
                        @if(isset($result))
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                        
                                <h2 class="panel-title">Data Sertifikat Seminar</h2>
                            </header>
                            <div class="panel-body">
                                <table id="example" class="display nowrap" style="width:100%">
                                <thead style="background-color:#33CCFF; color:#696969;">
                                  <tr>
                                    <th><center>NIM</center></th>
                                    <th><center>Nama Mahasiswa</center></th>
                                    <th><center>Nama Sertifikat</center></th>
                                    <th><center>Nomor Sertifikat</center></th>
                                    <th><center>Sebagai</center></th>
                                    <th><center>TGL Pelaksanaan</center></th>
                                    <th><center>TGL Sertifikat</center></th>
                                    <th><center>Opsi</center></th>
                                  </tr>
                                </thead>
                                    <tbody>
                                        @foreach ($result as $a)
                                        <tr>
                                            <td>{{$a->nim}}</td>
                                            <td>{{$a->nama}}</td>
                                            <td>{{$a->nama_kegiatan}}</td>
                                            <td>{{$a->no_sertifikat}}</td>
                                            <td>{{$a->sebagai}}</td>
                                            <td>{{$a->tgl_pelaksanaan}}</td>
                                            <td>{{$a->tgl_sertifikat}}</td>
                                            <td class="center">
                                                    <a class="btn btn-sm btn-warning" target="_blank" href="/sertifikat-kegiatan/print/{{encrypt($a->id)}}"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Sertifikat"></i> Cetak Sertifikat</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        @elseif(isset($message))
                            <p>{{ $message }}</p>
                        @endif
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
    </body>
</html>

