@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Sertifikat</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Create</span></li>
								<li><span>Sertifikat</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					@include('layouts.message')

					<!-- start: page -->
					@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Update Data Sertifikat</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{url('/sertifikat-all/edit', $result->id)}}" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nim" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" value="{{$result->nim}}" maxlength="9" required="" readonly="">
																@if ($errors->has('nim'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('nim') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nama : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" value="{{$result->nama}}" required="">
																@if ($errors->has('nama'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('nama') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Kode Kegiatan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="kode_kegiatan" class="form-control{{ $errors->has('kode_kegiatan') ? ' is-invalid' : '' }}" value="{{$result->kode_kegiatan}}" required="">
																@if ($errors->has('kode_kegiatan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('kode_kegiatan') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Sertifikat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="no_sertifikat" class="form-control{{ $errors->has('no_sertifikat') ? ' is-invalid' : '' }}" value="{{$result->no_sertifikat}}" required="">
																@if ($errors->has('no_sertifikat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_sertifikat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Sebagai : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="sebagai" class="form-control{{ $errors->has('sebagai') ? ' is-invalid' : '' }}" value="{{$result->sebagai}}" required="">
																@if ($errors->has('sebagai'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('sebagai') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tema : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tema" class="form-control{{ $errors->has('tema') ? ' is-invalid' : '' }}" value="{{$result->tema}}" required="">
																@if ($errors->has('tema'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tema') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Narasumber : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="narasumber" class="form-control{{ $errors->has('narasumber') ? ' is-invalid' : '' }}" value="{{$result->narasumber }}" required="">
																@if ($errors->has('narasumber'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('narasumber') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Lokasi : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="lokasi" class="form-control{{ $errors->has('lokasi') ? ' is-invalid' : '' }}" value="{{$result->lokasi}}" required="">
																@if ($errors->has('lokasi'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('lokasi') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Pelaksanaan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tgl_pelaksanaan" class="form-control{{ $errors->has('tgl_pelaksanaan') ? ' is-invalid' : '' }}" value="{{$result->tgl_pelaksanaan}}" required="">
																@if ($errors->has('tgl_pelaksanaan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tgl_pelaksanaan') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Sertifikat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tgl_sertifikat" class="form-control{{ $errors->has('tgl_sertifikat') ? ' is-invalid' : '' }}" value="{{$result->tgl_sertifikat}}" required="">
																@if ($errors->has('tgl_sertifikat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tgl_sertifikat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Penanda Tangan Sertifikat : *')}}</label>
															<div class="col-md-6">
																<select class="form-control mb-md" name="ttd_nip" value="{{ old('nip_ttd') }}" required="">
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
														</div>
														<div>
															<div class="row">
																<div class="col-sm-9 col-sm-offset-3">
																	&nbsp; &nbsp;<button type="submit" class="btn btn-warning">Update</button>
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
						@else()
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Input Data Sertifikat Seminar</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ route('sertifikatall.simpan')}}" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nim" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" value="{{ old('nim') }}" maxlength="9" required="" autofocus="">
																@if ($errors->has('nim'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('nim') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nama : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" value="{{ old('nama') }}" required="">
																@if ($errors->has('nama'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('nama') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Jenis Sertifikat : *')}}</label>
															<div class="col-md-6">
																<select class="form-control mb-md" name="kode_kegiatan" value="{{ old('kode_kegiatan') }}" required="">
																	@foreach($sertifikat as $c)
																	<option value="{{$c->kode_sertifikat}}">{{$c->nama_kegiatan}}</option>
																	@endforeach
																</select>
																@if ($errors->has('kode_kegiatan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('kode_kegiatan') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Sertifikat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="no_sertifikat" class="form-control{{ $errors->has('no_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('no_sertifikat') }}" required="">
																@if ($errors->has('no_sertifikat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_sertifikat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Sebagai : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="sebagai" class="form-control{{ $errors->has('sebagai') ? ' is-invalid' : '' }}" value="{{ old('sebagai') }}" required="">
																@if ($errors->has('sebagai'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('sebagai') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tema : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tema" class="form-control{{ $errors->has('tema') ? ' is-invalid' : '' }}" value="{{ old('tema') }}" required="">
																@if ($errors->has('tema'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tema') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Narasumber : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="narasumber" class="form-control{{ $errors->has('narasumber') ? ' is-invalid' : '' }}" value="{{ old('narasumber') }}" required="">
																@if ($errors->has('narasumber'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('narasumber') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Lokasi : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="lokasi" class="form-control{{ $errors->has('lokasi') ? ' is-invalid' : '' }}" value="{{ old('lokasi') }}" required="">
																@if ($errors->has('lokasi'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('lokasi') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Pelaksanaan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tgl_pelaksanaan" class="form-control{{ $errors->has('tgl_pelaksanaan') ? ' is-invalid' : '' }}" value="{{ old('tgl_pelaksanaan') }}" required="">
																@if ($errors->has('tgl_pelaksanaan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tgl_pelaksanaan') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Sertifikat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tgl_sertifikat" class="form-control{{ $errors->has('tgl_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('tgl_sertifikat') }}" required="">
																@if ($errors->has('tgl_sertifikat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tgl_sertifikat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>


														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Penanda Tangan Sertifikat : *')}}</label>
															<div class="col-md-6">
																<select class="form-control mb-md" name="ttd_nip" value="{{ old('nip_ttd') }}" required="">
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
														</div>
														<div>
															<div class="row">
																<div class="col-sm-9 col-sm-offset-3">
																	&nbsp; &nbsp;<button type="submit" class="btn btn-primary">Simpan</button>
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

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Import Data Sertifikat Seminar</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('/ImportPesertaTutor') }}" method="post" enctype="multipart/form-data">
							                            @csrf
							                            <div class="form-group">
							                                <h3>Silahkan Import Data Peserta Seminar Disini</h3>
							                                <label class="col-md-3 control-label" for="inputDefault">Hanya File (.xls, .xlsx)</label>
							                                <div class="col-md-6">
							                                	<input type="file" class="form-control" name="file">
							                                	<p class="text-danger">{{ $errors->first('file') }}</p>
							                                </div>
							                                <div>
								                                <div class="col-md-6">
								                                	<a href="{{url('/assets/formatexcel/contoh peserta seminar.xlsx')}}" class="btn btn-success">Download Contoh Excel Seminar</a>
								                                </div>
								                            </div>
							                            </div>

							                            <div>
															<div class="row">
																<div class="col-sm-9 col-sm-offset-3">
																	&nbsp; &nbsp;<button type="submit" class="btn btn-primary">Upload</button>
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
						@endif
				</section>
@endsection