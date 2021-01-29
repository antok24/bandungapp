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
					
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Form Keterangan Ijazah Mahasiswa</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
											@foreach($results as $a)
												<div class="panel-body">
													<form action="{{url('/surket-ijazah/editx', encrypt($a->nim))}}" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-7">
																<input type="text" class="form-control" value="{{$a->no_surat}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Kepada : *')}}</label>
															<div class="col-md-7">
																<input type="text" name="nama_instansi" class="form-control" placeholder="*Contoh: Kepada Badan Kepegawawain Daerah" value="{{$a->nama_instansi}}"required="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Kab/Kota Instansi : *')}}</label>
															<div class="col-md-7">
																<input type="text" name="kota_instansi" class="form-control" value="{{$a->kota_instansi}}" required="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('NIM : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="nim" class="form-control" value="{{$a->nim}}"readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Program Studi : *')}}</label>
															<div class="col-md-1">
																<input type="text" name="kode_program_studi" class="form-control" value="{{$a->kode_program_studi}}" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" name="nama_program_studi" class="form-control" value="{{$a->nama_program_studi}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nama Mahasiswa : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="nama_mahasiswa" class="form-control" value="{{$a->nama_mahasiswa}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Fakultas : *')}}</label>
															<div class="col-md-1">
																<input type="text" name="singkatan" class="form-control" value="{{$a->singkatan}}" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" name="nama_fakultas" class="form-control" value="{{$a->nama_fakultas}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Tingkat Pendidikan : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="nama_pendidikan_akhir" class="form-control" value="{{$a->nama_pendidikan_akhir}}">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('SKS Yudisium : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="sks_yudisium" class="form-control" value="{{$a->sks_yudisium}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor Ijazah : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="no_ijazah_d" class="form-control" value="{{$a->no_ijazah_d}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Nomor Akta : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="no_ijazah_a" class="form-control" value="{{$a->no_ijazah_a}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor SK Rektor : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="nomor_sk_rektor" class="form-control" value="{{$a->nomor_sk_rektor}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('Tanggal SK : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="tanggal_sk" class="form-control" value="{{$a->tanggal_sk}}" readonly="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('MR Awal : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="masa_registrasi_awal" class="form-control" value="{{$a->masa_registrasi_awal}}" readonly="">
															</div>
															<label class="col-md-1 control-label" for="inputDefault">{{__('MR Akhir : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="masa_registrasi_akhir" class="form-control" value="{{$a->masa_registrasi_akhir}}" readonly="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label"></label>
															<div class="col-md-3">
																<button type="submit" class="btn btn-primary btn-lg">Simpan</button>
															</div>
														</div>
													</form>
												</div>
											@endforeach
											</section>
									</div>
								</div>
								</table>
							</div>
						</section>
				</section>
@endsection