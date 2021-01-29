@extends('layouts.masterapp')
@section('content')

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Program Studi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>Program Studi</span></li>
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
						
								<h2 class="panel-title">Data Program Studi</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-md-8">
										<form action="{{ route('programstudi.store')}}" method="POST">
                						{{csrf_field()}}
											<section class="panel">
												<div class="panel-body">
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Kode Program Studi:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="kode_ps" class="form-control{{ $errors->has('kode_ps') ? ' is-invalid' : '' }}" value="{{ old('kode_ps') }}">
															@if ($errors->has('kode_ps'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('kode_ps') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Nama Program Studi:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="nama_programstudi" class="form-control{{ $errors->has('nama_programstudi') ? ' is-invalid' : '' }}" value="{{ old('nama_programstudi') }}">
															@if ($errors->has('nama_programstudi'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('nama_programstudi') }}</strong>
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
									<thead>
										<tr>
											<th>Kode Program Studi</th>
											<th>Nama Program Studi</th>
											<th class="center">Opsi</th>
										</tr>
									</thead>
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td>{{$a->kode_ps}}</td>
											<td>{{$a->nama_programstudi}}</td>
											<td class="center">
												<form action="{{ route('biodata.destroy', $a->kode_ps)}}" method="POST">
													<a class="btn btn-sm btn-warning" href="{{route('biodata.edit', $a->kode_ps)}}">Edit</a>
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