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
                    <li><a href="#login"><b>Login</b></a></li>
                    <li><a href="#register"><b>Register</b></a></li>
                    <li><a href="#forgotpassword"><b>Forgot Password</b></a></li>
                    <li><a href="#resetpassword"><b>Reset Password</b></a></li>
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
                    <h1 style="font-size: 35px;" data-aos="fade-up">PUSAT BANTUAN (FAQ)</br></h1>
                    <h1 style="font-size: 20px;" data-aos="fade-up" data-aos-delay="400">Berbagai informasi terkait sistem pendukung keputusan.
                    </h1>
                    <p style="font-size: 14px;  margin-bottom: 40px; text-align:justify;" data-aos="fade-up" data-aos-delay="400">dirancang menggunakan metode PROMETHEE, PROMETHEE <i>(Preference Ranking Organization Method for Enrichment Evaluation)</i> adalah metodologi untuk mengevaluasi alternatif dengan kriteria yang diberikan dan membuat peringkat alternatif untuk keputusan akhir.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#login" style="font-size: 14px;" class="btn-get-started scrollto"><b>CARI INFORMASI </b><i class="icofont-caret-right ml-2"></i></a>
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
        <!-- =======    DATA SECTION    ======= -->
        <section id="login" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>masuk (login) ?</h2>
                </div>
                <div class="row">
                    <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/login.gif') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div style="font-size: 14px; text-align:justify" class="row content">
                            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                <p>
                                    Untuk <b>Masuk (login)</b> ke dalam sistem admin website SPK - Promethee, Anda bisa lihat caranya dibawah ini:
                                </p>
                                <ul>
                                    <li><i class="ri-arrow-right-s-fill"></i> Buka website <b>SPK - Promethee</b> melalui alamat https://promethee.ta-spk.xyz !.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Buka halaman <b>'masuk (login)'</b> dengan melakukan klik pada tombol <b>"Masuk"</b> pada navbar di halaman landing page website SPK - Promethee.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Masukan <b>'Alamat Email'</b> dan <b>'Password'</b> yang digunakan sebagai akun pengguna.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik <b>"Masuk"</b> pada halaman (login) untuk masuk ke dalam sistem admin website SPK - Promethee.</li>
                                </ul>
                                <p>
                                    Catatan:
                                </p>
                                <ul>
                                    <li><i class="ri-arrow-right-s-fill"></i> Jika lupa password yang digunakan untuk login, Anda dapat menjalankan fungsi <b>'Lupa Password'</b> dengan klik tombol <b>"Lupa Password"</b>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======  END DATA SECTION  ======= -->
        <!-- =======   FITUR  SECTION   ======= -->
        <section id="register" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>daftar (register) ?</h2>
                </div>
                <div class="row">
                    <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/register.gif') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div style="font-size: 14px; text-align:justify" class="row content">
                            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                <p>
                                    Untuk <b>Daftar (register)</b> menjadi User atau pengguna pada website SPK - Promethee, Anda bisa lihat caranya dibawah ini:
                                </p>
                                <ul>
                                    <li><i class="ri-arrow-right-s-fill"></i> Buka website <b>SPK - Promethee</b> melalui alamat https://promethee.ta-spk.xyz !.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik <b>"Masuk"</b> pada navbar/menu di halaman landing page untuk mengarahkan Anda ke halaman login/register.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik <b>"Daftar"</b> untuk mengarahkan ke halaman daftar (register).</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Masukan data diri penguna meliputi <b>'Nama'</b>, <b>'Alamat Email'</b> dan <b>'Password'</b> dengan role sebagai User.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik <b>"Daftar"</b> dan Anda akan terdaftar sebagai User website SPK - Promethee.</li>
                                </ul>
                                <p>
                                    Catatan:
                                </p>
                                <ul>
                                    <li><i class="ri-arrow-right-s-fill"></i>  Akun dapat digunakan ketika Admin SPK - Promethee telah mengaktifkan akun Anda.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END FITUR SECTION  ======= -->
        <!-- ======= PROMETHEE SECTION  ======= -->
        <section id="forgotpassword" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>forgot password ?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div style="font-size: 14px; text-align:justify" class="row content">
                            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                <p>
                                    Untuk melakukan fungsi <b>Lupa Password (forgot password)</b>, Anda dapat melihat caranya dibawah ini:
                                </p>
                                <ul>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik tombol <b>"Masuk"</b> pada navbar/menu di halaman landing page, untuk mengarahkan ke halaman login.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik tombol <b>"Lupa Password"</b> untuk mengarahkan ke halaman lupa password (forgot password).</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Masukan <b>'Alamat Email'</b> yang digunakan sebagai akun pengguna terdaftar.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Klik tombol <b>"Kirim Link Lupa Password"</b> untuk mengirimkan link reset password ke email tersebut.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Buka alamat email anda, dan baca email dari SPK - Promethee serta klik tombol <b>"Reset Password"</b> pada email tersebut.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/forgotpassword.gif') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END PROMETHEE SECTION ======= -->
        <!-- =======  RANKING SECTION  ======= -->
        <section id="resetpassword" class="about">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>reset password ?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div style="font-size: 14px; text-align:justify" class="row content">
                            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="150">
                                <p>
                                    Untuk melakukan fungsi <b>Reset Password</b>, Anda harus sudah melakukan fungsi sebelumnya untuk menerima link reset password yang di kirimkan ke alamat email. Dan berikut adalah cara melakukan fungsi reset password:
                                </p>
                                <ul>
                                    <li><i class="ri-arrow-right-s-fill"></i> Buka alamat email yang Anda masukan pada fungsi forgot password.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Buka pesan dari SPK - Promethee dan klik tombol <b>"Reset Password"</b></li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Masukan <b>"Password"</b> baru yang akan digunakan.</li>
                                    <li><i class="ri-arrow-right-s-fill"></i> Akun pengguna dengan password baru anda telah dapat digunakan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="image col-xl-7 align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                        <img src="{{ asset('img/resetpassword.gif') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= END RANKING SECTION ======= -->
        <!-- =======   TENTANG SECTION    ======= -->
        <!-- <section id="tentang" class="about">
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
        </section> -->
        <!-- ======= END TENTANG SECTION  ======= -->
        <!-- =======     F.A.Q SECTION    ======= -->
        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>pertanyaan lain</h2>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h3>Apa itu Sistem Pendukung Keputusan ?</h3>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Bagian dari sistem informasi berbasis komputer (termasuk sistem berbasis pengetahuan (manajemen pengetahuan)) yang dipakai untuk mendukung pengambilan keputusan dalam suatu organisasi atau perusahaan.
                        </p>
                    </div>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h3>Manfaat Metode Promethee dalam Sistem Pendukung Keputusan ?</h3>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Membantu untuk menentukan lokasi embung di Kabupaten Semarang melalui perhitungan data berdasarkan alternatif yang ada.
                        </p>
                    </div>
                </div>
                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h3>Tujuan pembuatan web sistem pendukung keputusan ?</h3>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Pengimplementasian Preference Ranking Organization Method for Enrichment Evaluation pada perancangan Sistem Informasi dengan mengolah data dan kriteria dari Kabupaten Semarang untuk memudahkan penentuan lokasi pembangunan embung di Kabupaten Semarang.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======   END F.A.Q SECTION  ======= -->
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