@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Penyerahan Foto Ijazah :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Foto Ijazah</span></li>
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
													<form action="{{ url('graduation/fotoijazah/search')}}" method="POST"  role="cari">
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
						
								<h2 class="panel-title">Cetak Lembar Foto Ijazah</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th style="background-color:Silver"><center>NIM</center></th>
						            <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
						            <th style="background-color:Silver"><center>Tempat/Tgl Lahir</center></th>
						            <th style="background-color:Silver"><center>Program Studi</center></th>
						            <th style="background-color:Silver"><center>Nomor SK Rektor</center></th>
						            <th style="background-color:Silver"><center>IPK</center></th>
						            <th style="background-color:Silver"><center>Tanggal Kirim</center></th>
						            <th style="background-color:Silver"><center>Opsi</center></th>
						          </tr>
						        </thead>
									@foreach ($tampil as $a)
									<tbody>
										<tr>
											<td><center>{{$a->nim}}</center></td>
											<td>{{$a->nama_mahasiswa}}</td>
											<td>{{$a->tempat_lahir}},{{$a->tgl_lahir}}</td>
											<td>{{$a->kode_program_studi}}|{{$a->nama_program_studi}}</td>
											<td><center>{{$a->nomor_sk_rektor}}</center></td>
											<td><center>{{$a->ipk}}</center></td>
											<td><center>{{$a->tgl_terima}}</center></td>
											<td class="center">
													<a class="btn btn-sm btn-warning" target="_blank" href="/graduation/fotoijazah/print/{{encrypt($a->nim)}}"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Surket"></i></a>
													<!-- <a class="btn btn-sm btn-primary" href="/graduation/fotoijazah/edit/{{encrypt($a->nim)}}"><i class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Edit Surket"></i></a> -->
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
													<form action="{{route('fotoijazah.store')}}" method="POST">
												@foreach($result as $a)
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nim" class="form-control" value="{{$a->nim}}"readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Kode dan Program Studi : *')}}</label>
															<div class="col-md-1">
																<input type="text" name="kode_program_studi" class="form-control" value="{{$a->kode_program_studi}}"readonly="">
															</div>
															<div class="col-md-3">
																<input type="text" name="nama_program_studi" class="form-control" value="{{$a->nama_program_studi}}"readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nama_mahasiswa" class="form-control" value="{{$a->nama_mahasiswa}}" readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Ijazah & Akta : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="no_ijazah_d" class="form-control" value="{{$a->no_ijazah_d}}" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" name="no_ijazah_a" class="form-control" value="{{$a->no_ijazah_a}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tempat Lahir : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="tempat_lahir" class="form-control" value="{{$a->tempat_lahir_mahasiswa}}" readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor SK Rektor : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nomor_sk_rektor" class="form-control" value="{{$a->nomor_sk_rektor}}" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" name="tanggal_sk" class="form-control" value="{{$a->tanggal_sk}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal Lahir : *')}}</label>
															<div class="col-md-2">
																<input type="text" id="tanggal" name="tgl_lahir" class="form-control" value="{{$a->tanggal_lahir_mahasiswa}}" readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Alamat : *')}}</label>
															<div class="col-md-4">
																<input type="text" id="tanggal" name="alamat_mahasiswa" class="form-control" value="{{$a->alamat_mahasiswa}}" readonly="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Keterangan Foto : *')}}</label>
															<div class="col-md-2">
																<select class="form-control mb-md" name="status_foto" value="{{ old('status_foto') }}" required="">
																	<option value="1">Ada</option>
																	<option value="0">Tidak Ada</option>
																</select>
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal Penyerahan : *')}}</label>
															<div class="col-md-3">
																<input type="text" id="tanggal" name="tgl_terima" class="form-control" value="{{$hariini}}" placeholder="dd-mm-yyyy"  required="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('NIK : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nik" class="form-control" value="{{$a->nik}}">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor HP : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nomor_hp" class="form-control" value="{{$a->nomor_hp_mahasiswa}}" required="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label"></label>
															<div class="col-md-8">
																<button type="submit" class="btn btn-primary btn-lg btn-block fa fa-save"> Simpan </button>
															</div>
														</div>
														<input type="hidden" name="nama_fakultas" value="{{$a->nama_fakultas}}">
														<input type="hidden" name="kode_kabko" value="{{$a->kode_kabko}}">
														<input type="hidden" name="kode_kabko_pokjar" value="{{$a->kode_kabko_pokjar}}">
														<input type="hidden" name="alamat_pokjar" value="{{$a->alamat_pokjar}}">
														<input type="hidden" name="ipk" value="{{$a->ipk_yudisium}}">
														<input type="hidden" name="tgl_kirim_ke_pusat" value="">
														<input type="hidden" name="user_create" value="{{Auth::user()->name}}">
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