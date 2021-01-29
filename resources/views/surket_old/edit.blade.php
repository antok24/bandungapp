@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Surat Keterangan Aktif :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Surat Keterangan Aktif</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
						@include('layouts.message')
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Form Edit Surat Keterangan</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
												@foreach($results as $result)
													<form action="{{url('/surket-mahasiswa/editx', encrypt($result->no_surat))}}" method="POST">
			                						{{csrf_field()}}
			                							<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Pilih TTD : *')}}</label>
															<div class="col-md-4">
																<select class="form-control mb-md" name="nip_ttd" required="">
																	<option value="{{$result->nip_ttd}}">{{$result->nama_pegawai}}</option>
																	<option value="196310211988031003">Drs. Enang Rusyana, M.Pd.</option>
																	<option value="198502212008121002">Angga Sucitra H, S.E., M.Si</option>
																	<option value="197710022005012001">Imas Maesaroh, S.E., M.Si.</option>
																	<option value="197611202005012001">Merry Monica, S.Tp</option>
																</select>
																@if ($errors->has('no_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
															<div class="col-md-3">
																<input type="hidden" name="kode_surat" class="form-control" value="12345" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-4">
																<input type="text" name="no_surat" class="form-control" value="{{ $result->no_surat}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="nim" class="form-control" value="{{$result->nim}}"readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_mahasiswa" class="form-control" value="{{$result->nama_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tempat Lahir : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tempat_lahir_mahasiswa" class="form-control" value="{{$result->tempat_lahir_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Lahir : *')}}</label>
															<div class="col-md-3">
																<input type="text" id="tanggal" name="tgl_lahir" class="form-control" value="{{$result->tgl_lahir}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Program Studi : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_program_studi" class="form-control" value="{{$result->nama_program_studi}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Fakultas : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_fakultas" class="form-control" value="{{$result->nama_fakultas}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Alamat Mahasiswa : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="alamat_mahasiswa" class="form-control" value="{{$result->alamat_mahasiswa}}" required="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('MR Awal : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="mr_awal" class="form-control" value="{{$result->mr_awal}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('MR Akhir : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="mr_akhir" class="form-control" value="{{$result->mr_akhir}}">
								                                <input type="hidden" name="user_create" value="{{Auth::user()->name}}">
															</div>
														</div>
														<div>
															<div class="row">
																<div class="col-sm-9 col-sm-offset-3">
																	&nbsp; &nbsp;<button type="submit" class="btn btn-warning">Update</button>
																</div>
															</div>
														</div>
													</form>
													@endforeach
												</div>
											</section>
										</div>
									</div>
								</table>
							</div>
						</section>
					</section>
@endsection