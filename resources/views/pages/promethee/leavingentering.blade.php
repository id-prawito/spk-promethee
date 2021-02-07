@extends('layouts.master')

@section('header')
@section('pages','Promethee')
@section('title','Leaving & Entering Flow')
@include('layouts.component.header')
@endsection

@push('page-styles')
<!-- Css Datatable -->
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endpush

@push('page-scripts')
<!-- Js Datatable -->
<script src="{{asset('modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
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
                        <a data-collapse="#penjelasan" class="btn btn-icon btn-info" href="#"><i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>
                <div class="collapse" id="penjelasan">
                    <div class="card-body">
                        <div class="row">
                            <div style="text-align: justify;" class="col">
                                <p><b><i>a. Leaving Flow</i></b> adalah jumlah nilai garis lengkung yang memiliki arah menjauh dari simpul a dan ini merupakan karakter pengukuran outranking. Leaving flow merupakan faktor kelebihan (strength) karena merupakan perbandingan nilai total indeks preferensi suatu alternatif dengan alternatif lainnya.</p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?\varphi^{+}(a)=\frac{1}{1-n}\sum_{b=1\:b\neq&space;1}^{n}\varphi(a,b)" title="\varphi^{+}(a)=\frac{1}{1-n}\sum_{b=1\:b\neq 1}^{n}\varphi(a,b)" alt="" style="display: block; margin: auto;">
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi^{+}(a) \text{\space \space}: " alt=""> Bobot Kriteria<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi&space;(a,b) \text{\space }: " alt=""> Nilai Indeks Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?n \text{\space \space \space \space \space \space \space \space}: " alt=""> Jumlah Alternatif
                                </p>
                                <br>
                                <p><b><i>b. Entering Flow</i></b> adalah jumlah nilai garis lengkung yang memiliki arah mendekat dari simpul a dan ini merupakan karakter pengukuran outranking. Entering flow merupakan faktor kekurangan (weakness) karena merupakan perbandingan nilai total indeks preferensi semua alternatif dengan suatu alternatif.</p>
                                <br>
                                <img src="https://latex.codecogs.com/gif.latex?\varphi^{-}(a)=\frac{1}{1-n}\sum_{b=1\:b\neq&space;1}^{n}\varphi(b,a)" title="\varphi^{+}(a)=\frac{1}{1-n}\sum_{b=1\:b\neq 1}^{n}\varphi(a,b)" alt="" style="display: block; margin: auto;">
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi^{-}(a) \text{\space \space}: " alt=""> Bobot Kriteria<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi&space;(b,a) \text{\space }: " alt=""> Nilai Indeks Preferensi<br>
                                    <img src="https://latex.codecogs.com/gif.latex?n \text{\space \space \space \space \space \space \space \space}: " alt=""> Jumlah Alternatif
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
                            <thead>
                                <tr align="center">
                                    {{-- <td>Alternatif</td> --}}
                                    @for($a = 1; $a <= Kustom::CountAlternatifs(); $a++) <td>A{{$a}}</td>
                                        @endfor
                                        <td>Leaving</td>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    @for($y = 0; $y < Kustom::CountAlternatifs(); $y++) @php $temp=null; @endphp @for($x=0; $x < Kustom::CountAlternatifs(); $x++) @if($x==$y) <td><b>{{number_format($tip[$y][$x]['value'], 2)}}</b></td>
                                        @else
                                        <td>{{number_format($tip[$y][$x]['value'], 2)}}</td>
                                        @endif
                                        @php $temp = $temp + $tip[$y][$x]['value']; @endphp
                                        @endfor
                                        @php
                                        $temp = $temp / (Kustom::CountAlternatifs() - 1);
                                        @endphp
                                        <td style="background-color: #EEEEEE">{{number_format($temp, 2)}}</td>
                                </tr>
                                @endfor
                                <tr>
                                    @for($y = 0; $y < Kustom::CountAlternatifs(); $y++) @php $temp=null; @endphp @for($x=0; $x < Kustom::CountAlternatifs(); $x++) @php $temp=$temp + $tip[$x][$y]['value']; @endphp @endfor @php $temp=$temp / (Kustom::CountAlternatifs() - 1); @endphp <td style="background-color: #EEEEEE">{{number_format($temp, 2)}}</td>
                                        @endfor

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection