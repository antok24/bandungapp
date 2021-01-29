@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>.: Data Ijazah di UPBJJ:.</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>cari data</span></li>
								<li><span>Ijazah</span></li>
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
						
								<h2 class="panel-title">Cari Data Ijazah</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
								<div class="row">
									<div class="col-lg-12">
											<section class="panel">
												<div class="panel-body">
													<form action="{{ url('graduation/ijazah/peragaan')}}" method="POST"  role="cari">
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
						@if(isset($result))
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Buku Besar Ijazah UPBJJ-UT Bandung</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th rowspan="2" style="background-color:Silver"><center>NIM</center></th>
						            <th rowspan="2" style="background-color:Silver"><center>Nama Mahasiswa</center></th>
						            <th rowspan="2" style="background-color:Silver"><center>Tempat,Tgl Lahir</center></th>
						            <th rowspan="2" style="background-color:Silver"><center>Program Studi</center></th>
						            <th rowspan="2" width="10px" style="background-color:Silver"><center>Keterangan Foto</center></th>
						            <th colspan="2" style="background-color:Silver"><center>Nomor Ijazah</center></th>
						            <th colspan="4" style="background-color:Silver"><center>Keterangan Ijazah</center></th>
						            <th colspan="4" style="background-color:Silver"><center>Keterangan Pengambilan</center></th>
						          </tr>
						          <tr>
						          		<th width="20px" style="background-color:Silver"><center>Ijazah</center></th>
						          		<th width="20px" style="background-color:Silver"><center>Akta</center></th>
						          		<th width="10px" style="background-color:Silver">Ijazah</th>
						          		<th width="10px" style="background-color:Silver">Transkrip Nilai</th>
						          		<th width="10px" style="background-color:Silver">Ijazah Akta</th>
						          		<th width="10px" style="background-color:Silver">Pendamping Ijazah</th>
						          		<th width="10px" style="background-color:Silver">Proses Ambil</th>
						          		<th width="10px" style="background-color:Silver">Nama Pengambil</th>
						          		<th width="10px" style="background-color:Silver">Tanggal</th>
						          		<th width="10px" style="background-color:Silver">Surat Kuasa</th>
						          </tr>
						        </thead>
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td><center>{{$a->nim}}</center></td>
											<td><center>{{$a->nama_mahasiswa}}</center></td>
											<td><center>{{$a->tempat_lahir}},{{$a->tgl_lahir}}</center></td>
											<td><center>{{$a->kode_program_studi}}|{{$a->nama_program_studi}}</center></td>
											<td><center>{{$a->status}}</center></td>
											<td><center>{{$a->no_ijazah_d}}</center></td>
											<td><center>{{$a->no_ijazah_a}}</center></td>
											<td><center>{{$a->status_ijazah}}</center></td>
											<td><center>{{$a->status_transkrip_nilai}}</center></td>
											<td><center>{{$a->status_ijazah_akta}}</center></td>
											<td><center>{{$a->status_pendamping_ijazah}}</center></td>
											<td><center>{{$a->proses_penyerahan}}</center></td>
											<td><center>{{$a->pengambil}}</center></td>
											<td><center>{{$a->tgl_penyerahan_ke_mhs}}</center></td>
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
				</section>
@endsection