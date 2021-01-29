@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Sertifikat PKBJJ</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Create data</span></li>
								<li><span>Sertifikat PKBJJ</span></li>
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
						
								<h2 class="panel-title">Input Data Sertifikat PKBJJ</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ route('mpkbjj.store')}}" method="POST">
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Kode Kegiatan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="kode_kegiatan" class="form-control{{ $errors->has('kode_kegiatan') ? ' is-invalid' : '' }}" value="{{ old('kode_kegiatan') }}" required="">
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
						
								<h2 class="panel-title">Import Data Sertifikat PKBJJ</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('/ImportPesertaPkbjj') }}" method="post" enctype="multipart/form-data">
							                            @csrf
							                            <div class="form-group">
							                                <h3>Silahkan Import Data Peserta PKBJJ Disini</h3>
							                                <label class="col-md-3 control-label" for="inputDefault">Hanya File (.xls, .xlsx)</label>
							                                <div class="col-md-6">
							                                	<input type="file" class="form-control" name="file">
							                                	<p class="text-danger">{{ $errors->first('file') }}</p>
							                                </div>
							                                <div>
								                                <div class="col-md-6">
								                                	<a href="{{url('/assets/formatexcel/contoh peserta pkbjj.xlsx')}}" class="btn btn-success">Download Contoh Excel PKBJJ</a>
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


				</section>

@endsection