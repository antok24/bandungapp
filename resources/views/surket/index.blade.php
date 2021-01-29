@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Surat Keterangan Aktif :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Surat Keterangan Aktif</span></li>
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
						
								<h2 class="panel-title">Cari Data Mahasiswa</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('/surket-mahasiswa/search')}}" method="POST"  role="cari">
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
						
								<h2 class="panel-title">Cetak Surat Keterangan Aktif</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th style="background-color:Silver"><center>No Surat</center></th>
						            <th style="background-color:Silver"><center>NIM</center></th>
						            <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
						            <th style="background-color:Silver"><center>Tempat/Tgl Lahir</center></th>
						            <th style="background-color:Silver"><center>Alamat</center></th>
						            <th style="background-color:Silver"><center>Program Studi</center></th>
						            <th style="background-color:Silver"><center>MR Awal</center></th>
						            <th style="background-color:Silver"><center>MR Akhir</center></th>
						            <th style="background-color:Silver"><center>Opsi</center></th>
						          </tr>
						        </thead>
									@foreach ($tampil as $a)
									<tbody>
										<tr>
											<td>{{$a->no_surat}}</td>
											<td>{{$a->nim}}</td>
											<td>{{$a->nama_mahasiswa}}</td>
											<td>{{$a->tempat_lahir_mahasiswa}},{{$a->tgl_lahir}}</td>
											<td>{{$a->alamat_mahasiswa}}</td>
											<td>{{$a->nama_program_studi}}</td>
											<td>{{$a->mr_awal}}</td>
											<td>{{$a->mr_akhir}}</td>
											<td class="center">
													<a class="btn btn-sm btn-warning" target="_blank" href="/surket-mahasiswa/print/{{encrypt($a->no_surat)}}"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Surket"></i></a>
													<a class="btn btn-sm btn-primary" href="/surket-mahasiswa/edit/{{encrypt($a->no_surat)}}"><i class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Edit Surket"></i></a>
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
						
								<h2 class="panel-title">Data Mahasiswa</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{url('surket-mahasiswa/surket/simpan')}}" method="POST">
												@foreach($result as $a)
			                						{{csrf_field()}}
			                							<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Pilih TTD : *')}}</label>
															<div class="col-md-4">
																<select class="form-control mb-md" name="nip_ttd" value="{{ old('nip_ttd') }}" required="">
																	@foreach($pejabat as $b)
																		<option value="{{$b->nip}}">{{$b->nama_pegawai}}</option>
																		@endforeach
																</select>
																@if ($errors->has('no_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
															<div class="col-md-3">
																<input type="hidden" name="kode_surat" class="form-control" value="12345" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-4">
																<input type="text" name="no_surat" class="form-control" value="{{ $nomorurut}}">
															</div>
															<div class="col-md-3">
																<input type="hidden" name="kode_surat" class="form-control" value="12345">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="nim" class="form-control" value="{{$a->nim}}"readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_mahasiswa" class="form-control" value="{{$a->nama_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tempat Lahir : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tempat_lahir_mahasiswa" class="form-control" value="{{$a->tempat_lahir_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Lahir : *')}}</label>
															<div class="col-md-3">
																<input type="text" id="tanggal" name="tgl_lahir" class="form-control" value="{{$a->tanggal_lahir_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Program Studi : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_program_studi" class="form-control" value="{{$a->nama_program_studi}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Fakultas : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="nama_fakultas" class="form-control" value="{{$a->nama_fakultas}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Alamat Mahasiswa : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="alamat_mahasiswa" class="form-control" value="{{$a->alamat_mahasiswa}}" required="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('MR Awal : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="mr_awal" class="form-control" value="{{$a->masa_registrasi_awal}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('MR Akhir : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="mr_akhir" class="form-control" value="{{$a->masa}}" required="">
								                                <input type="hidden" name="user_create" value="{{Auth::user()->name}}">
															</div>
														</div>
													@endforeach
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
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
				</section>

@endsection