@extends('layouts.masterapp')
@section('content')

<section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Pengguna Aplikasi</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Tables</span></li>
								<li><span>user aplikasi</span></li>
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
						
								<h2 class="panel-title">Data Pengguna Aplikasi</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-8">
										<form action="{{ route('user.store')}}" method="POST">
                						{{csrf_field()}}
											<section class="panel">
												<div class="panel-body">
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Nama:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required="" autofocus="">
															@if ($errors->has('name'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('name') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Email:')}}</label>
														<div class="col-sm-8">
															<input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required="">
															@if ($errors->has('email'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('email') }}</strong>
							                                    </span>
							                                @endif
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">{{__('Level Akses:')}}</label>
														<div class="col-sm-8">
															<select type="text" name="id_group" class="form-control{{ $errors->has('id_group') ? ' is-invalid' : '' }}" value="{{ old('id_group') }}" required="">
																<option value="">--Pilih Salah Satu--</option>
																<option value="5">Admin Surat UPBJJ</option>
																<option value="6">Admin Surket UPBJJ</option>
																<option value="7">Admin Ijazah</option>
																<option value="8">Admin UPI</option>
																<option value="3">Manajer</option>
																<option value="4">Direktur</option>
																<option value="2">Admin UPBJJ</option>
															</select>
														</div>
													</div>
													<div class="form-group">
							                            <label for="password" class="col-md-4 control-label">{{ __('Password') }}</label>

							                            <div class="col-md-8">
							                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required required="">

							                                @if ($errors->has('password'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('password') }}</strong>
							                                    </span>
							                                @endif
							                            </div>
							                        </div>

							                        <div class="form-group">
							                            <label for="password-confirm" class="col-md-4 control-label">{{ __('Confirm Password') }}</label>

							                            <div class="col-md-8">
							                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Akses</th>
											<th class="center">Opsi</th>
										</tr>
									</thead>
									<tbody>
										@php $no = 1; @endphp
										@foreach ($result as $a)
										<tr>
											<td>{{$no++}}</td>
											<td>{{$a->name}}</td>
											<td>{{$a->email}}</td>
											<td>{{$a->namagroup}}</td>
											<td class="center">
												<form action="{{ route('user.destroy', $a->id)}}" method="POST">
													<a class="btn btn-sm btn-warning" href="{{route('user.edit', $a->id)}}">Edit</a>
												@csrf
												@method('DELETE')
													<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah kamu yakin akan menghapus data ini?')">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
				</section>

@endsection