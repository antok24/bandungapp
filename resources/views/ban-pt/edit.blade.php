@extends('layouts.masterapp')
@section('content')

<section role="main" class="content-body">
					<header class="page-header">
						<h2>BAN-PT</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data</span></li>
								<li><span>Form BAN-PT</span></li>
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
						
								<h2 class="panel-title">Form Edit Data SK BAN-PT</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-8">
										<form action="{{ route('ban-pt.update', $banpt->id)}}" method="POST">
                						@csrf
										@method('PUT')
											<section class="panel">
												<div class="panel-body">
													<input type="hidden" name="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" value="{{ old('id') }}" required="">
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Nomor SK BAN-PT:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="nomor_sk_ban_pt" class="form-control{{ $errors->has('nomor_sk_ban_pt') ? ' is-invalid' : '' }}" value="{{$banpt->nomor_sk_ban_pt}}" required="">
															@if ($errors->has('nomor_sk_ban_pt'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('nomor_sk_ban_pt') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Kode Program Studi:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="kode_program_studi" class="form-control{{ $errors->has('kode_program_studi') ? ' is-invalid' : '' }}" value="{{$banpt->kode_program_studi}}" required="">
															@if ($errors->has('kode_program_studi'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('kode_program_studi') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Peringkat:')}}</label>
														<div class="col-sm-8">
															<select type="text" name="peringkat" class="form-control{{ $errors->has('peringkat') ? ' is-invalid' : '' }}" required="">
																<option value="{{$banpt->peringkat}}">{{$banpt->peringkat}}</option>
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Tanggal Berlaku:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="tgl_mulai_sk" class="form-control{{ $errors->has('tgl_mulai_sk') ? ' is-invalid' : '' }}" value="{{$banpt->tgl_mulai_sk}}" required="">
															@if ($errors->has('tgl_mulai_sk'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('tgl_mulai_sk') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Tanggal Berakhir:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="tgl_akhir_sk" class="form-control{{ $errors->has('tgl_akhir_sk') ? ' is-invalid' : '' }}" value="{{$banpt->tgl_akhir_sk}}" required="">
															@if ($errors->has('tgl_akhir_sk'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('tgl_akhir_sk') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
												</div>
												<div class="center">
													<button class="btn btn-primary">{{__('Submit')}}</button>
													<button type="reset" class="btn btn-default">{{__('Reset')}}</button>
												</div>
											</section>
										</form>
									</div>
								</div>
							</div>
						</section>
					<!-- end: page -->
				</section>

@endsection