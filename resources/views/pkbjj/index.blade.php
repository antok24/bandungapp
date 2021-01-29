@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Peserta PKBJJ</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
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
						
								<h2 class="panel-title">Edit Data Sertifikat PKBJJ</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('/mpkbjj/search')}}" method="POST"  role="cari">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Masukan NIM / Nama: *')}}</label>
															<div class="col-md-4">
																<input type="text" name="cari" class="form-control{{ $errors->has('cari') ? ' is-invalid' : '' }}" value="{{ old('cari') }}" maxlength="9" required="" autofocus="">
																@if ($errors->has('cari'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('cari') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<div>
															<div class="row">
																<div class="col-sm-9 col-sm-offset-3">
																	&nbsp; &nbsp;<button type="submit" class="mb-xs mt-xs mr-xs btn btn-lg btn-primary">Cari data</button>
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
						
						@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Hasil Pencarian to Edit</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
									<thead>
										<tr>
											<th>No</th>
											<th>nim</th>
											<th>Nama Mahasiswa</th>
											<th>Nama Sertifikat</th>
											<th>Nomor Sertifikat</th>
											<th>Sebagai</th>
											<th>Tanggal Pelaksanaan</th>
											<th>Tanggal Sertifikat</th>
											<th class="center">Opsi</th>
										</tr>
									</thead>
									@php $no = 1; @endphp
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td>{{$no++}}</td>
											<td>{{$a->nim}}</td>
											<td>{{$a->nama}}</td>
											<td>{{$a->nama_kegiatan}}</td>
											<td>{{$a->no_sertifikat}}</td>
											<td>{{$a->sebagai}}</td>
											<td>{{$a->tgl_pelaksanaan}}</td>
											<td>{{$a->tgl_sertifikat}}</td>
											<td class="center" width="120px">
												<form action="{{ route('mpkbjj.destroy', $a->nim)}}" method="POST">
												@csrf
												@method('DELETE')
													<a href="/mpkbjj/edit/{{encrypt($a->nim)}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit data">Edit</a> |
													<button type="submit" class="btn btn-danger btn-xs" aria-hidden="" data-toggle="tooltip" data-placement="top" data-original-title="Delete data" onclick="return confirm('Apakah kamu yakin akan menghapus data ini?')">Delete</button>
												</form>
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