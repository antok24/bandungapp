@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Surat Keluar</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Create data</span></li>
								<li><span>Surat Keluar</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					@include('layouts.message')

					<!-- start: page -->
					@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Form Update Surat Keluar</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													@foreach($result as $a)
													<form action="{{ url('surat-keluar/sk/edit', encrypt($a->no_surat))}}" enctype="multipart/form-data" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="no_surat" class="form-control{{ $errors->has('no1') ? ' is-invalid' : '' }}" value="{{$a->no_surat}}" required="" autofocus="">
																@if ($errors->has('no1'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no1') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Ditujukan Kepada : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tujuan_kepada" class="form-control{{ $errors->has('tujuan_kepada') ? ' is-invalid' : '' }}" value="{{ $a->tujuan_kepada }}" required="">
																@if ($errors->has('tujuan_kepada'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tujuan_kepada') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Alamat Tujuan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tujuan_alamat" class="form-control{{ $errors->has('tujuan_alamat') ? ' is-invalid' : '' }}" value="{{ $a->tujuan_alamat }}" required="">
																@if ($errors->has('tujuan_alamat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tujuan_alamat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Perihal Surat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="perihal" class="form-control{{ $errors->has('perihal') ? ' is-invalid' : '' }}" value="{{ $a->perihal}}" required="">
																@if ($errors->has('perihal'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('perihal') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Lampiran : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="lampiran" class="form-control{{ $errors->has('lampiran') ? ' is-invalid' : '' }}" value="{{ $a->lampiran }}" required="">
																@if ($errors->has('lampiran'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('lampiran') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Surat : *')}}</label>
															<div class="col-md-2">
																<div class="input-group input-group-icon">
																<input type="text" id="tanggal" name="tgl_surat" class="form-control{{ $errors->has('tgl_surat') ? ' is-invalid' : '' }}" value="{{ $a->tgl_surat }}" required="">
																@if ($errors->has('tgl_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tgl_surat') }}</strong>
								                                    </span>
								                                @endif
								                                <span class="input-group-addon">
																	<span class="icon"><i class="fa fa-calendar"></i></span>
																</span>
																</div>
															</div>
															<font color="red">Tanggal/Bulan/Tahun</font>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('File Surat : *')}}</label>
															<div class="col-md-6">
																<input type="file" name="file_sk" class="form-control{{ $errors->has('file_sk') ? ' is-invalid' : '' }}" value="{{ $a->file_sk }}">
																<embed src="{{ url('file/surat_keluar/'.$a->file_sk) }}" type="application/pdf" width="100%" height="600px"/>
																@if ($errors->has('file_sk'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('file_sk') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<input type="hidden" name="user_create" value="{{Auth::user()->email}}">
														<div>
															<div class="row">
																<div class="col-sm-9 col-sm-offset-3">
																	&nbsp; &nbsp;<button type="submit" class="btn btn-primary">Simpan</button>
																</div>
															</div>
														</div>
													</form>
												@endforeach
												</div>
											</section>
									</div>
								</div>
							</div>
						</section>
						@else
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Form Input Surat Keluar</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('surat-keluar/sk/simpan')}}" enctype="multipart/form-data" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-1">
																<input type="text" name="no1" class="form-control{{ $errors->has('no1') ? ' is-invalid' : '' }}" value="{{ old('no1') }}" maxlength="9" required="" autofocus="">
																@if ($errors->has('no1'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no1') }}</strong>
								                                    </span>
								                                @endif
															</div>
															<div class="col-md-2">
																<input type="text" name="no2" class="form-control{{ $errors->has('no2') ? ' is-invalid' : '' }}" value="UN31.UPBJJ.15" readonly="">
															</div>
															<div class="col-md-2">
																<input type="text" name="no3" class="form-control{{ $errors->has('no3') ? ' is-invalid' : '' }}" value="{{ old('no3') }}" placeholder="PP.00.00.01" required="">
																@if ($errors->has('no3'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no3') }}</strong>
								                                    </span>
								                                @endif
															</div>
															<div class="col-md-1">
																<input type="text" name="no4" class="form-control{{ $errors->has('no4') ? ' is-invalid' : '' }}" value="{{ date('Y')}}" readonly="">
															</div>
															<div class="col-md-1">
																<a href="" class="btn btn-warning btn-xs"> Lihat Referensi</a>
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Ditujukan Kepada : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tujuan_kepada" class="form-control{{ $errors->has('tujuan_kepada') ? ' is-invalid' : '' }}" value="{{ old('tujuan_kepada') }}" required="">
																@if ($errors->has('tujuan_kepada'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tujuan_kepada') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Alamat Tujuan : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="tujuan_alamat" class="form-control{{ $errors->has('tujuan_alamat') ? ' is-invalid' : '' }}" value="{{ old('tujuan_alamat') }}" required="">
																@if ($errors->has('tujuan_alamat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tujuan_alamat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Perihal Surat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="perihal" class="form-control{{ $errors->has('perihal') ? ' is-invalid' : '' }}" value="{{ old('perihal') }}" required="">
																@if ($errors->has('perihal'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('perihal') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Lampiran : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="lampiran" class="form-control{{ $errors->has('lampiran') ? ' is-invalid' : '' }}" value="{{ old('lampiran') }}" required="">
																@if ($errors->has('lampiran'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('lampiran') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Surat : *')}}</label>
															<div class="col-md-2">
																<div class="input-group input-group-icon">
																<input type="text" id="tanggal" name="tgl_surat" class="form-control{{ $errors->has('tgl_surat') ? ' is-invalid' : '' }}" value="{{ old('tgl_surat') }}" required="">
																@if ($errors->has('tgl_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('tgl_surat') }}</strong>
								                                    </span>
								                                @endif
								                                <span class="input-group-addon">
																	<span class="icon"><i class="fa fa-calendar"></i></span>
																</span>
																</div>
															</div>
															<font color="red">Tanggal/Bulan/Tahun</font>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('File Surat : *')}}</label>
															<div class="col-md-6">
																<input type="file" name="file_sk" id="file" onchange="return validasiFile()" required="" />
																<div id="pratinjauGambar"></div>
																<script>
																function validasiFile(){
																    var inputFile = document.getElementById('file');
																    var pathFile = inputFile.value;
																    var ekstensiOk = /(\.pdf)$/i;
																    if(inputFile.files[0].size > 2000000){
																    	alert('Ukuran File yang anda Upload terlalu besar, Maximal ukuran 2 MB... Anda tidak diperbolehkan mengupload file dengan ukuran lebih besar dari yang sudah ditentukan. Harap kecilkan ukuran file / COMPRESS terlebih dahulu file anda melalui https://smallpdf.com/compress-pdf');
																    	inputFile.value='';
																    }				
																    if(!ekstensiOk.exec(pathFile)){
																        alert('Silakan upload file yang memiliki ekstensi .PDF');
																        inputFile.value = '';
																        return false;
																    }else{
																        //Pratinjau gambar
																        if (inputFile.files && inputFile.files[0]) {
																            var reader = new FileReader();
																            reader.onload = function(e) {
																                document.getElementById('pratinjauGambar').innerHTML = '<embed src="'+e.target.result+'" style="width:600px"/>';
																            };
																            reader.readAsDataURL(inputFile.files[0]);
																        }
																    }
																}
																</script>
															</div>
														</div>

														<!-- <div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('File Surat : *')}}</label>
															<div class="col-md-6">
																<input type="file" name="file_sk" class="form-control{{ $errors->has('file_sk') ? ' is-invalid' : '' }}" value="{{ old('file_sk') }}" required="">
																@if ($errors->has('file_sk'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('file_sk') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div> -->
														<input type="hidden" name="user_create" value="{{Auth::user()->name}}">
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
							</div>
						</section>
						@endif
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Surat Keluar</h2>
							</header>
							<div class="panel-body">
                                <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                                    <thead>
                                        <tr role="row">
								            <th style="background-color:#66ccff" width="10%"><center>Nomor Surat</center></th>
								            <th style="background-color:#66ccff" width="20%"><center>Tujuan</center></th>
								            <th style="background-color:#66ccff" width="25%"><center>Alamat</center></th>
								            <th style="background-color:#66ccff" width="25%"><center>Perihal</center></th>
								            <th style="background-color:#66ccff" width="7%"><center>Tanggal</center></th>
								            <th style="background-color:#66ccff" width="5%"><center>Lampiran</center></th>
								            <th style="background-color:#66ccff" width="12%"><center>Opsi</center></th>
								        </tr>
						        	</thead>
									<tbody>
										@foreach ($hasil as $a)
										<tr role="row" class="odd">
											<td><p align="center">{{$a->no_surat}}</p></td>
											<td>{{$a->tujuan_kepada}}</td>
											<td>{{$a->tujuan_alamat}}</td>
											<td>{{$a->perihal}}</td>
											<td>{{$a->tgl_surat}}</td>
											<td>{{$a->lampiran}}</td>
											<td class="center">
												<a class="btn btn-sm btn-danger" href="/surat-keluar/sk/edit/{{encrypt($a->no_surat)}}"><i class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Edit Surat"></i></a>

												<a href="{{ url('file/surat_keluar/'.$a->file_sk) }}" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Lihat Berkas"></i>
                                            	</a>
                                            	@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2)
                                            	<a class="btn btn-sm btn-warning" href="/surat-keluar/sk/delete/{{encrypt($a->no_surat)}}" onclick="return confirm('Periksa terlebih dahulu sebelum menghapus data ini, Anda yakin ?')"><i class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i></a>
                                            	@endif
											</td>											
										</tr>
										@endforeach
									</tbody>
									</table>
									</div>
								</div>
							</div>
						</section>
				</section>
@endsection