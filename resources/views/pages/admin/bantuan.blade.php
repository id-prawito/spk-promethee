@extends('layouts.master') 

@section('header') 
@section('pages','Options') 
@section('title','Bantuan') 
@include('layouts.component.header') 
@endsection

@push('page-styles') 

@endpush 

@push('page-scripts')
@endpush 

@section('content')
<div class="section-body">
	<div class="row">
		<div class="col-12 col-md-6 col-lg-12">
			<div class="card card-primary">
				<div class="card-header">
					<div class="col">
						<h2 class="section-title mt-2">Pusat Bantuan dan Pertanyaan</h2>
						<p style="text-align: justify;" class=" section-lead">
							Berikut adalah beberapa hal yang mungkin perlu diketahui dalam menggunakan sistem informasi pendukung keputusan atau melakukan perhitungan terhadap data untuk mengetahui prioritas lokasi pembangunan embung di Kabupaten Semarang.</p>
					</div>
				</div>
				<div class="card-body">
					<div id="accordion">
						<div class="accordion">
							<div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
								<i style="position: absolute; font-size:16px;" class="fas fa-chevron-circle-right"></i>
								<h4 style="line-height:20px; position:relative; padding-left:28px;">Apa itu metode PROMETHEE ?</h4>
							</div>
							<div style="text-align: justify;" class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
								<p class="mb-2">
									<b>Peference Ranking Organization Method For Enrichment Evaluation (PROMETHEE)</b> merupakan suatu metode penentuan urutan atau prioritas dalam analisis multikriteria. PROMETHEE adalah metodologi untuk mengevaluasi alternatif dengan kriteria yang diberikan dan membuat peringkat alternatif untuk keputusan akhir. Adapun Tahapan prosedur untuk pelaksanaan PROMETHEE adalah sebagai berikut (Ignatius J, dkk, 2012): <br/>
								</p>
								<ul style="list-style: none; padding: 0;">
									<li style="padding-left: 28px;position: relative;">
										<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Penentuan <b>Deviasi</b> berdasarkan perbandingan berpasangan.
									</li>
									<li style="padding-left: 28px;position: relative;">
										<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Penerapan fungsi <b>Preferensi</b>.
									</li>
									<li style="padding-left: 28px;position: relative;">
										<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Perhitungan <b>Indeks Preferensi</b> global.
									</li>
									<li style="padding-left: 28px;position: relative;">
										<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Perhitungan aliran perankingan dan peringkat parsial atau perhitungan nilai-nilai <b>Leaving Flow</b> dan <b>Entering Flow</b> pada setiap alternatif.
									</li>
									<li style="padding-left: 28px;position: relative;">
										<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Perhitungan aliran perankingan bersih dan peringkat lengkap atau perhitungan nilai <b>Net Flow</b>.
									</li>
								</ul>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-2">
								<i style="position: absolute; font-size:16px;" class="fas fa-chevron-circle-right"></i>
								<h4 style="line-height:20px; position:relative; padding-left:28px;">Bagaimana alur pengisian program atau proses perhitungan data PROMETHEE ?</h4>
							</div>
							<div style="text-align: justify;" class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
								<p class="mb-0">
									Dalam pengisian program supaya tidak menimbulkan kesalahan, maka pengguna diharapkan mengikuti panduan berikut: <br/>
								</p>
								<ul style="list-style: none; padding: 0;">
									<li style="padding-left: 28px;position: relative;">
										<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Melakukan proses Tambah Data Alternatif.
									</li>
									<p class="mb-3">
										Untuk melakukan proses perhitungan rangking alternatif, pengguna hanya perlu melakukan Tambah Data Alternatif, dengan melakukan input/isi data meliputi Alternatif dan Nilai Klasifikasi di setiap Kriteria. Dan berikut adalah cara melakukan proses tambah data alternatif:
									</p>
									<div class="row">
										<div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
											<img src="{{ asset('img/tambah_alternatif.gif') }}" alt="" class="img-fluid">
										</div>
										<div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
											<div style="font-size: 14px; text-align:justify" class="row content">
												<div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
													<p>
														Proses tambah klasifikasi adalah:
													</p>
													<ul>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Klik pada Menu Data -> <b>Alternatif</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Klik button dropdown <b>"Tambah Alternatif"</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Masukan data sesuai dengan form yang tersedia, mulai dari <b>ID</b>, <b>Nama</b>, dan <b>Kode Alternatif</b> serta <b>Nilai Klasifikasi</b> daripada masing-masing kriteria. Klik button <b>"Proses Alternatif"</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Masukan data kembali jika terjadi kesalahan, dan <b>Data Alternatif</b> berhasil ditambah.
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</ul>
								<p class="mb-0 mt-2">
									Catatan:<br>
									<ul style="list-style: none; padding: 0;">
										<li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Untuk penambahan Data Kriteria tidak dapat dilakukan karena bersifat tetap (statis).
										</li>
										<li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Program dapat melakukan perhitungan hanya dengan menambahkan alternatif (data utama) sehingga pada hasil akhir akan didapatkan nilai <b>Net Flow</b> daripada alternatif yang telah ditambahkan.
										</li>
										<li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Karena dalam proses tambah Data Alternatif diperlukan nilai klasifikasi di setiap kriteria, maka pada setiap Kriteria dapat ditambahkan nilai dan klasifikasinya. Berikut adalah cara menambahkan nilai klasifikasi:
										</li>
										<br>
										<div class="row">
											<div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
												<img src="{{ asset('img/tambah_klasifikasi.gif') }}" alt="" class="img-fluid">
											</div>
											<div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
												<div style="font-size: 14px; text-align:justify" class="row content">
													<div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
														<p>
															Proses tambah klasifikasi adalah:
														</p>
														<ul>
															<li>
																<i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Klasifikasi</b>.
															</li>
															<li>
																<i class="ri-arrow-right-s-fill"></i> Klik button dropdown <b>"Tambah Klasifikasi"</b>.
															</li>
															<li>
																<i class="ri-arrow-right-s-fill"></i> Masukan data sesuai dengan form yang tersedia, mulai dari <b>Kriteria</b>, <b>Nilai</b>, dan <b>Klasifikasi</b>. Klik button <b>"Proses Klasifikasi"</b>.
															</li>
															<li>
																<i class="ri-arrow-right-s-fill"></i> Masukan data kembali jika terjadi kesalahan, dan <b>Klasifikasi</b> berhasil ditambah.
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<br>
										<li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Dengan begitu program akan mulai melakukan proses perhitungan nilai dari tahap perhitungan <b>Deviasi</b>, <b>Indeks Preferensi</b>, <b>Leaving</b> dan <b>Entering Flow</b>, serta <b>Net Flow</b>.
										</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-3">
								<i style="position: absolute; font-size:16px;" class="fas fa-chevron-circle-right"></i>
								<h4 style="line-height:20px; position:relative; padding-left:28px;">Bagaimana cara mengelola Data Kriteria ?</h4>
							</div>
							<div style="text-align: justify;" class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
								<p class="mb-3">
									Data Kriteria merupakan data daripada perhitungan yang memuat informasi/data tabel berupa 7 Kriteria dengan masing-masing memiliki parameter maks/min, tipe preferensi <i>(Usual, Linier, Level, Quasi, Gaussion, Area)</i>, nilai q dan p, serta nilai bobot kriteria. Berikut adalah cara melakukan proses edit data kriteria :<br/>
								</p>
								<ul style="list-style: none; padding: 0;">
									<div class="row">
										<div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
											<img src="{{ asset('img/edit_kriteria.gif') }}" alt="" class="img-fluid">
										</div>
										<div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
											<div style="font-size: 14px; text-align:justify" class="row content">
												<div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
													<ul>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Klik pada Menu Data -> <b>Kriteria</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Klik button <b>"Edit"</b> pada Kriteria yang akan diperbaharui.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Perbaharui data sesuai dengan form yang tersedia, mulai dari <b>Parameter</b>, <b>Tipe</b>, dan <b>Nilai p, q</b> serta untuk <b>Nama Kriteria</b> dan <b>Nilai Bobot</b> bersifat tetap. Klik button <b>"Simpan"</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Masukan data kembali jika terjadi kesalahan, dan <b>Data Kriteria</b> berhasil diperbaharui.
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</ul>
                                <p class="mb-0 mt-2">
									Catatan:<br>
									<ul style="list-style: none; padding: 0;">
                                        <li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Pada proses ini, melakukan perubahan data (edit) dapat dilakukan, tetapi tidak untuk proses tambah atau hapus data.
										</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-4">
								<i style="position: absolute; font-size:16px;" class="fas fa-chevron-circle-right"></i>
								<h4 style="line-height:20px; position:relative; padding-left:28px;">Bagaimana cara mengelola Data Evaluasi Kriteria ?</h4>
							</div>
							<div style="text-align: justify;" class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
								<p class="mb-3">
									Data Evaluasi Kriteria merupakan data daripada nilai klasifikasi tiap kriteria pada masing-masing alternatif. Terdapat 7 Kriteria yang memuat data/tabel berupa alternatif dengan nilai klasifikasinya. Pada tiap kriteria mempunyai nilai dan klasifikasi yang berbeda. Berikut adalah cara melakukan proses edit data evaluasi kriteria (Kriteria : Vegetasi Area Genangan Embung) :<br/>
								</p>
								<ul style="list-style: none; padding: 0;">
									<div class="row">
										<div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
											<img src="{{ asset('img/edit_evaluasi_kriteria.gif') }}" alt="" class="img-fluid">
										</div>
										<div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
											<div style="font-size: 14px; text-align:justify" class="row content">
												<div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
													<ul>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Klik pada Menu Data -> <b>Evaluasi Kriteria</b> -> <b>"Pilih Kriteria"</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Klik button <b>"Edit"</b> pada Alternatif yang Nilai Evaluasinya akan diperbaharui.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Perbaharui data <b>Nilai</b> evaluasinya, dan untuk <b>Nama Alternatif</b> bersifat tetap (statis). Klik button <b>"Simpan"</b>.
														</li>
														<li>
															<i class="ri-arrow-right-s-fill"></i> Jika terjadi kesalahan, masukan data kembali, dan <b>Nilai Evaluasi Kriteria</b> berhasil diperbaharui.
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</ul>
                                <p class="mb-0 mt-2">
									Catatan:<br>
									<ul style="list-style: none; padding: 0;">
										<li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Untuk melihat hasil perubahan yang dilakukan pada nilai evaluasi kriteria, dapat dilihat pada halaman Menu <b>PROMETHEE</b> -> <b>Data Alternatif</b>.
										</li>
                                        <li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Pada proses ini, melakukan perubahan data (edit) dapat dilakukan, tetapi tidak untuk proses tambah atau hapus data.
										</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-5">
								<i style="position: absolute; font-size:16px;" class="fas fa-chevron-circle-right"></i>
								<h4 style="line-height:20px; position:relative; padding-left:28px;">Bagaimana cara mengelola Klasifikasi ?</h4>
							</div>
							<div style="text-align: justify;" class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
								<p class="mb-3">
									Klasifikasi merupakan data daripada kriteria yang memuat informasi/data berupa nilai dan klasifikasi pada tiap Kriteria yang ada dalam perhitungan PROMETHEE. Terdapat 4-5 Nilai dan Klasifikasi pada masing-masing Kriteria yang digunakan. Berikut adalah proses daripada mengelola Klasifikasi (Tambah, Edit dan Hapus):
                                </p>
                                <ul class="nav nav-pills" id="myTab1" role="tablist">
                                    <li class="nav-item">
                                        <a style="margin-right: 8px; margin-bottom:5px;" class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true"><b>Tambah Klasifikasi</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="margin-right: 8px; margin-bottom:5px;" class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false"><b>Edit Klasifikasi</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="margin-right: 8px; margin-bottom:5px;" class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false"><b>Hapus Klasifikasi</b></a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab1">
                                        <ul style="list-style: none; padding: 0;">
                                            <div class="row">
                                                <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                                                    <img src="{{ asset('img/tambah_klasifikasi.gif') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                                                    <div style="font-size: 14px; text-align:justify" class="row content">
                                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                                            <p>
                                                                Proses <b>Tambah Klasifikasi</b>:
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Klasifikasi</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik button dropdown <b>"Tambah Klasifikasi"</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Masukan data sesuai dengan form yang tersedia, mulai dari <b>Kriteria</b>, <b>Nilai</b>, dan <b>Klasifikasi</b>. Klik button <b>"Proses Klasifikasi"</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Masukan data kembali jika terjadi kesalahan, dan <b>Klasifikasi</b> berhasil ditambah.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1">
                                        <ul style="list-style: none; padding: 0;">
                                            <div class="row">
                                                <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                                                    <img src="{{ asset('img/edit_klasifikasi.gif') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                                                    <div style="font-size: 14px; text-align:justify" class="row content">
                                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                                            <p>
                                                                Proses <b>Edit Klasifikasi</b>:
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Klasifikasi</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik button <b>"Edit"</b> pada Klasifikasi yang akan diperbaharui.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Perbaharui data sesuai dengan form yang tersedia, yaitu <b>Klasifikasi</b>, untuk <b>Nama Kriteria</b> dan <b>Nilai Klasifikasi</b>  bersifat tetap. Klik button <b>"Simpan"</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Masukan data kembali jika terjadi kesalahan, dan <b>Klasifikasi</b> berhasil diperbaharui.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
                                        <ul style="list-style: none; padding: 0;">    
                                            <div class="row">
                                                <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                                                    <img src="{{ asset('img/delete_klasifikasi.gif') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                                                    <div style="font-size: 14px; text-align:justify" class="row content">
                                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                                            <p>
                                                                Proses <b>Hapus Klasifikasi</b>:
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Klasifikasi</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik button <b>"Delete"</b> pada Klasifikasi yang akan dihapus.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Pastikan kembali apakah sudah yakin akan menghapus klasifikasi atau tidak. Klik button <b>"Ya"</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Dan <b>Klasifikasi</b> berhasil dihapus.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">
									Catatan:<br>
									<ul style="list-style: none; padding: 0;">
                                        <li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Untuk melihat hasil perubahan pada proses ini, dapat dilihat pada halaman Menu Data -> Alternatif, karena pada proses Tambah Alternatif, Nilai dan Klasifikasi diperlukan sebagai data inputan.
										</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-6">
								<i style="position: absolute; font-size:16px;" class="fas fa-chevron-circle-right"></i>
								<h4 style="line-height:20px; position:relative; padding-left:28px;">Bagaimana cara mengelola Users ?</h4>
							</div>
                            <div style="text-align: justify;" class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                                <p class="mb-3">
                                    Data Users merupakan data daripada sistem informasi berupa daftar pengguna terdaftar dengan role User atau Administrator. Perubahan dapat dilakukan pada daftar users oleh Administrator. Berikut adalah cara mengelola data Users <i>(Edit, Delete, Aktivasi Akun)</i>:
                                </p>
                                <ul class="nav nav-pills" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a style="margin-right: 8px; margin-bottom:5px;" class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true"><b>Edit Users</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="margin-right: 8px; margin-bottom:5px;" class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false"><b>Hapus Users</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="margin-right: 8px; margin-bottom:5px;" class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false"><b>Aktivasi Users</b></a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                        <ul style="list-style: none; padding: 0;">
                                            <div class="row">
                                                <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                                                    <img src="{{ asset('img/edit_users.gif') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                                                    <div style="font-size: 14px; text-align:justify" class="row content">
                                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                                            <p>
                                                                Proses <b>Edit Users</b>:
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Users</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik button <b>"Edit"</b> pada akun pengguna yang akan diperbaharui.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Perbaharui data pengguna <b>(Users)</b> meliputi <b>Username</b>, <b>Email</b> dan <b>Role</b>. Klik button <b>"Simpan"</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Jika terjadi kesalahan, masukan data kembali, dan data pengguna <b>Usres</b> berhasil diperbaharui.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                        <ul style="list-style: none; padding: 0;">
                                            <div class="row">
                                                <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                                                    <img src="{{ asset('img/delete_users.gif') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                                                    <div style="font-size: 14px; text-align:justify" class="row content">
                                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                                            <p>
                                                                Proses <b>Delete Users</b>:
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Users</b>.
                                                                </li>
                                                                <li>
                                                                <i class="ri-arrow-right-s-fill"></i> Klik button <b>"Delete"</b> pada data pengguna <b>(Users)</b> yang akan dihapus.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Pastikan kembali apakah sudah yakin akan menghapus data pengguna atau tidak. Klik button <b>"Ya"</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Dan data pengguna <b>(Users)</b> berhasil dihapus.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                        <ul style="list-style: none; padding: 0;">    
                                            <div class="row">
                                                <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                                                    <img src="{{ asset('img/activated_users.gif') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                                                    <div style="font-size: 14px; text-align:justify" class="row content">
                                                        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                                            <p>
                                                                Proses <b>Aktivasi Akun</b>:
                                                            </p>
                                                            <ul>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik pada Menu <b>Users</b>.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Klik button <b>"Activated/Deactivated"</b> pada data pengguna yang akan diperbaharui di tabel daftar registrasi users.
                                                                </li>
                                                                <li>
                                                                    <i class="ri-arrow-right-s-fill"></i> Dan data pengguna <b>Users</b> berhasil di aktifkan/nonaktifkan.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-0 mt-2">
									Catatan:<br>
									<ul style="list-style: none; padding: 0;">
										<li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Terdapat 2 tabel data pada halaman ini yaitu tabel Users dan Daftar Registrasi User.
										</li>
                                        <li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Untuk proses tambah data pengguna <b>(Users)</b> hanya dapat dilakukan pada halaman daftar (register) sistem informasi.
                                        </li>
                                        <li style="padding-left: 28px;position: relative;">
											<i style="left:0px; color: #3498db; font-size: 14px; position: absolute; top: 6px; line-height: 1;" class="fas fa-check-square"></i> Action <b>Activated</b> digunakan untuk membuat status pengguna <b>(Users)</b> aktif, dan Deactivated digunakan untuk membuat status pengguna <b>(Users)</b> nonaktif.
										</li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection