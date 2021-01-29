@extends('layouts.masterapp')
@section('content')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Buku Agenda Surat Masuk</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Agenda</span></li>
								<li><span>Surat Keluar</span></li>
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
						
								<h2 class="panel-title">Buku Agenda Surat Masuk</h2>
							</header>
							<header class="panel-heading">
									<a class="btn btn-sm btn-primary" target="_blank" href="/surat-masuk/peragaan/cetak_buku_agenda"><i class="fa fa-print" aria-hidden="true" data-toggle="tooltip" data-placement="top" data-original-title="Print Buku Agenda"></i> &nbsp; Cetak Buku Agenda Surat Masuk</a>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped table-condensed mb-none" width="100%">
						        <thead>
						          <tr>
						            <th style="background-color:#66ccff" width="10%"><center>Nomor Agenda</center></th>
						            <th style="background-color:#66ccff" width="20%"><center>Nomor Surat</center></th>
						            <th style="background-color:#66ccff" width="25%"><center>Tanggal Surat</center></th>
						            <th style="background-color:#66ccff" width="25%"><center>Asal Surat</center></th>
						            <th style="background-color:#66ccff" width="5%"><center>Perihal</center></th>
						            <th style="background-color:#66ccff" width="5%"><center>Sifat</center></th>
						            <th style="background-color:#66ccff" width="5%"><center>Tanggal Agenda</center></th>
						          </tr>
						        </thead>
									@foreach ($agenda as $a)
									<tbody>
										<tr>
											<td>{{$a->no_agenda}}</td>
											<td>{{$a->no_surat}}</td>
											<td>{{$a->tgl_surat}}</td>
											<td>{{$a->asal_surat}}</td>
											<td>{{$a->perihal}}</td>
											<td>{{$a->sifat_surat}}</td>
											<td>{{$a->tgl_agenda}}</td>
										</tr>
									</tbody>
									@endforeach
								</table>
								{{ $agenda->links() }}
							</div>
						</section>
				</section>
@endsection