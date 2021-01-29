@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Cari Data Surat Keluar</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Surat Keluar</span></li>
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
						
								<h2 class="panel-title">Cari Data Surat Keluar</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('surat-keluar/sk/cari')}}" method="POST"  role="cari">
			                						{{csrf_field()}}
														<div class="form-group">
													        <div class="col-md-6">
													            <input type="text" name="cari" class="form-control{{ $errors->has('cari') ? ' is-invalid' : '' }}" value="{{ old('cari') }}" required="" autofocus="" placeholder="Masukan Nomor surat / Perihal / Tujuan surat / Alamat Tujuan ....">
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
						@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Hasil Pencarian</h2>
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
								            <th style="background-color:#66ccff" width="5%"><center>Tanggal</center></th>
								            <th style="background-color:#66ccff" width="12%"><center>Opsi</center></th>
								        </tr>
						        	</thead>
									<tbody>
										@foreach ($result as $a)
										<tr role="row" class="odd">
											<td>{{$a->no_surat}}</td>
											<td>{{$a->tujuan_kepada}}</td>
											<td>{{$a->tujuan_alamat}}</td>
											<td>{{$a->perihal}}</td>
											<td>{{$a->tgl_surat}}</td>
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
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
				</section>
@endsection