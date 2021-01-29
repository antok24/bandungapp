@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: SK UPI :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>sk UPI</span></li>
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
						
								<h2 class="panel-title">Form Input sk UPI</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{route('sk-upi.store')}}" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Nomor SK : *')}}</label>
															<div class="col-md-4">
																<input type="text" name="nomor_sk_upi" class="form-control" value="" required="">
															</div>
														</div>

														<div class="form-group">

															<label class="col-md-2 control-label" for="inputDefault">{{__('Tanggal Kegiatan*')}}</label>
															<div class="col-md-2">
																<input type="text" id="tanggal" name="tgl_kegiatan" class="form-control" value="" required="">
															</div>

															<label class="col-md-2 control-label" for="inputDefault">{{__('Lokasi : *')}}</label>
															<div class="col-md-5">
																<input type="text" name="lokasi" class="form-control" value="" required="">
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-2 control-label" for="inputDefault">{{__('Prediksi Jumlah Peserta : *')}}</label>
															<div class="col-md-2">
																<input type="text" name="jumlah_peserta" class="form-control" value="" required="">
															</div>
															<label class="col-md-2 control-label" for="inputDefault">{{__('Status SK UPI : *')}}</label>
															<div class="col-md-2">
																<select class="form-control mb-md" name="status_sk" value="{{ old('status_sk') }}" required="">
																	<option value="1">1 | Aktif</option>
																	<option value="0">0 | Tidak Aktif</option>
																</select>
																@if ($errors->has('status_sk'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('status_sk') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label"></label>
															<div class="col-md-8">
																<button type="submit" class="btn btn-primary btn-lg btn-block fa fa-save"> Simpan </button>
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
											<th style="background-color:Silver"><center>Nomor SK UPI</center></th>
											<th style="background-color:Silver"><center>Tanggal Kegiatan</center></th>
											<th style="background-color:Silver"><center>Lokasi</center></th>
											<th style="background-color:Silver"><center>Prediksi Jml Peserta</center></th>
											<th style="background-color:Silver"><center>Status SK</center></th>
										</tr>
									</thead>
									@foreach ($tampil as $a)
									<tbody>
										<tr>
											<td><center>{{$a->nomor_sk_upi}}</center></td>
											<td>{{$a->tgl_kegiatan}}</td>
											<td>{{$a->lokasi}}</td>
											<td>{{$a->jumlah_peserta}}</td>
											<td><center>{{$a->status_sk}}</center></td>
										</tr>
									</tbody>
									@endforeach
								</table>
								{{ $tampil->links()}}
							</div>
						</section>
						@elseif(isset($message))
						<p>{{ $message }}</p>
						@endif
				</section>
@endsection