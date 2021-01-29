@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Form Input Ijazah Masuk :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Form Ijazah</span></li>
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
													<form action="{{ url('graduation/ijazah/search')}}" method="POST"  role="cari">
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
						
								<h2 class="panel-title">Data Ijazah Masuk</h2>
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
						            <th style="background-color:Silver"><center>Tanggal Terima Ijazah</center></th>
						            <th style="background-color:Silver"><center>Lokasi Penyimanan</center></th>
						            <!-- <th style="background-color:Silver"><center>Opsi</center></th> -->
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
											<td><center>{{$a->tgl_terima}}</center></td>
											<td><center>{{$a->no_urut_penyimpanan}}|{{$a->penyimpanan}}</center></td>
											<!-- <td class="center">
													<a class="btn btn-sm btn-primary" href="/graduation/ijazah/edit/{{encrypt($a->nim)}}"><i class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Edit"></i></a>
											</td>-->
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
							@if($errors->any())
								<div class="alert alert-danger">
									Whoops Data Gagal disimpan, NIM sudah pernah di simpan
									<ul>
										@foreach($errors as $erorr)
										<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
							@endif
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Form Input Data Ijazah</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{route('ijazah.store')}}" method="POST">
												@foreach($result as $a)
			                						{{csrf_field()}}
			                							<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Urut Penyimpanan :')}}</label>
															<div class="col-md-1">
																<input type="text" name="no_urut_penyimpanan" class="form-control" value="{{$nomorurut}}"readonly="">
															</div>
															<div class="col-md-2">
																<select class="form-control mb-md" name="amplop" value="{{ old('amplop') }}" required="">
																	<option value="AMPLOP1">AMPLOP 1</option>
																	<option value="AMPLOP2">AMPLOP 2</option>
																	<option value="AMPLOP3">AMPLOP 3</option>
																	<option value="AMPLOP4">AMPLOP 4</option>
																	<option value="AMPLOP5">AMPLOP 5</option>
																</select>
																@if ($errors->has('amplop'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('amplop') }}</strong>
								                                    </span>
								                                @endif
															</div>
															<div class="col-md-2">
																<select class="form-control mb-md" name="penyimpanan" value="{{ old('penyimpanan') }}" required="">
																	<option value="LACI1">LACI 1</option>
																	<option value="LACI2">LACI 2</option>
																	<option value="LACI3">LACI 3</option>
																	<option value="LACI4">LACI 4</option>
																</select>
																@if ($errors->has('penyimpanan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('penyimpanan') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
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
																<input type="text" name="" class="form-control" value="{{$a->nama_program_studi}}"readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="" class="form-control" value="{{$a->nama_mahasiswa}}" readonly="">
															</div>

															<label class="col-md-2 control-label" for="inputDefault">{{__('Alamat : *')}}</label>
															<div class="col-md-4">
																<input type="text" name="" class="form-control" value="{{$a->alamat_mahasiswa}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tempat Lahir : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="" class="form-control" value="{{$a->tempat_lahir}}" readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor SK Rektor : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="nomor_sk_rektor" class="form-control" value="{{$a->nomor_sk_rektor}}" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" name="" class="form-control" value="{{$a->tanggal_sk}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal Lahir : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="" class="form-control" value="{{$a->tgl_lahir}}" readonly="">
															</div>

															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal terima Ijazah : *')}}</label>
															<div class="col-md-3">
																<input type="text" id="tanggal" name="tgl_terima" class="form-control" value="{{$hariini}}" placeholder="dd-mm-yyyy"  required="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Ijazah : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="no_ijazah_d" class="form-control" value="{{$a->no_ijazah_d}}" required="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Akta : ')}}</label>
															<div class="col-md-2">
																<input type="text" name="no_ijazah_a" class="form-control" value="{{$a->no_ijazah_a}}">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Keterangan Ijazah : *')}}</label>
															<div class="col-md-2">
																<div class="checkbox-custom checkbox-primary">
																	<input type="checkbox" required name="status_ijazah" value="ada" required="">
																	<label for="status_ijazah">Ijazah</label>
																</div>
							
																<div class="checkbox-custom checkbox-success">
																	<input type="checkbox" required name="status_transkrip_nilai" value="ada">
																	<label for="status_transkrip_nilai">Transkip Nilai</label>
																</div>
															</div>
															<div class="col-md-2">
							
																<div class="checkbox-custom checkbox-warning">
																	<input type="checkbox" name="status_ijazah_akta" value="ada">
																	<label for="status_ijazah_akta">Ijazah Akta</label>
																</div>
																<div class="checkbox-custom checkbox-info">
																	<input type="checkbox" name="status_pendamping_ijazah" value="ada">
																	<label for="status_pendamping_ijazah">Pendamping Ijazah</label>
																</div>
															</div>

															<input type="hidden" name="kode_kabko" value="{{$a->kode_kabko}}">
															<input type="hidden" name="kode_kabko_pokjar" value="{{$a->kode_kabko_pokjar}}">
															<input type="hidden" name="tgl_penyerahan_ke_mhs" value="">
															<input type="hidden" name="proses_penyerahan" value="">
															<input type="hidden" name="user_create" value="{{Auth::user()->name}}">
														</div>
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