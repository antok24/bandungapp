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
                    <!-- start: page -->
                        <section class="panel">
                            <div class="panel-body">
                                <p>
                                    <font color="black">
                                    1. TTM Atpem adalah Tutorial Tatap Muka yang dapat diselenggarakan JIKA ada permintaan dari mahasiswa. Formulir ini bertujuan untuk mengorganisir dan mengelompokkan kelas berdasarkan usulan Tutorial Tatap Muka oleh mahasiswa Universitas Terbuka di wilayah kerja UPBJJ-UT Bandung. <br>
                                    2. TTM Atpem oleh UPBJJ-UT Bandung akan dilaksanakan sebanyak delapan kali pertemuan dalam delapan minggu berturut-turut untuk setiap mata kuliah. Dimana pelaksanaannya akan dilakukan baik di Kota Bandung, maupun wilayah lainnya yang memenuhi persyaratan untuk dilaksanakan TTM. <br>
                                    3. TTM Atpem hanya dapat diselenggarakan apabila:<br> 
                                        &emsp;&emsp;a. Jumlah peserta telah mencapai minimal 20 orang dan maksimal 35 orang per mata kuliah per kelas per semester.<br>
                                        &emsp;&emsp;b. Semua mahasiswa calon peserta TTM Atpem telah melunasi biaya TTM Atpem.<br>
                                        &emsp;&emsp;c. Tersedia Tutor yang relevan dengan mata kuliah yang akan ditutorialkan.<br>
                                    4. Satu form ini hanya berlaku untuk satu mata kuliah. Jika ingin mendaftar mata kuliah yang lain, silahkan mengisi dan mengirimkan form ini kembali untuk mata kuliah selanjutnya.<br>
                                    5. Formulir ini akan segera ditutup apabila waktu registrasi TTM ATPEM berakhir (Lihat kalender akademik UT).<br>
                                    6. Informasi lebih lanjut dapat mendatangi Kantor UPBJJ-UT Bandung atau dapat menghubungi akun media sosial (whatsapp, instagram, facebook) UPBJJ-UT Bandung. (Whatsapp ke nomer 0811 2346 004, dengan kode pesan di awali *INFO TTM*)<br></font>
                                    <font color="red">(WAJIB)**</font>
                                </p>
                                
                            </div>
                        </section>
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
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                        
                                <h2 class="panel-title">Formulir Usulan TTM Atas Permintaan Mahasiswa (ATPEM)</h2>
                            </header>
                            @if(isset($result))
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <form action="{{ url('/formulir-ttm-atpem/simpan')}}" method="POST"  role="simpan">
                                                    @foreach($result as $a)
                                                    {{csrf_field()}}
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('NIM | Nama Mahasiswa: ')}}</label>
                                                            <div class="col-md-2">
                                                                <input type="hidden" name="masa" value="20201">
                                                                <input type="text" name="nim" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" value="{{$a->nim}}" maxlength="9" readonly="">
                                                                @if ($errors->has('nim'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nim') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="nama_mahasiswa" class="form-control{{ $errors->has('nama_mahasiswa') ? ' is-invalid' : '' }}" value="{{$a->nama_mahasiswa}}" maxlength="100" readonly="">
                                                                @if ($errors->has('nama_mahasiswa'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nama_mahasiswa') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Semester | Program Studi: ')}}</label>
                                                            <div class="col-md-1">
                                                                <input type="text" name="semester" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" value="" maxlength="2" required="">
                                                                @if ($errors->has('semester'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('semester') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="hidden" value="{{$a->kode_program_studi}}" name="kode_prodi">
                                                                <input type="text" name="nama_program_studi" class="form-control{{ $errors->has('nama_program_studi') ? ' is-invalid' : '' }}" value="{{$a->nama_program_studi}}" maxlength="3" readonly="">
                                                                @if ($errors->has('nama_program_studi'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nama_program_studi') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Matakuliah yang akan di daftarkan TTM ATPEM: *')}}</label>
                                                            <div class="col-md-6">
                                                                <select class="form-control mb-md" name="kode_mtk" required="">
                                                                    <option value=""></option>
                                                                    <option value="MKDU4000">MKDU4000</option>
                                                                    <option value="MKDU4111">MKDU4111</option>
                                                                    <option value="MKDU4222">MKDU4222</option>
                                                                    <option value="MKDU4333">MKDU4333</option>
                                                                </select>
                                                                @if ($errors->has('kode_mtk'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('kode_mtk') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Lokasi TTM: *')}}</label>
                                                            <div class="col-md-6">
                                                                <select class="form-control mb-md" name="lokasi" required="">
                                                                    <option value=""></option>
                                                                    <option value="Kantor Universitas Terbuka Bandung">Kantor Universitas Terbuka Bandung</option>
                                                                    <option value="Kota Cirebon">Kota Cirebon</option>
                                                                    <option value="Kabupaten Cirebon">Kabupaten Cirebon</option>
                                                                    <option value="Kota Tasikmalaya">Kota Tasikmalaya</option>
                                                                </select>
                                                                @if ($errors->has('lokasi'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('lokasi') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="NomorHp">{{__('Nomor Handphone Aktif: *')}}</label>
                                                            <div class="col-md-3">
                                                                <input type="text" name="nomor_hp" class="form-control" value="" maxlength="20" required="">
                                                        </div>
                                                        @endforeach
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-sm-9 col-sm-offset-3">
                                                                    &nbsp; &nbsp;<button type="submit" class="mb-xs mt-xs mr-xs btn btn-success">Proses Daftar TTM ATPEM</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="background-color:#66ccff" width="5%"><center>No</center></th>
                                            <th style="background-color:#66ccff" width="10%"><center>Kode Matakuliah</center></th>
                                            <th style="background-color:#66ccff" width="20%"><center>Nama Matakuliah</center></th>
                                            <th style="background-color:#66ccff" width="25%"><center>Lokasi</center></th>
                                            <th style="background-color:#66ccff" width="25%"><center>Jumlah Pendaftar</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <form action="{{ url('/formulir-ttm-atpem/cari')}}" method="GET"  role="cari">
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
                                                                    &nbsp; &nbsp;<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary">Cari Data Anda</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                    </div>
                                </div>
                            </div>
                            @endif
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

