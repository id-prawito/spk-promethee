@extends('layouts.master')
@section('title','Home')

@push('page-styles')
<link rel="stylesheet" href="{{asset('modules/chocolat/dist/css/chocolat.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
@endpush

@push('page-scripts')
<script src="{{asset('modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{asset('modules/jquery-ui/jquery-ui.min.js')}}"></script>
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
            'autoWidth': true,
            "searching": false,
            "paging": false
        });
    });
</script>
@endpush

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card card-statistic-2">
                <div style="background-color:#3460df !important" class="card-icon shadow-primary">
                    <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Evaluasi</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card card-statistic-2">
                <div style="background-color:#3460df !important" class="card-icon shadow-primary">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Alternatif</h4>
                    </div>
                    <div class="card-body">
                        {{Kustom::CountAlternatifs()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card card-statistic-2">
                <div style="background-color:#3460df !important" class="card-icon shadow-primary">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Kriteria</h4>
                    </div>
                    <div class="card-body">
                        {{Kustom::CountKriterias()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card card-statistic-2">
                <div style="background-color:#3460df !important" class="card-icon shadow-primary">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Akun</h4>
                    </div>
                    <div class="card-body">
                        {{Kustom::CountUsers()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($corona as $key => $value)
    @if ($key == 'Indonesia')
    <div class="section-body">
        <h2 style="margin-top: 0px;" class="section-title">Data Corona Virus Indonesia</h2>
        <p class="section-lead">
            Update Terkahir : <b>Jateng</b> : <span>{{$yesterday}}</span> dan <b>Indonesia</b> : {{$value[$days_count]['date']}}
        </p>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div style="border-top:2px solid #3460df; background:#3460df;" class="card text-center">
                <div style="padding: 10px 10px;" class="card-body">
                    <div class="col">
                        <h6 style="font-weight: 700; font-size:14px;color:#fff" class="card-title"><b>TOTAL TERKONFIRMASI</b></h6>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px;color:#fff" class="card-text"><b>Jateng</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px;color:#fff" class="card-text"><b>Indonesia</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#fff; font-weight:600;" class="card-text"><b>{{number_format($corona_jawaTengah[2]['attributes']['Kasus_Posi'])}}</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#fff; font-weight:600;" class="card-text"><b>{{number_format($value[$days_count]['confirmed'])}}</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#fff" class="card-text"><b><i class="fas fa-angle-up"></i> -</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#fff" class="card-text"><b><i class="fas fa-angle-up"></i> {{number_format($value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'])}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div style="border-top:2px solid #ceb546" class="card text-center">
                <div style="padding: 10px 10px;" class="card-body">
                    <div class="col">
                        <h6 style="font-weight: 700; font-size:14px;" class="card-title"><b>DALAM PERAWATAN</b></h6>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px" class="card-text"><b>Jateng</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px" class="card-text"><b>Indonesia</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#ceb546; font-weight:600;" class="card-text"><b>{{number_format($corona_jawaTengah[2]['attributes']['Kasus_Posi']-$corona_jawaTengah[2]['attributes']['Kasus_Semb']-$corona_jawaTengah[2]['attributes']['Kasus_Meni'])}}</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#ceb546; font-weight:600;" class="card-text"><b>{{number_format($value[$days_count]['confirmed']-$value[$days_count]['recovered']-$value[$days_count]['deaths'])}}</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#ceb546" class="card-text"><b><i class="fas fa-angle-up"></i> -</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#ceb546" class="card-text"><b><i class="fas fa-angle-up"></i> {{number_format(($value[$days_count]['confirmed']-$value[$days_count]['recovered']-$value[$days_count]['deaths'])-($value[$days_count_prev]['confirmed']-$value[$days_count_prev]['recovered']-$value[$days_count_prev]['deaths']))}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div style="border-top:2px solid #27ae60" class="card text-center">
                <div style="padding: 10px 10px;" class="card-body">
                    <div class="col">
                        <h6 style="font-weight: 700; font-size:14px;" class="card-title"><b>SELESAI PERAWATAN</b></h6>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px" class="card-text"><b>Jateng</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px" class="card-text"><b>Indonesia</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#27ae60; font-weight:600;" class="card-text"><b>{{number_format($corona_jawaTengah[2]['attributes']['Kasus_Semb'])}}</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#27ae60; font-weight:600;" class="card-text"><b>{{number_format($value[$days_count]['recovered'])}}</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#27ae60" class="card-text"><b><i class="fas fa-angle-up"></i> -</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#27ae60" class="card-text"><b><i class="fas fa-angle-up"></i> {{number_format($value[$days_count]['recovered']-$value[$days_count_prev]['recovered'])}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div style="border-top:2px solid #a20e0e" class="card text-center">
                <div style="padding: 10px 10px;" class="card-body">
                    <div class="col">
                        <h6 style="font-weight: 700; font-size:14px;" class="card-title"><b>MENINGGAL</b></h6>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px" class="card-text"><b>Jateng</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 16px; margin-top:2px" class="card-text"><b>Indonesia</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#a20e0e; font-weight:600;" class="card-text"><b>{{number_format($corona_jawaTengah[2]['attributes']['Kasus_Meni'])}}</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 22px; margin-top:8px; color:#a20e0e; font-weight:600;" class="card-text"><b>{{number_format($value[$days_count]['deaths'])}}</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#a20e0e;" class="card-text"><b><i class="fas fa-angle-up"></i> -</b></p>
                            </div>
                            <div class="col">
                                <p style="font-size: 13px; margin-top:8px; color:#a20e0e;" class="card-text"><b><i class="fas fa-angle-up"></i> {{number_format($value[$days_count]['deaths']-$value[$days_count_prev]['deaths'])}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <div class="row sortable-card">
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Ranking</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-1" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>RANK</th>
                                    <th>NETFLOW</th>
                                    <th>ALTERNATIF</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                    <th>RANK</th>
                                    <th>NETFLOW</th>
                                    <th>ALTERNATIF</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-7">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Peta Semarang</h4>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="475" frameborder="0" src="https://prawito.carto.com/builder/0a97a764-9180-4d4b-8c9e-c04c0421e6db/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection