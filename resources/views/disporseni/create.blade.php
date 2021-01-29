@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Sertifikat Disporseni</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Create</span></li>
								<li><span>Sertifikat Disporseni</span></li>
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
						
								<h2 class="panel-title">Update Data Sertifikat Disporseni</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{url('/disporseni/edit', $result->id)}}" method="POST">
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nama Mahasiswa: *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_mahasiswa" class="form-control{{ $errors->has('nama_mahasiswa') ? ' is-invalid' : '' }}" value="{{$result->nama_mahasiswa}}" required="">
																@if ($errors->has('nama_mahasiswa'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('nama_mahasiswa') }}</strong>
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Kategori Lomba : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="jenis_lomba" class="form-control{{ $errors->has('jenis_lomba') ? ' is-invalid' : '' }}" value="{{$result->jenis_lomba}}" required="">
																@if ($errors->has('jenis_lomba'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('jenis_lomba') }}</strong>
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Pelaksanaan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tanggal_pelaksanaan" class="form-control{{ $errors->has('tanggal_pelaksanaan') ? ' is-invalid' : '' }}" value="{{$result->tanggal_pelaksanaan}}" required="">
																@if ($errors->has('tanggal_pelaksanaan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tanggal_pelaksanaan') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Sertifikat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tanggal_sertifikat" class="form-control{{ $errors->has('tanggal_sertifikat') ? ' is-invalid' : '' }}" value="{{$result->tanggal_sertifikat}}" required="">
																@if ($errors->has('tanggal_sertifikat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tanggal_sertifikat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Penanda Tangan Sertifikat : *')}}</label>
															<div class="col-md-6">
																<select class="form-control mb-md" name="nip_ttd" value="{{ old('nip_ttd') }}" required="">
																	<option value=""> --Silahkan Pilih-- </option>
																	  @foreach ($pejabat as $pjb)
																	        <option value="{{ $pjb->nip }}">{{ $pjb->nama_pegawai }}</option> 
																	  @endforeach
																	</select
																</select>
																@if ($errors->has('nip_ttd'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('nip_ttd') }}</strong>
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
						
								<h2 class="panel-title">Input Data Sertifikat Disporseni</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ route('disporseni.simpan')}}" method="POST">
			                						{{csrf_field()}}
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('NIM : *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="nim" class="form-control{{ $errors->has('nim') ? ' is-invalid' : '' }}" value="{{ old('nim')}}" maxlength="9" required="">
                                                                @if ($errors->has('nim'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nim') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Nama Mahasiswa: *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="nama_mahasiswa" class="form-control{{ $errors->has('nama_mahasiswa') ? ' is-invalid' : '' }}" value="{{ old('nama_mahasiswa')}}" required="">
                                                                @if ($errors->has('nama_mahasiswa'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nama_mahasiswa') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Sebagai : *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="sebagai" class="form-control{{ $errors->has('sebagai') ? ' is-invalid' : '' }}" value="{{ old('sebagai')}}" required="">
                                                                @if ($errors->has('sebagai'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('sebagai') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Kategori Lomba : *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="jenis_lomba" class="form-control{{ $errors->has('jenis_lomba') ? ' is-invalid' : '' }}" value="{{ old('jenis_lomba')}}" required="">
                                                                @if ($errors->has('jenis_lomba'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('jenis_lomba') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Sertifikat : *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="no_sertifikat" class="form-control{{ $errors->has('no_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('no_sertifikat')}}" required="">
                                                                @if ($errors->has('no_sertifikat'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('no_sertifikat') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Pelaksanaan : *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="tanggal_pelaksanaan" class="form-control{{ $errors->has('tanggal_pelaksanaan') ? ' is-invalid' : '' }}" value="{{ old('tanggal_pelaksanaan')}}" required="">
                                                                @if ($errors->has('tanggal_pelaksanaan'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('tanggal_pelaksanaan') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Sertifikat : *')}}</label>
                                                            <div class="col-md-6">
                                                                <input type="text" name="tanggal_sertifikat" class="form-control{{ $errors->has('tanggal_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('tanggal_sertifikat')}}" required="">
                                                                @if ($errors->has('tanggal_sertifikat'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('tanggal_sertifikat') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="inputDefault">{{__('Penanda Tangan Sertifikat : *')}}</label>
                                                            <div class="col-md-6">
                                                                <select class="form-control mb-md" name="nip_ttd" value="{{ old('nip_ttd') }}" required="">
                                                                    <option value=""> --Silahkan Pilih-- </option>
                                                                    @foreach ($pejabat as $pjb)
                                                                            <option value="{{ $pjb->nip }}">{{ $pjb->nama_pegawai }}</option> 
                                                                    @endforeach
                                                                    </select
                                                                </select>
                                                                @if ($errors->has('nip_ttd'))
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('nip_ttd') }}</strong>
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
						
								<h2 class="panel-title">Import Data Sertifikat Disporseni</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('/disporseni/import') }}" method="post" enctype="multipart/form-data">
							                            @csrf
							                            <div class="form-group">
							                                <h3>Silahkan Import Data Peserta Seminar Disporseni Disini</h3>
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