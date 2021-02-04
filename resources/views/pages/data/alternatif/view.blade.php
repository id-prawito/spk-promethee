@extends('layouts.master')

@section('header')
@section('pages','Data')
@section('title','Alternatif')
@include('layouts.component.header')
@endsection

@push('page-styles')
<link rel="stylesheet" href="{{asset('modules/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/jquery-selectric/selectric.css')}}">
<link rel="stylesheet" href="{{asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
<!-- Css Datatable -->
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('css/datatables2.min.css')}}"> -->
@endpush

@push('page-scripts')
<script src="{{asset('modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<!-- Page Specific JS File -->
<!-- Js Datatable -->
<script src="{{asset('modules/datatables/datatables.min.js')}}"></script>
<script src="{{asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/page/modules-datatables.js')}}"></script>
<!-- <script src="{{asset('js/mdb.min.js')}}"></script>
<script src="{{asset('js/datatables2.min.js')}}"></script> -->
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
<section class="section">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show alert-has-icon" role="alert">
        <div class="alert-icon">
            <i class="far fa-check-circle"></i>
        </div>
        <div class="alert-body">
            <div class="alert-title" style="font-weight:normal">Sukses</div>
            {{$message}}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @elseif($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show alert-has-icon" role="alert">
        <div class="alert-icon">
            <i class="far fa-trash-alt"></i>
        </div>
        <div class="alert-body">
            <div class="alert-title" style="font-weight:normal">Peringatan</div>
            {{$message}}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @elseif($message = Session::get('info'))
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
                <div class="card-body">
                    <button style="background-color: #3460df;line-height:26px;" class="btn btn-icon icon-left btn-primary" type="button" data-toggle="collapse" data-target="#tambahAlternatif" aria-expanded="false" aria-controls="tambahAlternatif">
                        <i class="far fa-edit"></i> <b>TAMBAH ALTERNATIF</b>
                    </button>
                    <div class="collapse" id="tambahAlternatif">
                        <form action="{{route('alternatif.create')}}" method="POST" class="form">
                            {{ csrf_field() }}
                            <br>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>ID Alternatif</b></h7>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-location-arrow"></i>
                                                </div>
                                            </div>
                                            <input class="form-control" type="number" min="1" name="id" placeholder="ID Alternatif..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Nama Alternatif</b></h7>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-location-arrow"></i>
                                                </div>
                                            </div>
                                            <input class="form-control" type="text" name="nama" placeholder="Alternatif..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Kode Alternatif</b></h7>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <input class="form-control" type="text" name="kode" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><b>Nilai Kriteria : </b></p>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Vegetasi Area Genangan Embung</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Vegetasi Area G. E.')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Volume Material Timbunan</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Volume Material T.')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Luas Daerah Yang Akan Dibebaskan</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Luas Daerah Y. A. D.')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Volume Tampungan Efektif</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Volume Tampungan E.')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Lama Operasi</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Lama Operasi')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Harga Air/M3</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Harga Air/M3')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <h7><b>Akses Jalan Menuju Site Bendungan</b></h7>
                                        <div class="input-group mt-2">
                                            <select class="form-control select2 mt-2" style="width: 100%" name="kriteria[]" data-minimum-results-for-search="-1" required>
                                                @foreach ($datas['getklasifikasi'] as $data)
                                                @if ($data->nama == 'Akses Jalan Menuju S')
                                                <option value={{$data->nilai}}>{{$data->klasifikasi}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                </div>
                                <div class="col-md">
                                </div>
                            </div>
                            <button style="line-height:26px;" class="btn btn-icon icon-left btn-info" type="submit"><i class="fas fa-info-circle"></i> <b>PROSES ALTERNATIF</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabel Responsive -->
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="paginationSimpleNumbers" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA ALTERNATIF</th>
                                    <th>KODE</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach ($alternatifs as $data)
                                <tr align="center">
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->nama }}</td>
                                    <td>{{$data->kode }}</td>
                                    <td><button class="btn btn-icon icon-left btn-warning" data-toggle="modal" data-target="#modaledit{{$data->id}}"><i class="far fa-edit"></i> Edit</button>
                                        @push('tambahan')
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modaledit{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h7><b>Edit Alternatif {{$data->nama}}</b></h7>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('alternatif.update', $data->id)}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <br>
                                                            <div class="form-group">
                                                                <h7>Nama Alternatif</h7>
                                                                <input class="form-control mt-2" type="text" name="nama" value="{{$data->nama}}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <h7>Kode</h7>
                                                                <input class="form-control mt-2" type="text" name="kode" value="{{$data->kode}}" required>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                        <form action="{{route('alternatif.update', $data->id)}}" method="POST">
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
                                        <button class="btn btn-icon icon-left btn-danger" data-toggle="modal" data-target="#modaldelete{{$data->id}}"><i class="far fa-trash-alt"></i> Delete</button>
                                        @push('tambahan')
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modaldelete{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6><b>Hapus {{$data->nama}}</b></h6>
                                                    </div>
                                                    <div class="modal-body mb-0">
                                                        <h7>Apakah anda ingin menghapus Alternatif <b>{{$data->nama}}</b></h7>
                                                    </div>
                                                    <div class="modal-footer br">
                                                        <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                        <form action="{{route('alternatif.delete',$data->id)}}" method="GET">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <button type="submit" class="btn btn-icon icon-left btn-danger"><i class="far fa-trash-alt"></i> Ya</button>
                                                        </form>
                                                    </div>
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
                                    <th>ID</th>
                                    <th>NAMA ALTERNATIF</th>
                                    <th>KODE</th>
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