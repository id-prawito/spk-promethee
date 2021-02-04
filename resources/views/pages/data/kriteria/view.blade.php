@extends('layouts.master')

@section('header')
@section('pages','Data')
@section('title',$datas['getkriteria']->nama)
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
            "pagingType": "simple_numbers"
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
    @if($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show alert-has-icon" role="alert">
        <div class="alert-icon">
            <i class="far fa-lightbulb"></i>
        </div>
        <div class="alert-body">
            <div class="alert-title" style="font-weight:normal">Pemberitahuan</div>
            {{$message}}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Keterangan</h4>
                    <div class="card-header-action">
                        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="collapse" id="mycard-collapse">
                    <div class="card-body">
                        <div class="table">
                            <table id="table-2" class="table table-striped" width="100%">
                                <thead style="text-align:center;">
                                    <tr>
                                        <th>NILAI</>
                                        <th>KLASIFIKASI</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center;">
                                    @foreach ($datas['getklasifikasi'] as $data)
                                    @if ($data->nama == $datas['getkriteria']->nama)
                                        <tr>
                                            <td>{{$data->nilai}}</td>
                                            <td>{{$data->klasifikasi}}</td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>NILAI</th>
                                    <th>KLASIFIKASI</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabel Responsive -->
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table id="table-1" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>NO</th>
                                    <th>ALTERNATIF</th>
                                    <th>NILAI</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $data)
                                <tr align="center">
                                    <td>{{ $data->alternatif }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->nilai }}</td>
                                    <td>
                                        <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#modaledit{{$data->id}}"><i class="far fa-edit"></i> Edit</button>
                                        @push('tambahan')
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modaledit{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h7><b>Edit {{$datas['getkriteria']->nama}} {{$data->nama}}</b></h7>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('evaluasi.update')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <br>
                                                            <div class="form-group">
                                                                <h7>Alternatif</h7>
                                                                <input class="form-control mt-2" type="text" name="nama" value="{{$data->nama}}" disabled required>
                                                            </div>
                                                            <div class="form-group">
                                                                <h7>Nilai</h7>
                                                                <input class="form-control mt-2" type="number" min="1" max="5" name="nilai" value="{{$data->nilai}}" required>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                        <form action="" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <button type="submit" class="btn btn-icon icon-left btn-success"><i class="fas fa-save"></i> Simpan</button>
                                                        </form>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endpush
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>NO</th>
                                    <th>ALTERNATIF</th>
                                    <th>NILAI</th>
                                    <th>OPSI</th>
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