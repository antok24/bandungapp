@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Surat Masuk</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Create data</span></li>
								<li><span>Surat Masuk</span></li>
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
						
								<h2 class="panel-title">Form Input Surat Masuk</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
										@if(isset($result))
											<section class="panel">
												<div class="panel-body">
													@foreach($result as $b)
													<form action="{{ url('surat-masuk/sm/edit', encrypt($b->no_agenda))}}" enctype="multipart/form-data" method="POST">
			                						{{csrf_field()}}
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Agenda : *')}}</label>
															<div class="col-md-3">
																<input type="text" name="no_agenda" class="form-control{{ $errors->has('no_agenda') ? ' is-invalid' : '' }}" value="{{$b->no_agenda}}" readonly="">
																@if ($errors->has('no_agenda'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_agenda') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="no_surat" class="form-control{{ $errors->has('no_surat') ? ' is-invalid' : '' }}" value="{{$b->no_surat}}" required="">
																@if ($errors->has('no_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Surat Dari : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="asal_surat" class="form-control{{ $errors->has('asal_surat') ? ' is-invalid' : '' }}" value="{{$b->asal_surat}}" required="">
																@if ($errors->has('asal_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('asal_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tangal Surat : *')}}</label>
															<div class="col-md-2">
																<div class="input-group input-group-icon">
																	<input type="text" id="tanggal" name="tgl_surat" class="form-control{{ $errors->has('tgl_surat') ? ' is-invalid' : '' }}" placeholder="dd/mm/yyyy" value="{{$b->tgl_surat}}"  required="">
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tangal Agenda : *')}}</label>
															<div class="col-md-2">
																<div class="input-group input-group-icon">
																	<input type="text" id="tanggalagenda" name="tgl_agenda" class="form-control{{ $errors->has('tgl_agenda') ? ' is-invalid' : '' }}" placeholder="dd/mm/yyyy" value="{{$b->tgl_agenda}}"  required="">
																	@if ($errors->has('tgl_agenda'))
									                                    <span class="invalid-feedback" role="alert">
									                                        <strong>{{ $errors->first('tgl_agenda') }}</strong>
									                                    </span>
									                                @endif
									                                <span class="input-group-addon">
																		<span class="icon"><i class="fa fa-calendar"></i></span>
																	</span>
									                            </div>
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Perihal Surat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="perihal" class="form-control{{ $errors->has('perihal') ? ' is-invalid' : '' }}" value="{{$b->perihal}}" required="">
																@if ($errors->has('perihal'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('perihal') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Sifat Surat : *')}}</label>
															<div class="col-md-6">
																<select class="form-control mb-md" name="sifat_surat" required="">
																	<option value="{{$b->sifat_surat}}">{{$b->sifat_surat}}</option>
																	<option value="Biasa">Biasa</option>
																	<option value="Penting">Penting</option>
																	<option value="Rahasia">Rahasia</option>
																	<option value="Segera">Segera</option>
																</select>
																@if ($errors->has('sifat_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('sifat_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('File Surat : *')}}</label>
															<div class="col-md-6">
																<input type="file" name="file_sm" class="form-control{{ $errors->has('file_sm') ? ' is-invalid' : '' }}" value="{{$b->file_sm}}">
																<embed src="{{ url('file/surat_masuk/'.$b->file_sm) }}" type="application/pdf" width="100%" height="600px"/>
																@if ($errors->has('file_sm'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('file_sm') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														<input type="hidden" name="status" value="0">
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
										@else(isset($hasil))
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('surat-masuk/sm/simpan')}}" enctype="multipart/form-data" method="POST">
			                						{{csrf_field()}}
														<input type="hidden" name="no_agenda" class="form-control{{ $errors->has('no_agenda') ? ' is-invalid' : '' }}" value="{{ $nomorurut}}" readonly="">

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Nomor Surat : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="no_surat" class="form-control{{ $errors->has('no_surat') ? ' is-invalid' : '' }}" value="{{ old('no_surat') }}" required="">
																@if ($errors->has('no_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('no_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Surat Dari : *')}}</label>
															<div class="col-md-6">
																<input type="text" name="asal_surat" class="form-control{{ $errors->has('asal_surat') ? ' is-invalid' : '' }}" value="{{ old('asal_surat') }}" required="">
																@if ($errors->has('asal_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('asal_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>

														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tangal Surat : *')}}</label>
															<div class="col-md-2">
																<div class="input-group input-group-icon">
																	<input type="text" id="tanggal" name="tgl_surat" class="form-control{{ $errors->has('tgl_surat') ? ' is-invalid' : '' }}"  required="">
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Tangal Agenda : *')}}</label>
															<div class="col-md-2">
																<div class="input-group input-group-icon">
																	<input type="text" id="tanggalagenda" name="tgl_agenda" class="form-control{{ $errors->has('tgl_agenda') ? ' is-invalid' : '' }}" value="{{$tanggal}}"  required="">
																	@if ($errors->has('tgl_agenda'))
									                                    <span class="invalid-feedback" role="alert">
									                                        <strong>{{ $errors->first('tgl_agenda') }}</strong>
									                                    </span>
									                                @endif
									                                <span class="input-group-addon">
																		<span class="icon"><i class="fa fa-calendar"></i></span>
																	</span>
									                            </div>
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
															<label class="col-md-3 control-label" for="inputDefault">{{__('Sifat Surat : *')}}</label>
															<div class="col-md-6">
																<select class="form-control mb-md" name="sifat_surat" value="{{ old('sifat_surat') }}" required="">
																	<option value="Biasa">Biasa</option>
																	<option value="Penting">Penting</option>
																	<option value="Rahasia">Rahasia</option>
																	<option value="Segera">Segera</option>
																</select>
																@if ($errors->has('sifat_surat'))
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $errors->first('sifat_surat') }}</strong>
								                                    </span>
								                                @endif
															</div>
														</div>
														
														<div class="form-group">
															<label class="col-md-3 control-label" for="inputDefault">{{__('File Surat : *')}}</label>
															<div class="col-md-6">
																<input type="file" name="file_sm" id="file" onchange="return validasiFile()" required="" />
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
														<input type="hidden" name="status" value="0">
														<input type="hidden" name="user_create" value="{{Auth::user()->email}}">
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
										@endif
									</div>
								</div>
								</table>
							</div>
						</section>

						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Surat Masuk</h2>
							</header>
							<div class="panel-body">
                                <div id="datatable-default_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-none dataTable no-footer" id="datatable-default" role="grid" aria-describedby="datatable-default_info">
                                    <thead>
                                        <tr role="row">
								            <th style="background-color:#66ccff" width="10%"><center>No Agenda</center></th>
								            <th style="background-color:#66ccff" width="20%"><center>No Surat</center></th>
								            <th style="background-color:#66ccff" width="25%"><center>Asal Surat</center></th>
								            <th style="background-color:#66ccff" width="25%"><center>Perihat</center></th>
								            <th style="background-color:#66ccff" width="5%"><center>Tanggal Surat</center></th>
								            <th style="background-color:#66ccff" width="12%"><center>Opsi</center></th>
								        </tr>
						        	</thead>
									<tbody>
										@foreach ($hasil as $a)
										 <tr role="row" class="odd">
											<td><p align="center">{{$a->no_agenda}}</p></td>
											<td>{{$a->no_surat}}</td>
											<td>{{$a->asal_surat}}</td>
											<td>{{$a->perihal}}</td>
											<td>{{$a->tgl_surat}}</td>
											<td class="center">
												<a class="btn btn-sm btn-danger" href="/surat-masuk/sm/edit/{{encrypt($a->no_agenda)}}"><i class="fa fa-edit" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Edit Surat"></i></a>

												<a href="{{ url('file/surat_masuk/'.$a->file_sm) }}" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Lihat Berkas"></i>
                                            	</a>

                                            	<a class="btn btn-sm btn-primary" target="_blank" href="/surat-masuk/disposisi/print/{{encrypt($a->no_agenda)}}"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Disposisi"></i></a>
                                            	@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2)
                                            	<a class="btn btn-sm btn-warning" href="/surat-masuk/sm/delete/{{encrypt($a->no_agenda)}}" onclick="return confirm('Periksa terlebih dahulu sebelum menghapus data ini, Anda yakin ?')"><i class="fa fa-trash" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Delete"></i></a>
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