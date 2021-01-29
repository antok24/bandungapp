@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Pengiriman Foto Ijazah :.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Pengiriman Foto Ijazah</span></li>
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
						
								<h2 class="panel-title">Cari Data Berdasarkan SK Kelulusan</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('graduation/peragaan/foto/proses-kirim/search')}}" method="POST"  role="cari">
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
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Proses Pengiriman Foto Ijazah Per Yudisium</h2>
							</header>
							<div class="panel-body">
							<form action="{{route('fotoijazah.store')}}" method="POST">
			                {{csrf_field()}}
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">{{__('Tanggal Pengiriman Ke UT Pusat : *')}}</label>
									<div class="col-md-2">
										<input type="text" id="tanggal" name="tgl_kirim_ke_pusat" class="form-control" required="">
									</div>
									<div class="col-md-3">
										<button type="submit" class="btn btn-success">Proses Kirim</button>
									</div>
								</div>
							</div>
						</section>
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Data Foto Ijazah Belum Dikirim ke UT Pusat Per Yudisium</h2>
							</header>
							<div class="panel-body">
								@foreach($belum as $b)
								<a>Jumlah data ditemukan = {{$b->TotalNIM}}</a>
								@endforeach
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th style="background-color:Silver"><center>NIM</center></th>
						            <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
						            <th style="background-color:Silver"><center>Program Studi</center></th>
						            <th style="background-color:Silver"><center>Nomor SK Rektor</center></th>
						            <th style="background-color:Silver"><center>Tanggal Terima UPBJJ</center></th>
						          </tr>
						        </thead>
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td><center>{{$a->nim}}</center></td>
											<td>{{$a->nama_mahasiswa}}</td>
											<td>{{$a->kode_program_studi}}|{{$a->nama_program_studi}}</td>
											<td><center>{{$a->nomor_sk_rektor}}</center></td>
											<td><center>{{$a->tgl_terima}}</center></td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>
							</form>
						</section>
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
				</section>

@endsection