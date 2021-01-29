@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Form Pengambilan Ijazah :.</h2>
					
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
													<form action="{{ url('graduation/take-ijazah/search')}}" method="POST"  role="cari">
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
						
								<h2 class="panel-title">Data Penyerahan Ijazah</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th style="background-color:Silver"><center>NIM</center></th>
						            <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
						            <th style="background-color:Silver"><center>Tempat/Tgl Lahir</center></th>
						            <th style="background-color:Silver"><center>Program Studi</center></th>
						            <th style="background-color:Silver"><center>Nomor Ijazah</center></th>
						            <th style="background-color:Silver"><center>Nomor Akta</center></th>
						            <th style="background-color:Silver"><center>Tanggal Terima Ijazah</center></th>
						            <th style="background-color:Silver"><center>Proses Penyerahan</center></th>
						            <th style="background-color:Silver"><center>Tanggal Penyerahan</center></th>
						            <th style="background-color:Silver"><center>Penerima</center></th>
						            <th style="background-color:Silver"><center>User</center></th>
						            <th style="background-color:Silver"><center>Surat Kuasa</center></th>
						          </tr>
						        </thead>
									@foreach ($tampil as $a)
									<tbody>
										<tr>
											<td><center>{{$a->nim}}</center></td>
											<td>{{$a->nama_mahasiswa}}</td>
											<td>{{$a->tempat_lahir}},{{$a->tgl_lahir}}</td>
											<td>{{$a->kode_program_studi}}|{{$a->nama_program_studi}}</td>
											<td><center>{{$a->no_ijazah_d}}</center></td>
											<td><center>{{$a->no_ijazah_a}}</center></td>
											<td><center>{{$a->tgl_terima}}</center></td>
											<td><center>{{$a->proses_penyerahan}}</center></td>
											<td><center>{{$a->tgl_penyerahan_ke_mhs}}</center></td>
											<td><center>{{$a->pengambil}}</center></td>
											<td><center>{{$a->menyerahkan}}</center></td>
											<td><center>{{$a->srt_kuasa}}</center></td>
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
						
								<h2 class="panel-title">Form Pengambilan Ijazah</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
												@foreach($result as $a)
													<form action="{{url('/graduation/take-ijazah/update',$a->nim)}}" method="POST">
			                						{{csrf_field()}}
			                							<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Urut Penyimpanan :')}}</label>
															<div class="col-md-3">
																<input type="text" name="no_urut_penyimpanan" class="form-control" value="{{$a->no_urut_penyimpanan}}|{{$a->amplop}}|{{$a->penyimpanan}}"readonly="">
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
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal Lahir : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="" class="form-control" value="{{$a->tgl_lahir}}" readonly="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Ijazah : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="no_ijazah_d" class="form-control" value="{{$a->no_ijazah_d}}" readonly="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Akta : ')}}</label>
															<div class="col-md-2">
																<input type="text" name="no_ijazah_a" class="form-control" value="{{$a->no_ijazah_a}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Proses Penyerahan Ijazah : *')}}</label>
															<div class="col-md-2">
																<select class="form-control mb-md" name="proses_penyerahan" required="">
																	<option value="L">Langsung</option>
																	<option value="U">UPI</option>
																	<option value="W">Wisuda</option>
																</select>
																@if ($errors->has('proses_penyerahan'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('proses_penyerahan') }}</strong>
								                                    </span>
								                                @endif
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('TGL Pengambilan : ')}}</label>
															<div class="col-md-2">
																<input type="text" id="tanggal" name="tgl_penyerahan_ke_mhs" class="form-control" value="{{$hariini}}" required="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nama Pengambil : *')}}</label>
															<div class="col-md-5">
																<input type="text" name="pengambil" class="form-control" value="{{$a->nama_mahasiswa}}" required="">
																<div class="checkbox-custom checkbox-warning">
																	<input type="checkbox" name="srt_kuasa" value="ada">
																	<label for="">Centang Jika Pengambilan Ijazah Menggunakan Surat Kuasa dan Isikan Nama Pengambil</label>
																</div>
															</div>
														</div>
														<input type="hidden" name="menyerahkan" value="{{Auth::user()->name}}">
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