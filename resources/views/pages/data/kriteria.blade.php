@extends('layouts.master')

@section('header')
@section('pages','Data')
@section('title','Kriteria')
@include('layouts.component.header')
@endsection

@push('page-styles')
<link rel="stylesheet" href="{{asset('modules/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/jquery-selectric/selectric.css')}}">
<link rel="stylesheet" href="{{asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
@endpush

@push('page-scripts')
<script src="{{asset('modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<script src="{{asset('modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/page/modules-datatables.js')}}"></script>
<script>
    $(document).ready(function() {
        //Pagination numbers
        $('#paginationSimpleNumbers').DataTable({
            "pagingType": "simple_numbers"
        });
    });
</script>
@endpush

@section('content')
@if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible fade show alert-has-icon" role="alert">
        <div class="alert-icon">
            <i class="far fa-check-circle"></i>
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
            <div class="card-body">
                <div class="table-responsive">
                    <table id="paginationSimpleNumbers" class="table table-striped" width="100%">
                        <thead style="text-align:center;">
                            <tr>
                                <th>ID</th>
                                <th>KRITERIA</th>
                                <th>PARAMETER</th>
                                <th>TIPE</th>
                                <th>q</th>
                                <th>p</th>
                                <th>BOBOT</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            @foreach ($kriterias as $data)
                            <tr align="center">
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->minmaks }}</td>
                                <td>{{ $data->pref_nama }}</td>
                                <td>{{ $data->q }}</td>
                                <td>{{ $data->p }}</td>
                                <td>{{ $data->bobot }}%</td>
                                <td>
                                    <button class="btn btn-icon icon-left btn-warning" data-toggle="modal" data-target="#modaledit{{$data->id}}"><i class="far fa-edit"></i> Edit</button>
                                </td>
                                @push('tambahan')
                                <div class="modal fade" tabindex="-1" role="dialog" id="modaledit{{$data->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h7><b>Edit {{$data->nama}}</b></h7>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('kriteria.update', $data->id)}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$data->id}}">
                                                    <br>
                                                    <div class="form-group">
                                                        <h7>Nama Kriteria</h7>
                                                        <input class="form-control mt-2" autofocus type="text" name="nama" value="{{$data->nama}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <h7>Parameter</h7>
                                                        <div class="input-group mt-2">
                                                            <select class="form-control select2" style="width: 100%; margin-top:5px" name="minmaks" value="{{$data->minmaks}}" data-minimum-results-for-search="-1" required>
                                                                <option name="minmaks" value="{{$data->minmaks}}">{{$data->minmaks}}
                                                                </option>
                                                                @if ($data->minmaks == 'min')
                                                                <option value="maks">maks</option>
                                                                @elseif ($data->minmaks != 'min')
                                                                <option value="min">min</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h7>Tipe</h7>
                                                        <div class="input-group mt-2">
                                                            <select class="form-control select2 mt-2" name="pref" style="width: 100%" value="{{$data->pref}}" data-minimum-results-for-search="-1" required>
                                                                @foreach ($preferensis as $pref)
                                                                <option value="{{$pref->id}}" {{$pref->id == $data->pref ? 'selected' : '' }}>{{$pref->nama}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h7>q</h7>
                                                        <input class="form-control mt-2" type="number" name="q" value="{{$data->q}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <h7>p</h7>
                                                        <input class="form-control mt-2" type="number" name="p" value="{{$data->p}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <h7>Bobot</h7>
                                                        <input disabled class="form-control mt-2" type="number" name="bobot" value="{{$data->bobot}}">
                                                    </div>
                                            </div>
                                            <div class="modal-footer br">
                                                <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                <form action="{{route('kriteria.update', $data->id)}}" method="POST">
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
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot style="text-align:center; color:#666">
                            <tr>
                                <th>ID</th>
                                <th>KRITERIA</th>
                                <th>PARAMETER</th>
                                <th>TIPE</th>
                                <th>q</th>
                                <th>p</th>
                                <th>BOBOT</th>
                                <th>OPSI</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection