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
                    <h4>Rangking</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="table-responsive">
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
                        <div class="col">
                            <img class="img-fluid" src="{{ asset('img/img-3.png') }}" alt="tag">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection