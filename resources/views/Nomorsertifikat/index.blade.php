@extends('layouts.masterapp')
@section('content')

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Nomor Sertifikat</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>nomor sertifikat</span></li>
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
						
								<h2 class="panel-title">Nomor Sertifikat</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-md-8">
										<form action="{{ route('nomorsertifikat.store')}}" method="POST">
                						{{csrf_field()}}
											<section class="panel">
												<div class="panel-body">
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Sertifikat Nomor:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="no_sertifikat" class="form-control{{ $errors->has('no_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('no_sertifikat') }}" required="">
															@if ($errors->has('no_sertifikat'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('no_sertifikat') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Program Sertifikat:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="kode_sertifikat" class="form-control{{ $errors->has('kode_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('kode_sertifikat') }}" required="">
															@if ($errors->has('kode_sertifikat'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('kode_sertifikat') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Tanggal Pelaksanaan:')}}</label>
														<div class="col-sm-8">
															<input type="date" name="tgl_pelaksanaan" class="form-control{{ $errors->has('tgl_pelaksanaan') ? ' is-invalid' : '' }}" value="{{ old('tgl_pelaksanaan') }}" required="">
															@if ($errors->has('tgl_pelaksanaan'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('tgl_pelaksanaan') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Tanggal Sertifikat:')}}</label>
														<div class="col-sm-8">
															<input type="date" name="tgl_sertifikat" class="form-control{{ $errors->has('tgl_sertifikat') ? ' is-invalid' : '' }}" value="{{ old('tgl_sertifikat') }}" required="">
															@if ($errors->has('tgl_sertifikat'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('tgl_sertifikat') }}</strong>
							                                    </span>
							                                @endif
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
									<thead>
										<tr>
											<th>Nomor Sertifikat</th>
											<th>Nama Program Sertifikat</th>
											<th>Tanggal Pelaksanaan</th>
											<th>Tanggal Sertifikat</th>
											<th class="center">Opsi</th>
										</tr>
									</thead>
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td>{{$a->no_sertifikat}}</td>
											<td>{{$a->kode_sertifikat}}</td>
											<td>{{$a->tgl_pelaksanaan}}</td>
											<td>{{$a->tgl_sertifikat}}</td>
											<td class="center">
												<form action="{{ route('nomorsertifikat.destroy', $a->no_sertifikat)}}" method="POST">
													<a class="btn btn-sm btn-warning" href="{{route('nomorsertifikat.edit', $a->no_sertifikat)}}">Edit</a>
												@csrf
												@method('DELETE')
													<button type="submit" class="btn btn-sm btn-danger">Delete</button>
												</form>
											</td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>

@endsection