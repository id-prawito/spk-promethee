@extends('layouts.master')

@section('header')
@section('pages','Promethee')
@section('title','Deviasi')
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
<!-- <script src="{{asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> -->
<script src="{{asset('modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/page/modules-datatables.js')}}"></script>
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
<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
@endpush

@section('content')
<section class="section">
    <!-- @if ($message = Session::get('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif -->
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
                                <p><b>Nilai Deviasi</b> adalah hasil nilai selisih nilai kriteria suatu alternatif dengan alternatif lainnya. Nilai ini dihitung berpasangan secara menyeluruh dari semua alternatif yang ada. Cara menghitung deviasi menggunakan rumus sebagai berikut:</p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?d= f(a) - f(b) " alt="" style="display: block; margin: auto;">
                                <br>
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?d \text{ \space \space \space \space \space}: " alt=""> Selisih nilai kriteria antara alternatif (deviasi)<br>
                                    <img src="https://latex.codecogs.com/gif.latex?f(a) \text{ \space }: " alt=""> Nilai kriteria alternatif a<br>
                                    <img src="https://latex.codecogs.com/gif.latex?f(b) \text{ \space }: " alt=""> Nilai kriteria alternatif b
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
                                    <th>ALTERNATIF</th>
                                    <th>ALTERNATIF</th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>KRITERIA</th>
                                    <th>DEVIASI</th>
                                    <th>ABSOLUT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 0; @endphp
                                @foreach ($showdeviasi as $deviasi => $value)
                                @for ($x = 0; $x < Kustom::CountAlternatifs(); $x++) @for ($y=0; $y < Kustom::CountAlternatifs(); $y++) @php $d=($value[$x]->nilai)-($value[$y]->nilai);
                                    @endphp
                                    <tr align="center">
                                        <td>{{$no++}}</td>
                                        <td>{{$value[$x]->alternatif}}</td>
                                        <td>{{$value[$y]->alternatif}}</td>
                                        <td>{{$value[$x]->nilai}}</td>
                                        <td>{{$value[$y]->nilai}}</td>
                                        <td>{{$value[$y]->kriteria}}</td>
                                        <td>{{$d}}</td>
                                        <td>{{abs($d)}}</td>
                                    </tr>
                                    @endfor
                                    @endfor
                                    @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>NO</th>
                                    <th>ALTERNATIF</th>
                                    <th>ALTERNATIF</th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>KRITERIA</th>
                                    <th>DEVIASI</th>
                                    <th>ABSOLUT</th>
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