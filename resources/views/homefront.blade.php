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
                <div class="row" style="margin-right: 0px; padding-right: 40px;">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin: 24px; ">
                        <div class="row row_dash">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-quartenary">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-quartenary">
                                            <i class="fa fa-book"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">Cek Ketersediaan Bahan Ajar / Modul</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="{{route('bahan-ajar.index')}}" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-secondary">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-secondary">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">E-Sertifikat PKBJJ</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="{{url('searchnimpkbjj')}}" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>
                           
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-success">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-success">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">E-Sertifikat Seminar</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="{{route('sertifikat.kegiatan')}}" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-danger">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-danger">
                                            <i class="fa fa-university"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">Aplikasi SIM Bandung</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="{{route('login')}}" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-primary">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-primary">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">Aplikasi Lembur UT Bandung</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="http://10.24.10.84" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-warning">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-warning">
                                            <i class="fa fa-rss"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">E-Learning Universitas Terbuka</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="https://elearning.ut.ac.id/" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-success">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-success">
                                            <i class="fa fa-eyedropper"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">Formulir TTM ATPEM</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="{{route('ttm-atpem.index')}}" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <section class="panel panel-featured-left panel-featured-warning">
                              <div class="panel-body col_dash" style="height: 186px;">
                                <div class="widget-summary">
                                    <div class="widget-summary-col widget-summary-col-icon">
                                        <div class="summary-icon bg-warning">
                                            <i class="fa fa-tasks"></i>
                                        </div>
                                    </div>
                                <div class="widget-summary-col">
                                    <div class="info">
                                        <h2><strong class="amount nama-aplikasi">Grafik Mahasiswa Baru</strong></h4>
                                    </div>
                                          <div class="summary-footer">
                                              <a href="{{route('grafik.index')}}" name="program" value="01" class="btn btn-success text-uppercase">
                                              Masuk <i class="fa fa-arrow-circle-right" style="color:white;"></i>
                                              </a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </section>
                        </div>          
                    </div>
                </div>
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

