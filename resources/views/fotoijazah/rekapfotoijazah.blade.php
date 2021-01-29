@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Rekap Data Penyerahan Foto Ijazah :.</h2>
					
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
						
								<h2 class="panel-title">Cari Data Berdasarkan SK Yudisium</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('graduation/fotoijazah/rekappenyerahanfotox')}}" method="POST"  role="cari">
			                						{{csrf_field()}}
														<div class="form-group">
													        <div class="col-md-3">
														        <select class="form-control" name="cari">
															        @foreach($sk as $nomor)
															            <option value="{{ $nomor->nomor_sk_rektor }}" {{ $nomor->nomor_sk_rektor ? 'selected="selected"' : '' }}>{{ $nomor->nomor_sk_rektor }}</option>
															        @endforeach
															</select>
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
						<div class="row">
						  <div class="col-lg-5">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
							
									<h2 class="panel-title">Data Total Penyerahan Foto Ijazah / SK Rektor</h2>
								</header>
								<div class="panel-body">
									<table class="table table-bordered table-striped table-condensed mb-none">
							        <thead>
							          <tr>
							            <th style="background-color:Silver"><center>Nomor SK Rektor</center></th>
							            <th style="background-color:Silver"><center>Total</center></th>
							          </tr>
							        </thead>
										@foreach ($result as $a)
										<tbody>
											<tr>
												<td><center>{{$a->nomor_sk_rektor}}</center></td>
												<td><center>{{$a->TotalNIM}} Mahasiswa</center></td>
											</tr>
										</tbody>
										@endforeach
									</table>
								</div>
							</section>
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
							
									<h2 class="panel-title">Data Total Foto Dikirim Ke Pusat / SK Rektor</h2>
								</header>
								<div class="panel-body">
									<table class="table table-bordered table-striped table-condensed mb-none">
							        <thead>
							          <tr>
							            <th style="background-color:Silver"><center>Nomor SK Rektor</center></th>
							            <th style="background-color:Silver"><center>Total</center></th>
							          </tr>
							        </thead>
										@foreach ($terkirim as $a)
										<tbody>
											<tr>
												<td><center>{{$a->nomor_sk_rektor}}</center></td>
												<td><center>{{$a->TotalNIM}} Mahasiswa</center></td>
											</tr>
										</tbody>
										@endforeach
									</table>
								</div>
							</section>
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
							
									<h2 class="panel-title">Data Foto Belum Dikirim Ke Pusat / SK Rektor</h2>
								</header>
								<div class="panel-body">
									<table class="table table-bordered table-striped table-condensed mb-none">
							        <thead>
							          <tr>
							            <th style="background-color:Silver"><center>Nomor SK Rektor</center></th>
							            <th style="background-color:Silver"><center>Total</center></th>
							          </tr>
							        </thead>
										@foreach ($belum as $a)
										<tbody>
											<tr>
												<td><center>{{$a->nomor_sk_rektor}}</center></td>
												<td><center>{{$a->TotalNIM}} Mahasiswa</center></td>
											</tr>
										</tbody>
										@endforeach
									</table>
								</div>
							</section>
						  </div>
						  <div class="col-lg-7">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
									</div>
							
									<h2 class="panel-title">List Nama Penyerahan Foto</h2>
								</header>
								<div class="panel-body">
									<table class="table table-bordered table-striped table-condensed mb-none">
							        <thead>
							          <tr>
							            <th style="background-color:Silver"><center>NIM</center></th>
							            <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
							            <th style="background-color:Silver"><center>Tanggal Penyerahan</center></th>
							          </tr>
							        </thead>
										@foreach ($results as $b)
										<tbody>
											<tr>
												<td><center>{{$b->nim}}</center></td>
												<td><center>{{$b->nama_mahasiswa}}</center></td>
												<td><center>{{$b->tgl_terima}}</center></td>
											</tr>
										</tbody>
										@endforeach
									</table>
								</div>
							</section>
						  </div>
						</div>
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
				</section>
@endsection