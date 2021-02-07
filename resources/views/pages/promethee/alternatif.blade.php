@extends('layouts.master')

@section('header')
@section('pages','Promethee')
@section('title','Data Alternatif')
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
            "searching": false,
            "paging": false
        });
    });
</script>
@endpush

@section('content')
<section class="section">
    <!-- Tabel Responsive -->
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Detail Kriteria</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>
                <div class="collapse" id="mycard-collapse">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div style="box-shadow: 0 4px 4px rgba(0, 0, 0, 0.03);" class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills flex-column" id="myTab3" role="tablist">
                                                @foreach ($datas['kriterias'] as $kriteria)
                                                <li class="nav-item">
                                                    <a style="margin-bottom: 10px;" class="nav-link " id="{{$kriteria->id}}" data-toggle="tab" href="#{{$kriteria->kode}}" role="tab" aria-controls="home" aria-selected="true"><b>{{$kriteria->kode}}</b> : {{$kriteria->nama}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <div style="box-shadow: 0 0px 0px rgba(0, 0, 0, 0.03);" class="card">
                                        <div class="card-body">
                                            <div class="tab-content no-padding" id="myTab2Content">
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][0]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][0]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '1')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][1]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][1]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '2')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][2]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][2]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '3')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][3]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][3]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '4')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][4]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][4]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '5')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][5]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][5]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '6')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane fade" id="{{$datas['kriterias'][6]->kode}}" role="tabpanel" aria-labelledby="{{$datas['kriterias'][0]->id}}">
                                                    <p style="margin-bottom: 10px;"><b>Keterangan Nilai : {{$datas['kriterias'][6]->nama}}</b></p>
                                                    @foreach ($datas['klasifikasis'] as $data)
                                                    @if ($data->kriteria == '7')
                                                    <div style="padding: 8px 20px;" class="alert alert-info">
                                                        <b>{{$data->nilai}} = {{$data->klasifikasi}} <br></b>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-1" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>ALTERNATIF</th>
                                    @foreach ($datas['kriterias'] as $kriteria)
                                    <th>{{$kriteria->kode}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                            @php
                                    foreach ($datas['alternatifs'] as $alternatif)
                                    {
                                        echo '<tr align="center">';
                                        echo '<td align="center">' . $alternatif->nama . '</td>';
                                        
                                        $getevals=Kustom::JoinanTabel($alternatif->id);
                                        
                                        foreach ($getevals as $evals) {
                                            echo '<td>' . $evals->nilai . '</td>';
                                        }
                                        
                                        echo '</tr>';
                                    }
                            @endphp
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>ALTERNATIF</th>
                                    @foreach ($datas['kriterias'] as $kriteria)
                                    <th>{{$kriteria->kode}}</th>
                                    @endforeach
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