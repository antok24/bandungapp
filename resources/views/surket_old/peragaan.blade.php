@extends('layouts.masterapp')
@section('content')

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>.: Peragaan Surket :.</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>cari data</span></li>
                                <li><span>surket</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    @include('layouts.message')

                    <!-- start: page -->
                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                        
                                <h2 class="panel-title">Form Pencarian Surat Keterangan Aktif</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <form action="{{ url('/surket-mahasiswa/peragaan')}}" method="POST"  role="cari">
                                                    {{csrf_field()}}
                                                        <div class="form-group">
                                                            <div class="col-md-1">
                                                                <label>{{__('NIM: *')}}</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="cari" class="form-control{{ $errors->has('cari') ? ' is-invalid' : '' }}" value="{{ old('cari') }}" maxlength="" required="" autofocus="" placeholder=" Masukkan NIM">
                                                            </div>
                                                            <button class="btn btn-primary fa fa-search">&nbsp; Cari</button>
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
                        
                                <h2 class="panel-title">Detail Surat Keterangan Aktif</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                  <tr>
                                    <th style="background-color:Silver"><center>No Surat</center></th>
                                    <th style="background-color:Silver"><center>NIM</center></th>
                                    <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
                                    <th style="background-color:Silver"><center>Tempat/Tgl Lahir</center></th>
                                    <th style="background-color:Silver"><center>Alamat</center></th>
                                    <th style="background-color:Silver"><center>Program Studi</center></th>
                                    <th style="background-color:Silver"><center>MR Awal</center></th>
                                    <th style="background-color:Silver"><center>MR Akhir</center></th>
                                    <th style="background-color:Silver"><center>Operator</center></th>
                                    <th style="background-color:Silver"><center>Opsi</center></th>
                                  </tr>
                                </thead>
                                @foreach ($result as $a)
                                    <tbody>
                                        <tr>
                                            <td>{{$a->no_surat}}{{$a->kode_surat}}</td>
                                            <td>{{$a->nim}}</td>
                                            <td>{{$a->nama_mahasiswa}}</td>
                                            <td>{{$a->tempat_lahir_mahasiswa}},{{$a->tgl_lahir}}</td>
                                            <td>{{$a->alamat_mahasiswa}}</td>
                                            <td>{{$a->nama_program_studi}}</td>
                                            <td>{{$a->mr_awal}}</td>
                                            <td>{{$a->mr_akhir}}</td>
                                            <td>{{$a->user_create}}</td>
                                            <td class="center">
                                                    <a class="btn btn-sm btn-warning" target="_blank" href="/surket-mahasiswa/print/{{encrypt($a->no_surat)}}"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Sertifikat"></i></a>
                                                    <a class="btn btn-sm btn-primary" href="/surket-mahasiswa/edit/{{encrypt($a->no_surat)}}"><i class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Edit Surket"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                </table>
                            </div>
                        </section>
                        @elseif(isset($message))
                            <p>{{ $message }}</p>
                        @endif
                </section>

@endsection