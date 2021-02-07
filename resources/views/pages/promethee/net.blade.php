@extends('layouts.master')

@section('header')
@section('pages','Promethee')
@section('title','Net Flow')
@include('layouts.component.header')
@endsection

@push('page-styles')
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endpush

@push('page-scripts')
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
            "searching": false,
            "paging": false
        });
    });
</script>
@endpush

@section('content')
<section class="section">
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
                                <p><b><i>Net Flow</i></b> merupakan perhitungan terakhir dari metode PROMETHEE. Cara menghitung <i>net flow</i> adalah dengan mengurangi nilai <i>leaving flow</i> dengan <i>entering flow</i> suatu alternatif. Rumus untuk menghitung <i>net flow</i> adalah sebagai berikut:</p>
                                <img src="https://latex.codecogs.com/gif.latex?\varphi(a) = \varphi^{+}(a)-\varphi^{-}(a)" title="\varphi(a) = \varphi^{+}(a)-\varphi^{-}(a)" alt="" style="display: block; margin: auto;">
                                <p class="mb-0 mt-2">Keterangan:<br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi(a) \text{\space \space \space \space}: " alt=""> <i>Net Flow</i><br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi^{+}(a) \text{\space \space}: " alt=""> <i>Leaving Flow</i><br>
                                    <img src="https://latex.codecogs.com/gif.latex?\varphi^{-}(a) \text{\space \space}: " alt=""> <i>Entering Flow</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Ranking</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table id="table-1" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>RANK</>
                                    <th>NETFLOW</th>
                                    <th>ALTERNATIF</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach ($arraynet as $net => $value)
                                    <tr align="center">
                                        <td>{{$value['rank']}}</td>
                                        <td>{{number_format($value['net'], 4)}}</td>
                                        <td>{{$value['alternatif']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>RANK</>
                                    <th>NETFLOW</th>
                                    <th>ALTERNATIF</th>
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