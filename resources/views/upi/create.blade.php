@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Pendaftaran UPI :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>pendaftaran</span></li>
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
						
								<h2 class="panel-title">Cari Data Lulusan</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('graduation/upbjj/upi/pendaftaran/search')}}" method="POST"  role="cari">
			                						{{csrf_field()}}
														<div class="form-group">
													        <div class="col-md-3">
													            <input type="text" name="cari" class="form-control{{ $errors->has('cari') ? ' is-invalid' : '' }}" value="{{ old('cari') }}" maxlength="9" required="" autofocus="" placeholder=" Masukkan NIM ...">
															</div>
															<button class="btn btn-primary fa fa-search">&nbsp; Cari</button>
													    </div>
													</form>
												</div>
											</section>
									</div>
								</div>
								</table>
							</div>
						</section>
						@if(isset($tampil))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Pendaftar UPI</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th style="background-color:Silver"><center>NIM</center></th>
						            <th style="background-color:Silver"><center>Nomor SK</center></th>
						            <th style="background-color:Silver"><center>Tanggal Pendaftaran</center></th>
						            <th style="background-color:Silver"><center>Status IJazah/Transkrip</center></th>
						            <th style="background-color:Silver"><center>Status Foto</center></th>
						            <th style="background-color:Silver"><center>TGL Terima Ijazah</center></th>
						            <th style="background-color:Silver"><center>Tgl Kirim Foto Ke Pusat</center></th>
						          </tr>
						        </thead>
									@foreach ($tampil as $a)
									<tbody>
										<tr>
											<td><center>{{$a->nim}}</center></td>
											<td><center>{{$a->nomor_sk_upi}}</center></td>
											<td><center>{{$a->tgl_pendaftaran}}</center></td>
											<td><center>{{$a->status_ijazah}}|{{$a->status_transkrip_nilai}}</center></td>
											<td><center>{{$a->status_foto}}</center></td>
											<td><center>{{$a->tgl_terima}}</center></td>
											<td><center>{{$a->tgl_kirim_ke_pusat}}</center></td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>
						</section>
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif

						@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Lulusan</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{route('upi.store')}}" method="POST">
												@foreach($result as $a)
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nim" class="form-control" value="{{$a->nim}}"readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Kode dan Program Studi : *')}}</label>
															<div class="col-md-1">
																<input type="text" class="form-control" value="{{$a->kode_program_studi}}"readonly="">
															</div>
															<div class="col-md-3">
																<input type="text" class="form-control" value="{{$a->nama_program_studi}}"readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
															<div class="col-md-2">
																<input type="text" class="form-control" value="{{$a->nama_mahasiswa}}" readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tempat & tanggal Lahir : *')}}</label>
															<div class="col-md-3">
																<input type="text" class="form-control" value="{{$a->tempat_lahir}}" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" class="form-control" value="{{$a->tgl_lahir}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Alamat : *')}}</label>
															<div class="col-md-6">
																<input type="text" class="form-control" value="{{$a->alamat_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Status Foto : *')}}</label>
															<div class="col-md-1">
																<input type="text" class="form-control" value="{{$a->status}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Status Ijazah:')}}</label>
															<div class="col-md-1">
																<input type="text" class="form-control" value="{{$a->status_ijazah}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Status Transkrip:')}}</label>
															<div class="col-md-1">
																<input type="text" class="form-control" value="{{$a->status_transkrip_nilai}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Penyimpanan:')}}</label>
															<div class="col-md-2">
																<input type="text" class="form-control" value="{{$a->no_urut_penyimpanan}}|{{$a->amplop}}|{{$a->penyimpanan}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal Pendaftaran : *')}}</label>
															<div class="col-md-2">
																<input type="text" id="tanggal" name="tgl_pendaftaran" class="form-control" value="{{ $hariini }}" placeholder="dd-mm-yyyy"  required="">
															</div>
														</div>
														@foreach($nomor as $b)
															<input type="hidden" name="nomor_sk_upi"value="{{ $b->nomor_sk_upi }}" required="">
														@endforeach
														<input type="hidden" name="user_create" value="{{Auth::user()->name}}">
														<div class="form-group">
															<label class="col-md-2 control-label"></label>
															<div class="col-md-8">
																<button type="submit" class="btn btn-primary btn-lg btn-block fa fa-save"> Simpan </button>
															</div>
														</div>
													@endforeach
													</form>
												</div>
											</section>
									</div>
								</div>
								</table>
							</div>
						</section>
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
				</section>

@endsection