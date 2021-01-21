<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SPK - Promethee</title>
    <meta content="Sistem Pendukung Keputusan Penentuan Lokasi Embung" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/indo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('landing/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('landing/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/remixicon/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('landing/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/venobox/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('landing/aos/aos.css')}}">

    <link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>

<body>
    <!-- ======= HEADER ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
                <h1 class="text-light"><a href="{{ url('/') }}"><span><img src="{{ asset('img/promethee-logo.png') }}" class="img-fluid" alt="Logo"></span></a></h1>
            </div>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#data"><b>DATA</b></a></li>
                    <li><a href="#fitur"><b>FITUR</b></a></li>
                    <li><a href="#promethee"><b>PROMETHEE</b></a></li>
                    <li><a href="#ranking"><b>RANKING</b></a></li>
                    <li><a href="#tentang"><b>TENTANG</b></a></li>
                    <li><a href="{{ url('/faq') }}"><b>FAQ</b></a></li>
                    @if (Route::has('login'))
                    @auth
                    <li class="get-started">
                        <a href="{{ url('/home') }}">HOME</a>
                    </li>
                    @else
                    <li class="get-started">
                        <a href="{{ route('login') }}">MASUK</a>
                    </li>
                    @endauth
                    @endif
                </ul>
            </nav>
        </div>
    </header>
    <!-- ======= END HEADER ======= -->

    <!-- ======= HERO SECTION ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sistem Pendukung Keputusan</br></h1>
                    <h1 style="font-size: 22px;" data-aos="fade-up" data-aos-delay="400">Penentuan Lokasi Embung
                    </h1>
                    <p style="font-size: 14px;  margin-bottom: 40px; text-align:justify;" data-aos="fade-up" data-aos-delay="400">dirancang menggunakan metode PROMETHEE, PROMETHEE <i>(Preference Ranking Organization Method for Enrichment Evaluation)</i> adalah metodologi untuk mengevaluasi alternatif dengan kriteria yang diberikan dan membuat peringkat alternatif untuk keputusan akhir.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#data" style="font-size: 14px;" class="btn-get-started scrollto"><b>MULAI </b><i class="icofont-caret-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img width="100%" height="auto" src="{{ asset('img/img-1.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ======= END HERO SECTION ======= -->
    <!-- =======   MAIN SECTION   ======= -->
    <main id="main">
        <!-- ======= CLIENT SECTION ======= -->
        <section id="clients" class="clients clients mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{ asset('img/clients/laravel1.png') }}" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{ asset('img/clients/carto1.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{ asset('img/clients/php1.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="{{ asset('img/clients/promethee.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END CLIENT SECTION ======= -->
        <!-- =======    DATA SECTION    ======= -->
        <section id="data" class="counts">
            <div class="container">
                <div class="row">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/img-2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-simple-smile"></i>
                                        <span data-toggle="counter-up">{{Kustom::CountKriterias()}}</span>
                                        <p style="text-align: justify;"><strong>Kriteria</strong> adalah ukuran yang menjadi dasar penilaian atau penetapan sesuatu.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-document-folder"></i>
                                        <span data-toggle="counter-up">{{Kustom::CountAlternatifs()}}</span>
                                        <p style="text-align: justify;"><strong>Alternatif</strong> adalah pilihan di antara dua atau beberapa kemungkinan, dan dalam hal ini adalah lokasi embung.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-clock-time"></i>
                                        <span data-toggle="counter-up">{{Kustom::CountAlternatifs()*Kustom::CountKriterias()}}</span>
                                        <p style="text-align: justify;"><strong>Evaluasi</strong> adalah hasil penilaian / perhitungan dari beberapa alternatif berdasarkan metode promethee dengan jumlah kriteria yang ada.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="icofont-award"></i>
                                        <span data-toggle="counter-up">{{Kustom::CountUsers()}}</span>
                                        <p style="text-align: justify;"><strong>User</strong> adalah pengguna yang terdaftar dalam sistem pendukung keputusan ini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======  END DATA SECTION  ======= -->
        <!-- =======   FITUR  SECTION   ======= -->
        <section id="fitur" class="services">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>fitur</h2>
                    <p style="font-size: 15px;">Beberapa fitur pada sistem pendukung keputusan penentuan lokasi embung menggunakan metode promethee.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-map-alt"></i></div>
                            <div class="title">
                                <p>Carto Map</p>
                            </div>
                            <p class="description">Carto Map / CartoDB adalah sistem yang menyediakan layanan untuk mengolah data spasial, seperti pengelolaan basis data spasial, analisis data spasial, dan pemetaan. Dan pada sistem pendukung keputusan ini hasil pemeringkatan alternatif ditampilkan secara visual berupa peta beserta beberapa info data alternatif.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <div class="title">
                                <p>Data Dinamis</p>
                            </div>
                            <p class="description">Menampilkan data secara dinamis dari hasil perhitungan menggunakan metode promethee, dan juga menampilkan beberapa data pendukung dari database sehingga dapat membantu user dalam mengetahui dan mengelola data untuk perhitungan, berupa data table dan data lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-infinite"></i></div>
                            <div class="title">
                                <p>Metode Promethee</p>
                            </div>
                            <p class="description">Metode outranking yang membandingkan beberapa kemungkinan alternatif (pada kriteria) dengan kriteria dasar.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-laptop"></i></div>
                            <div class="title">
                                <p>Web Responsive</p>
                            </div>
                            <p class="description">Web didesain secara responsive, sehingga web akan beradaptasi jika dibuka dari perangkat mobile berukuran kecil maupun perangkat komputer meja dengan ukuran monitor besar. Ukuran huruf, user interface, gambar dan tata letak akan menyesuaikan dengan lebar layar dan resolusi layar monitor yang tersedia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END FITUR SECTION  ======= -->
        <!-- ======= PROMETHEE SECTION  ======= -->
        <section id="promethee" class="features">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>promethee</h2>
                    <p style="font-size: 15px;">Berikut adalah beberapa data yang dapat ditampilkan dari metode promethee ini.</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-bubble-chart-line" style="color: #ffa426;"></i>
                            <h3>
                                <div style="cursor:pointer" data-toggle="modal" data-target="#dataKriteria">Data Kriteria</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3>
                                <div style="cursor:pointer" data-toggle="modal" data-target="#dataEvaluasi">Data Evaluasi</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-medal-line" style="color: #5578ff;"></i>
                            <h3>
                                <div style="cursor:pointer" data-toggle="modal" data-target="#dataRanking">Data Ranking</div>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-pin-distance-fill" style="color: #ffa426;"></i>
                            <h3>
                                <div style="cursor:pointer" data-toggle="modal" data-target="#dataPeta">Data Peta</div>
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Modal Data Kriteria -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="dataKriteria" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div style="border-top:2px solid #ffa426 !important;" class="modal-content">
                            <div style="box-shadow:0 4px 8px rgba(0, 0, 0, 0.03); border-radius:3px" class="card-body">
                                <span style="padding:18px; font-size:14px;">Data Kriteria</span>
                                <div style="padding:5px; border-radius:5px; font-size:14px;" class="table-responsive">
                                    <table id="tableKriteria" class="table table-borderless table-striped" width="100%">
                                        <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                            <tr>
                                                <th>ID</>
                                                <th>NAMA</th>
                                                <th>PARAMETER</th>
                                                <th>TIPE</th>
                                                <th>q</th>
                                                <th>p</th>
                                                <th>BOBOT</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center; font-size:13px">
                                            @foreach ($kriterias as $data)
                                            <tr align="center">
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->minmaks }}</td>
                                                <td>{{ $data->pref_nama }}</td>
                                                <td>{{ $data->q }}</td>
                                                <td>{{ $data->p }}</td>
                                                <td>{{ $data->bobot }}%</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Data Evaluasi -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="dataEvaluasi" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div style="border-top:2px solid #5578ff !important;" class="modal-content">
                            <div style="box-shadow:0 4px 8px rgba(0, 0, 0, 0.03); border-radius:3px" class="card-body">
                                <span style="padding:18px; font-size:14px;">Data Evaluasi</span>
                                <div style="padding:5px; border-radius:5px; font-size:14px;" class="table-responsive">
                                    <table id="tableEvaluasi" class="table table-borderless table-striped" width="100%">
                                        <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                            <tr>
                                                <th>ALTERNATIF</th>
                                                @foreach ($datas['kriterias'] as $kriteria)
                                                <th>{{$kriteria->kode}}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center; font-size:13px">
                                            @php
                                            for ($id=1; $id <= Kustom::CountAlternatifs(); $id++) { echo '<tr align="center">' ; echo '<td align="center">' .$datas['alternatifs'][$id-1]['nama'].'</td>'; $getevals=Kustom::JoinanTabel($id); foreach ($getevals as $evals) { echo '<td>' .$evals->nilai.'</td>';
                                                }
                                                echo '</tr>';
                                                }
                                                @endphp
                                        </tbody>
                                    </table>
                                </div>
                                <span style="padding:18px; font-size:14px;">Keterangan</span>
                                <div style="padding:5px; border-radius:5px; font-size:14px;" class="table-responsive">
                                    <table id="tableKeterangan" class="table table-borderless table-striped" width="100%">
                                        <thead style="text-align:center; font-size:13px; background-color:#d6d6d6">
                                            <tr>
                                                <th>KODE</th>
                                                <th>KRITERIA</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center; font-size:13px">
                                            @foreach ($datas['kriterias'] as $kriteria)
                                            <tr>
                                                <td>{{$kriteria->kode}}</td>
                                                <td>{{$kriteria->nama}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Data Ranking -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="dataRanking" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div style="border-top:2px solid #5578ff !important;" class="modal-content">
                            <div style="box-shadow:0 4px 8px rgba(0, 0, 0, 0.03); border-radius:3px" class="card-body">
                                <span style="padding:18px; font-size:14px;">Data Ranking</span>
                                <div style="padding:5px; border-radius:5px; font-size:14px;" class="table-responsive">
                                    <table id="tableRangking" class="table table-borderless table-striped" width="100%">
                                        <thead style="text-align:center; font-size:13px;background-color:#d6d6d6">
                                            <tr>
                                                <th>RANK</>
                                                <th>NETFLOW</>
                                                <th>ALTERNATIF</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center; font-size:13px">
                                            @foreach ($arraynet as $net => $value)
                                            <tr align="center">
                                                <td>{{$value['rank']}}</td>
                                                <td>{{number_format($value['net'], 4)}}</td>
                                                <td>{{$value['alternatif']}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Data Peta -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="dataPeta" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div style="border-top:2px solid #ffa426 !important;" class="modal-content">
                            <div style="box-shadow:0 4px 8px rgba(0, 0, 0, 0.03); border-radius:3px" class="card-body">
                                <span style="padding:18px; font-size:14px;">Data Peta</span>
                                <div style="padding:15px; border-radius:5px; font-size:14px;">
                                    <iframe width="100%" height="475" frameborder="0" src="https://prawito.carto.com/builder/0a97a764-9180-4d4b-8c9e-c04c0421e6db/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END PROMETHEE SECTION ======= -->
        <!-- =======  RANKING SECTION  ======= -->
        <section id="ranking" class="counts pt-5">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>ranking</h2>
                    <p style="font-size: 15px;">Dan ini adalah hasil perankingan dari perhitungan data menggunakan metode promethee.</p>
                </div>
                <div class="row">
                    <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                @foreach ($arraynet as $net => $value)
                                <div class="col-md-4 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="ri-medal-line"></i>
                                        <span data-toggle="counter-up">{{$value['rank']}}</span>
                                        <p><strong>{{$value['alternatif']}}</strong></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/img-4.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END RANKING SECTION ======= -->
        <!-- =======   TENTANG SECTION    ======= -->
        <section id="tentang" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>tentang</h2>
                </div>
                <div style="font-size: 14px; text-align:justify" class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                            <b>Peference Ranking Organization Method For Enrichment Evaluation (PROMETHEE)</b> merupakan suatu metode penentuan urutan atau prioritas dalam analisis multikriteria. PROMETHEE adalah metodologi untuk mengevaluasi alternatif dengan kriteria yang diberikan dan membuat peringkat alternatif untuk keputusan akhir. Adapun Tahapan prosedur untuk pelaksanaan PROMETHEE adalah sebagai berikut <i>(Ignatius J, dkk, 2012)</i>:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Penentuan deviasi berdasarkan perbandingan berpasangan.</li>
                            <li><i class="ri-check-double-line"></i> Penerapan fungsi preferensi.</li>
                            <li><i class="ri-check-double-line"></i> Perhitungan indeks preferensi global.</li>
                            <li><i class="ri-check-double-line"></i> Perhitungan aliran perankingan dan peringkat parsial atau perhitungan nilai-nilai leaving flow dan entering flow pada setiap alternatif.</li>
                            <li><i class="ri-check-double-line"></i> Perhitungan aliran perankingan bersih dan peringkat lengkap atau perhitungan nilai netflow.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            Dalam methode Promethee terdapat Fungsi Preferensi yang sering kali menghasilkan nilai fungsi yang berbeda antara dua evaluasi.
                            Untuk setiap kriteria, fungsi preferensi menerjemahkan perbedaan antara dua alternatif menjadi derajat preferensi mulai dari nol sampai satu. Struktur preferensi PROMETHEE berdasarkan perbandingan berpasangan. Semakin kecil nilai deviasi maka semakin kecil nilai preferensinya, semakin besar deviasi semakin besar preferensinya. Dalam rangka memfasilitasi pemilihan fungsi preferensi tertentu, Brans dan Vincke, mengusulkan 6 (enam) tipe dasar sebagai berikut <i>(Brans and Vincke, 1985)</i>:
                        </p>
                        <ul>
                            <li><i class="ri-brush-line"></i> <b>Kriteria Biasa (Usual Criterion)</b></li>
                            <li><i class="ri-brush-line"></i> <b>Kriteria Quasi (Quasi Criterion atau U-Shape)</b></li>
                            <li><i class="ri-brush-line"></i> <b>Kriteria dengan preferensi Linier (Criterion with Linear Preference atau V-Shape)</b></li>
                            <li><i class="ri-brush-line"></i> <b>Kriteria dengan preferensi Linier dan area yang tidak berbeda -- Linear Quasi (Criterion with Linear Preference and Indifference Area)</b></li>
                            <li><i class="ri-brush-line"></i> <b>Kriteria Level (Level Criterion)</b></li>
                            <li><i class="ri-brush-line"></i> <b>Kriteria Gaussian (Gaussian Criterion)</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END TENTANG SECTION  ======= -->
    </main>
    <!-- ======= END MAIN SECTION ======= -->
    <!-- ======= FOOTER ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Vesperr</strong>
                        | Designed by BootstrapMade | Contact Center : +6282-1379-25172</a>
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======= END FOOTER ======= -->
    <a class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- ======= JAVASCRIPT ======= -->
    <!-- Vendor JS Files -->
    <script src="{{asset('landing/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('landing/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('landing/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('landing/php-email-form/validate.js')}}"></script>
    <script src="{{asset('landing/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('landing/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('landing/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('landing/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('landing/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('landing/aos/aos.js')}}"></script>

    <script src="{{asset('modules/datatables/datatables.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- ======= END JAVASCRIPT ======= -->
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableKriteria').DataTable({
                "pagingType": "simple_numbers",
                "searching": false,
                "ordering": false,
                "paging": false
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableEvaluasi').DataTable({
                "pagingType": "simple_numbers",
                "ordering": false,
                "searching": false,
                "paging": false
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableKeterangan').DataTable({
                "pagingType": "simple_numbers",
                "searching": false,
                "ordering": false,
                "paging": false
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            //Pagination numbers
            $('#tableRangking').DataTable({
                "pagingType": "simple_numbers",
                "searching": false,
                "paging": false
            });
        });
    </script>
</body>

</html>