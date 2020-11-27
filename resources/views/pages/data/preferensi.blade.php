@extends('layouts.master')

@section('header')
@section('pages','Data')
@section('title','Preferensi')
@include('layouts.component.header')
@endsection

@push('page-styles')

@endpush

@push('page-scripts')
<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script>
<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
@endpush

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="col">
                        <h2 class="section-title mt-2">Tipe Preferensi</h2>
                        <p style="text-align: justify;" class=" section-lead">
                            Untuk setiap kriteria, fungsi preferensi menerjemahkan perbedaan antara dua alternatif menjadi derajat preferensi mulai dari nol sampai satu. Struktur preferensi PROMETHEE berdasarkan perbandingan berpasangan. Semakin kecil nilai deviasi maka semakin kecil nilai preferensinya, semakin besar deviasi semakin besar preferensinya. Dalam rangka memfasilitasi pemilihan fungsi preferensi tertentu, Brans dan Vincke, mengusulkan 6 (enam) tipe dasar sebagai berikut (Brans and Vincke, 1985):
                            <br>
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div id="accordion">
                        <div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                <h4>Preferensi 1 : Kriteria Biasa (Usual Criterion)</h4>
                            </div>
                            <div style="text-align: justify;" class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                <p class="mb-0">Tipe Usual adalah tipe dasar, yang tidak memiliki nilai threshold atau kecenderungan dan tipe ini jarang digunakan. Secara matematis dapat dituiskan dalam notasi berikut:<br />
                                </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?p(x)=\begin{cases} 0 \text{ \space \space \space \space } \forall x \leqslant 0,\\ 1 \text{ \space \space \space \space } \forall x > 0; \end{cases}" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?p(x): " alt=""> Nilai Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?x \text{ \space \space \space }: " alt=""> Selisih nilai kriteria antara alternatif
                                </p>
                                <p class="mb-0 mt-2">Pada tipe ini dianggap tidak ada beda antara alternatif $a$ dan alternatif $b$ jika $a=b$ atau $f(a)=f(b)$ , maka niliai preferensinya benilai 0 (Nol) atau $p(x)=0$. Apabila nilai kriteria pada masing-masing alternatif memiliki nilai berbeda, maka pembuat keputusan membuat preferensi mutlak benilai 1 (Satu) atau $p(x)=1$ untuk alternatif yang memiliki nilai lebih baik. <br />
                                </p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                <h4>Preferensi 2 : Kriteria Quasi (Quasi Criterion atau U-Shape)</h4>
                            </div>
                            <div style="text-align: justify;" class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                <p class="mb-0">Tipe Quasi sering digunakan dalam penilaian suatu data dari segi kwalitas atau mutu, yang mana tipe ini menggunakan Satu threshold atau kecenderungan yang sudah ditentukan, dalam kasus ini threshold itu adalah indifference. Indifference ini biasanya dilambangkan dengan karakter $m$ atau $q$, dan nilai indifference harus diatas 0 (Nol).<br />
                                </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?H(d)=\begin{cases} 0 \text{ \space \space \space \space } jika -q \leq d \leq q ,\\ 1 \text{ \space \space \space \space } jika \text{\space} d < -q \text{\space} atau \text{\space} d > q ; \end{cases}" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?H(d): " alt=""> Nilai Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?d \text{ \space \space \space \space }: " alt=""> Selisih nilai kriteria antara alternatif<br>
                                    <img src="https://latex.codecogs.com/gif.latex?q \text{ \space \space \space \space }: " alt=""> Batas Indeferen (Kuartil bawah atau Q1)
                                </p>
                                <p class="mb-0 mt-2">Pada kasus ini, dua alternatif memiliki preferensi yang sama penting selama selisih atau nilai $H(d)$ dari masing-masing alternatif untuk kriteria tertentu tidak melebihi nilai $q$, dan apabila selisih hasil evaluasi untuk masing – masing alternatif melebihi nilai $q$ maka terjadi bentuk preferensi mutlak. <br />
                                </p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-3">
                                <h4>Preferensi 3 : Kriteria dengan preferensi Linier (Criterion with Linear Preference atau V-Shape)</h4>
                            </div>
                            <div style="text-align: justify;" class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                <p class="mb-0">Tipe Linier acapkali digunakan dalam penilaian dari segi kuantitatif atau banyaknya jumlah, yang mana tipe ini juga menggunakan Satu threshold atau kecenderungan yang sudah ditentukan, dalam kasus ini threshold itu adalah preference.<br />
                                </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?H(d)=\begin{cases} \frac{d}{p} \text{ \space \space \space \space } jika -p \leq d \leq p ,\\ 1 \text{ \space \space \space \space } jika \text{\space} d < -p \text{\space} atau \text{\space} d > p ; \end{cases}" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?H(d): " alt=""> Nilai Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?d \text{ \space \space \space \space }: " alt=""> Selisih nilai kriteria antara alternatif<br>
                                    <img src="https://latex.codecogs.com/gif.latex?p \text{ \space \space \space \space }: " alt=""> Batas Preferensi (Kuartil atas atau Q3)
                                </p>
                                <p class="mb-0 mt-2">Kriteria preferensi linier menjelaskan bahwa selama nilai selisih memiliki nilai yang lebih rendah dari $p$, maka preferensi dari pembuat keputusan akan meningkat secara linier dengan nilai $d$. Jika nilai $d$ lebih besar daripada nilai $p$, maka akan terjadi preferensi mutlak. <br />
                                </p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-4">
                                <h4>Preferensi 4 : Linear Quasi / Area (Criterion with Linear Preference and Indifference Area)</h4>
                            </div>
                            <div style="text-align: justify;" class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                <p class="mb-0">Tipe Linear Quasi juga mirip dengan tipe Linear yang acapkali digunakan dalam penilaian dari segi kuantitatif atau banyaknya jumlah. Tipe ini juga menggunakan threshold preference (n atau p) tetapi ditambahkan Satu threshold lagi yaitu indifference (m atau q).<br />
                                </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?H(d)=\begin{cases} \text{\space} 0 \text{ \space \space \space \space \space \space } jika \text{\space} |\text{\space}d\text{\space}| \leq q \\ \frac{|\text{\space}d\text{\space}|-q}{p-q} \text{\space} jika \text{\space} q < |\text{\space}d\text{\space}| \leq p \\ \text{\space} 1 \text{ \space \space \space \space \space \space } jika \text{\space } p < |\text{\space}d\text{\space}| \end{cases}" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?H(d): " alt=""> Nilai Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?d \text{ \space \space \space \space }: " alt=""> Selisih nilai kriteria antara alternatif<br>
                                    <img src="https://latex.codecogs.com/gif.latex?q \text{ \space \space \space \space }: " alt=""> Batas Indeferen (Kuartil bawah atau Q1)<br>
                                    <img src="https://latex.codecogs.com/gif.latex?p \text{ \space \space \space \space }: " alt=""> Batas Preferensi (Kuartil atas atau Q3)
                                </p>
                                <p class="mb-0 mt-2">Pada kasus ini, pengambilan keputusan mempertimbangkan peningkatan preferensi secara linier dari area yang tidak berbeda, sehingga preferensi mutlak dalam area berada di antara dua kecenderungan $q$ dan $p$. <br />
                                </p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-5">
                                <h4>Preferensi 5 : Kriteria Level (Level Criterion)</h4>
                            </div>
                            <div style="text-align: justify;" class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                                <p class="mb-0">Tipe Linear Quasi juga mirip dengan tipe Linear yang acapkali digunakan dalam penilaian dari segi kuantitatif atau banyaknya jumlah. Tipe ini juga menggunakan threshold preference (n atau p) tetapi ditambahkan Satu threshold lagi yaitu indifference (m atau q).<br />
                                </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?H(d)=\begin{cases} \text{\space} 0 \text{ \space \space \space \space \space \space } jika \text{\space} |\text{\space}d\text{\space}| \leq q \\ 0.5 \text{\space \space \space \space \space} jika \text{\space} q < |\text{\space}d\text{\space}| \leq p \\ \text{\space} 1 \text{ \space \space \space \space \space \space } jika \text{\space } p < |\text{\space}d\text{\space}| \end{cases}" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?H(d): " alt=""> Nilai Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?d \text{ \space \space \space \space }: " alt=""> Selisih nilai kriteria antara alternatif<br>
                                    <img src="https://latex.codecogs.com/gif.latex?q \text{ \space \space \space \space }: " alt=""> Batas Indeferen (Kuartil bawah atau Q1)<br>
                                    <img src="https://latex.codecogs.com/gif.latex?p \text{ \space \space \space \space }: " alt=""> Batas Preferensi (Kuartil atas atau Q3)
                                </p>
                                <p class="mb-0 mt-2">Pada kasus ini, kecenderungan tidak berbeda $q$ dan kecenderungan preferensi $p$, ditentukan secara simultan. Jika $d$ berada di antara nilai $q$ dan $p$, maka hal ini berarti bahwa situasi preferensi lemah $(H(d) = 0.5)$. <br />
                                </p>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header pt-4 pb-4" role="button" data-toggle="collapse" data-target="#panel-body-6">
                                <h4>Preferensi 6 : Kriteria Gaussian (Gaussian Criterion)</h4>
                            </div>
                            <div style="text-align: justify;" class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                                <p class="mb-0">Tipe Linear Quasi juga mirip dengan tipe Linear yang acapkali digunakan dalam penilaian dari segi kuantitatif atau banyaknya jumlah. Tipe ini juga menggunakan threshold preference (n atau p) tetapi ditambahkan Satu threshold lagi yaitu indifference (m atau q).<br />
                                </p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?H(d) = 1 - exp \left \{ -\frac{d^{2}}{d\sigma^{2}} \right \}" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?H(d): " alt=""> Nilai Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?d \text{ \space \space \space \space }: " alt=""> Selisih nilai kriteria antara alternatif<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\sigma \text{ \space \space \space \space }: " alt=""> Deviasi Standar Populasi
                                </p>
                                <p class="mb-0 mt-2">Fungsi ini bersyarat apabila telah ditentukan nilai $\sigma$ , dimana dapat dibuat berdasarkan distribusi normal dalam statistik. <br />
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