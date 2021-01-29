@extends('layouts.masterapp')
@section('content')

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Data BAN-PT</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>BAN-PT</span></li>
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
						
								<h2 class="panel-title">Form Input SK BAN-PT</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-8">
										<form action="{{ route('ban-pt.store')}}" method="POST">
                						{{csrf_field()}}
											<section class="panel">
												<div class="panel-body">
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('ID :')}}</label>
														<div class="col-sm-8">
															<input type="text" name="id" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" value="{{$nourut}}">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Nomor SK BAN-PT:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="nomor_sk_ban_pt" class="form-control{{ $errors->has('nomor_sk_ban_pt') ? ' is-invalid' : '' }}" value="{{ old('nomor_sk_ban_pt') }}" required="" autofocus="">
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
															<input type="text" name="kode_program_studi" class="form-control{{ $errors->has('kode_program_studi') ? ' is-invalid' : '' }}" value="{{ old('kode_program_studi') }}" required="">
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
															<select type="text" name="peringkat" class="form-control{{ $errors->has('peringkat') ? ' is-invalid' : '' }}" value="{{ old('peringkat') }}" required="">
																<option value="">--Pilih Salah Satu--</option>
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
															<input type="text" name="tgl_mulai_sk" class="form-control{{ $errors->has('tgl_mulai_sk') ? ' is-invalid' : '' }}" value="{{ old('tgl_mulai_sk') }}" required="" autofocus="">
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
															<input type="text" name="tgl_akhir_sk" class="form-control{{ $errors->has('tgl_akhir_sk') ? ' is-invalid' : '' }}" value="{{ old('tgl_akhir_sk') }}" required="" autofocus="">
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
						@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Akreditasi BAN-PT Universitas Terbuka</h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
								<table class="table table-bordered table-striped table-condensed mb-none dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
						        <thead>
										<tr>
											<th>No</th>
											<th>Program Studi</th>
											<th>Nomor SK BAN PT</th>
											<th>Peringkat</th>
											<th>TGL Mulai</th>
											<th>TGL Berakhir</th>
											<th class="center">Opsi</th>
										</tr>
									</thead>
									@php $no = 1; @endphp
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td>{{$no++}}</td>
											<td>{{$a->kode_program_studi}}</td>
											<td>{{$a->nomor_sk_ban_pt}}</td>
											<td>{{$a->peringkat}}</td>
											<td>{{$a->tgl_mulai_sk}}</td>
											<td>{{$a->tgl_akhir_sk}}</td>
											<td class="center">
												<form action="{{ route('ban-pt.destroy', $a->id)}}" method="POST">
													<a class="btn btn-sm btn-warning" href="{{route('ban-pt.edit', $a->id)}}">Edit</a>
												@csrf
												@method('DELETE')
													<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah kamu yakin akan menghapus data ini?')">Delete</button>
												</form>
											</td>
										</tr>
									</tbody>
									@endforeach
								</table>
								{{ $result->links() }}
							</div>
						</div>
						</section>
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
					<!-- end: page -->
				</section>

@endsection