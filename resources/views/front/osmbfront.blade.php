@extends('layouts.front.master')

@section('content')
			<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/front/img/demos/education/parallax-5.jpg">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="font-weight-bold">Sertifikat</h1>
								<span class="text-color-light d-block position-relative font-weight-light">Orientasi Studi Mahasiswa Baru</span>
							</div>
							<div class="col-md-4 order-1 order-md-2 align-self-center">
								<ul class="breadcrumb d-block text-md-right">
									<li><a href="demo-education.html">Home</a></li>
									<li class="active text-color-light">PKBJJ</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="section bg-color-tertiary border-0 my-0 pb-12">
					<div class="container">
						<div class="col-md-12">
							<form action="{{ url('/searchnimosmb')}}" method="POST" role="cari">
								{{csrf_field()}}
								<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
							
								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								<div class="form-row">
									<div class="form-group col-lg-8">
										<input type="text" name="cari" class="form-control{{ $errors->has('cari') ? ' is-invalid' : '' }}" value="" maxlength="9" id="name" placeholder="Masukkan NIM anda...." required>
									</div>
									<div class="form-group col">
										<button type="submit" class="btn btn-primary btn-modern" data-loading-text="Loading...">Cari Sertifikat</button>
									</div>
								</div>
							</form>
							@if(isset($result))
							<header>
								<h2 class="panel-title">Hasil Pencarian</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none">
						        <thead>
						          <tr>
						            <th style="background-color:Silver"><center>NIM</center></th>
						            <th style="background-color:Silver"><center>Nama Mahasiswa</center></th>
						            <th style="background-color:Silver"><center>Nama Sertifikat</center></th>
						            <th style="background-color:Silver"><center>Nomor Sertifikat</center></th>
						            <th style="background-color:Silver"><center>Sebagai</center></th>
						            <th style="background-color:Silver"><center>TGL Pelaksanaan</center></th>
						            <th style="background-color:Silver"><center>TGL Sertifikat</center></th>
						            <th style="background-color:Silver"><center>Opsi</center></th>
						          </tr>
						        </thead>
									@foreach ($result as $a)
									<tbody>
										<tr>
											<td>{{$a->nim}}</td>
											<td>{{$a->nama}}</td>
											<td>{{$a->nama_kegiatan}}</td>
											<td>{{$a->no_sertifikat}}</td>
											<td>{{$a->sebagai}}</td>
											<td>{{$a->tgl_pelaksanaan}}</td>
											<td>{{$a->tgl_sertifikat}}</td>
											<td class="center">
													<a class="btn btn-sm btn-warning" target="_blank" href="/searchnimosmb/print/{{encrypt($a->nim)}}"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Sertifikat"></i></a>
											</td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>
				        @elseif(isset($message))
				        	<p>{{ $message }}</p>
				      	@endif
						</div>
					</div>
				</section>
@endsection