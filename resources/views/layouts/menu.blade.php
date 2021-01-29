<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="{{url('/home')}}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									@if(isset(Auth::user()->id_group))
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2 || Auth::user()->id_group == 3 || Auth::user()->id_group == 4)
									<li class="nav-parent">
										<a>
											<i class="fa fa-indent" aria-hidden="true"></i>
											<span>E-Sertifikat</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Sertifikat PKBJJ
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('mpkbjj.create')}}">
															<i class="fa fa-file-text-o"></i>
															Add Data
														</a>
													</li>
													<li>
														<a href="{{route('mpkbjj.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan pkbjj
														</a>
													</li>
													<li>
														<a href="{{url('/SearchPkbjj')}}">
															<i class="fa fa-print"></i>
															Cetak Sertifikat
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Sertifikat OSMB
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('osmb.create')}}">
															<i class="fa fa-file-text-o"></i>
															Add Data
														</a>
													</li>
													<li>
														<a href="{{route('osmb.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan osmb
														</a>
													</li>
													<li>
														<a href="{{url('/SearchOsmb')}}">
															<i class="fa fa-print"></i>
															Cetak Sertifikat
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Sertifikat Seminar
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('sertifikatall.form')}}">
															<i class="fa fa-file-text-o"></i>
															Add Data
														</a>
													</li>
													<li>
														<a href="{{route('sertifikatall.peragaan')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan Sertifikat
														</a>
													</li>
													<li>
														<a href="{{route('sertifikatall.peragaancetak')}}">
															<i class="fa fa-print"></i>
															Cetak Sertifikat
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Sertifikat Disporseni
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('disporseni')}}">
															<i class="fa fa-file-text-o"></i>
															Add Data
														</a>
													</li>
													<li>
														<a href="{{route('disporseni.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan pkbjj
														</a>
													</li>
													<li>
														<a href="{{url('/SearchPkbjj')}}">
															<i class="fa fa-print"></i>
															Cetak Sertifikat
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									@endif
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2 || Auth::user()->id_group == 3 || Auth::user()->id_group == 4 || Auth::user()->id_group == 5)
									<li class="nav-parent">
										<a>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Persuratan</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Surat Keluar
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('sk.create')}}">
															<i class="fa fa-file-text-o"></i>
															Add Data
														</a>
													</li>
													<li>
														<a href="{{route('sk.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan Surat Keluar
														</a>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-print"></i>
															Buku Agenda Surat Keluar
														</a>
													</li>
													<li class="nav-parent">
														<a><i class="fa fa-book"></i>
															Surat Konfirmasi Ijazah
														</a>
														<ul class="nav nav-children">
															<li>
																<a href="{{route('surketijazah.index')}}">
																	<i class="fa fa-file-text-o"></i>
																	Buat Surkon Ijazah
																</a>
															</li>
															<li>
																<a href="{{url('surket-ijazah/raga')}}">
																	<i class="fa fa-print"></i>
																	Peragaan
																</a>
															</li>
															<li class="nav-parent">
																<a><i class="fa fa-book"></i>
																	SK BAN-PT
																</a>
																<ul class="nav nav-children">
																	<li>
																		<a href="{{route('ban-pt.index')}}">
																			Create SK BAN-PT
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			Peragaan
																		</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Surat Masuk
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('sm.create')}}">
															<i class="fa fa-file-text-o"></i>
															Add Data
														</a>
													</li>
													<li>
														<a href="{{route('sm.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan Surat Masuk
														</a>
													</li>
													<li>
														<a href="{{route('surat-masuk.agenda')}}">
															<i class="fa fa-print"></i>
															Buku Agenda Surat Masuk
														</a>
													</li>
												</ul>
											</li>
											<!-- <li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Disposisi
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="#">
															<i class="fa fa-file-text-o"></i>
															Peragaan Disposisi
														</a>
													</li>
													<li>
														<a href="#">
															<i class="fa fa-print"></i>
															Cetak Disposisi Surat
														</a>
													</li>
												</ul>
											</li> -->
										</ul>
									</li>
									@endif
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2 || Auth::user()->id_group == 3 || Auth::user()->id_group == 4 || Auth::user()->id_group == 5 || Auth::user()->id_group == 6)
									<li class="nav-parent">
										<a>
											<i class="fa far fa-clone" aria-hidden="true"></i>
											<span>Surat Keterangan</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Surat Keterangan Aktif
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('surket.index')}}">
															<i class="fa fa-file-text-o"></i>
															Buat Surket Mhs Aktif
														</a>
													</li>
													<li>
														<a href="{{url('/surket-mahasiswa/peragaan')}}">
															<i class="fa fa-print"></i>
															Peragaan
														</a>
													</li>
													<li>
														<a href="{{url('/surket-mahasiswa/rekap')}}">
															<i class="fa fa-print"></i>
															Rekap
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									@endif
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2 || Auth::user()->id_group == 4)
									<li class="nav-parent">
										<a>
											<i class="fa fa-database" aria-hidden="true"></i>
											<span>Master Data</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													SK BAN-PT
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('ban-pt.index')}}">
															Create SK BAN-PT
														</a>
													</li>
													<!-- <li>
														<a href="#">
															Peragaan
														</a>
													</li> -->
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Program Studi
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('programstudi.index')}}">
															Data Program Studi
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-book"></i>
													Sertifikat
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('nomorsertifikat.index')}}">
															Nomor Sertifikat
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									@endif
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 2)
									<li class="nav-parent">
										<a>
											<i class="fa fas fa-cogs" aria-hidden="true"></i>
											<span>Master User</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{route('user.index')}}">
													<i class="fa fa-book"></i>
													Data User
												</a>
											</li>
											<!-- <li>
												<a href="#">
													<i class="fa fa-book"></i>
													Peragaan
												</a>
											</li> -->
										</ul>
									</li>
									@endif
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 3 || Auth::user()->id_group == 4 || Auth::user()->id_group == 7)
									<li class="nav-parent">
										<a>
											<i class="fa fas fa-graduation-cap" aria-hidden="true"></i>
											<span>Ijazah</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-parent">
												<a><i class="fa fas fa-camera"></i>
													Foto Ijazah
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('fotoijazah.create')}}">
															<i class="fa fa-file-text-o"></i>
															Input Foto Ijazah
														</a>
													</li>
													<!-- <li>
														<a href="{{route('fotoijazah.kirimindex')}}">
															<i class="fa fa-file-text-o"></i>
															Proses Kirim Foto ke UT Pusat
														</a>
													</li> -->
													<li>
														<a href="{{route('fotoijazah.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan
														</a>
													</li>
													<li>
														<a href="{{route('fotoijazah.rekap')}}">
															<i class="fa fa-file-text-o"></i>
															Rekap Penyerahan Foto
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fa-database"></i>
													Data Ijazah Masuk
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('ijazah.create')}}">
															<i class="fa fa-file-text-o"></i>
															Input Ijazah Masuk
														</a>
													</li>
													<li>
														<a href="{{route('ijazah.index')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan
														</a>
													</li>
													<li>
														<a href="{{route('ijazah.bukubesar')}}">
															<i class="fa fa-file-text-o"></i>
															Buku Besar Ijazah
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a><i class="fa fas fa-share-alt"></i>
													Data Ijazah Keluar
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('take-ijazah.create')}}">
															<i class="fa fa-file-text-o"></i>
															Input Pengambilan Ijazah
														</a>
													</li>
													<!-- <li>
														<a href="{{route('take-ijazah.index')}}">
															<i class="fa fa-print"></i>
															Peragaan
														</a>
													</li> -->
												</ul>
											</li>
										</ul>
									</li>
									@endif
									@if(Auth::user()->id_group == 1 || Auth::user()->id_group == 3 || Auth::user()->id_group == 4 || Auth::user()->id_group == 7 || Auth::user()->id_group == 8)
									<li class="nav-parent">
										<a>
											<i class="fa fas fa-graduation-cap" aria-hidden="true"></i>
											<span>Upacara Penyerahan Ijazah (UPI)</span>
										</a>
										<ul class="nav nav-children">
											<!-- <li class="nav-parent">
												<a><i class="fa fa-cog"></i>
													Penentuan UPI
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('sk-upi.create')}}">
															<i class="fa fa-file-text-o"></i>
															Input SK UPI
														</a>
													</li>
												</ul>
											</li> -->
											<li class="nav-parent">
												<a><i class="fa fa-th-list"></i>
													Pendaftaran UPI
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="{{route('upi.pendaftaran')}}">
															<i class="fa fa-file-text-o"></i>
															Pendaftaran UPI
														</a>
													</li>
													<li>
														<a href="{{route('upi.peragaan')}}">
															<i class="fa fa-file-text-o"></i>
															Peragaan
														</a>
													</li>
													<!-- <li>
														<a href="#">
															<i class="fa fa-file-text-o"></i>
															Rekap Penyerahan Foto
														</a>
													</li> -->
												</ul>
											</li>
										</ul>
									</li>
									@endif
									@endif
								</ul>
							</nav>
						</div>
				
						<script>
							// Maintain Scroll Position
							if (typeof localStorage !== 'undefined') {
								if (localStorage.getItem('sidebar-left-position') !== null) {
									var initialPosition = localStorage.getItem('sidebar-left-position'),
										sidebarLeft = document.querySelector('#sidebar-left .nano-content');
									
									sidebarLeft.scrollTop = initialPosition;
								}
							}
						</script>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

			
			</div>