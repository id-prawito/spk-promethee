@extends('layouts.master')

@section('header')
@section('pages','Promethee')
@section('title','Indeks Preferensi')
@include('layouts.component.header')
@endsection

@push('page-styles')
<!-- Css Datatable -->
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}"> -->
@endpush

@push('page-scripts')
<!-- Js Datatable -->
<script src="{{asset('modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/page/modules-datatables.js')}}"></script>
<!-- <script src="{{asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> -->
<script>
    $(document).ready(function() {
        //Pagination numbers
        $('#table-1').DataTable({
            "pagingType": "simple_numbers",
            'info': true,
            'autoWidth': true
        });
    });
</script>
<script>
    $(document).ready(function() {
        //Pagination numbers
        $('#table-2').DataTable({
            "pagingType": "simple_numbers",
            'info': true,
            'autoWidth': true
        });
    });
</script>
@endpush

@section('content')
<section class="section">
    <!-- Tabel Responsive -->
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Penjelasan</h4>
                    <div class="card-header-action">
                        <a data-collapse="#penjelasan" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="collapse" id="penjelasan">
                    <div class="card-body">
                        <div class="row">
                            <div style="text-align: justify;" class="col">
                                <p>Data preferensi akan digunakan sebagai masukkan perhitungan preferensi. Data preferensi memiliki kaidah minimasi dan maksimasi, tipe preferensi serta parameter. Penentuan kaidah minimasi dan maksimasi disesuaikan dengan kriteria yang diinginkan. Namun tidak mempengaruhi proses perhitungan. Tipe preferensi disajikan dengan 6 bentuk fungsi, yaitu: <b>Kriteria Umum, Kriteria Kuasi, Kriteria Preferensi Linier, Kriteria Level, Kriteria Area, dan Kriteria Gaussion.</b></p><br>
                                <p><b>Nilai Indeks Preferensi</b> adalah intensitas pembuat keputusan yang menyatakan bahwa alternatif a lebih baik dari alternatif b dengan pertimbangan secara simultan dari seluruh kriteria. Hal ini dapat disajikan dengan nilai antara nilai 0 dan 1. Pada masing-masing kriteria mempunyai tipe preferensi yang berbeda dimana setiap preferensi mempunyai nilai perhitungan yang berbeda. Penentuan preferensi pada tiap kriteria didasarkan pada karakter tiap kriteria yang kemudian diputuskan oleh pembuat keputusan. Menghitung nilai indeks preferensi dengan rumus:</p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?\varphi&space;(a,b)&space;=\sum_{i=1}^{n}\:\pi_{i}P_{i}(a,b):\forall&space;a,b\in&space;A" title="\varphi (a,b) =\sum_{i=1}^{n}\:\pi_{i}P_{i}(a,b):\forall a,b\in A" alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi&space;(a,b) \text{\space }: " alt=""> Indeks Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\pi \text{\space \space \space \space \space \space \space \space}: " alt=""> Bobot Kriteria<br>
                                    <img src="https://latex.codecogs.com/gif.latex?P(a,b) \text{\space}: " alt=""> Nilai Preferensi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-1" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>NO</th>
                                    <th>KECAMATAN</th>
                                    <th>KECAMATAN</th>
                                    <th>KRITERIA</th>
                                    <th>TIPE</th>
                                    <th>PREFERENSI</th>
                                    <th>INDEKS PREFERENSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $n = 0;
                                @endphp
                                @foreach ($pref as $show => $value)
                                <tr align="center">
                                    <td>{{$n++}}</td>
                                    <td>{{$value['altx']}}</td>
                                    <td>{{$value['alty']}}</td>
                                    <td>{{$value['kriteria']}}</td>
                                    <td>{{$value['tipe']}}</td>
                                    <td>{{number_format($value['nilai'],2)}}</td>
                                    <td>{{number_format($value['ip'],2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>NO</th>
                                    <th>KECAMATAN</th>
                                    <th>KECAMATAN</th>
                                    <th>KRITERIA</th>
                                    <th>TIPE</th>
                                    <th>PREFERENSI</th>
                                    <th>INDEKS PREFERENSI</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Total Indeks Preferensi</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-2" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>NO</th>
                                    <th>KECAMATAN</th>
                                    <th>KECAMATAN</th>
                                    <th>TOTAL INDEKS PREFERENSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $n = 0;
                                @endphp
                                @foreach ($tip as $show => $value)
                                <tr align="center">
                                    <td>{{$n++}}</td>
                                    <td>{{$value['altx']}}</td>
                                    <td>{{$value['alty']}}</td>
                                    <td>{{number_format($value['value'], 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>NO</th>
                                    <th>KECAMATAN</th>
                                    <th>KECAMATAN</th>
                                    <th>TOTAL INDEKS PREFERENSI</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection