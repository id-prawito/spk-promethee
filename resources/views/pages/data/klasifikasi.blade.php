@extends('layouts.master')

@section('header')
@section('pages','Data')
@section('title','Klasifikasi')
@include('layouts.component.header')
@endsection

@push('page-styles')
<!-- Css Datatable -->
<link rel="stylesheet" href="{{asset('modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
<!-- Css Select -->
<link rel="stylesheet" href="{{asset('modules/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('modules/jquery-selectric/selectric.css')}}">
@endpush

@push('page-scripts')
<!-- Js Select -->
<script src="{{asset('modules/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
<!-- Js Modal -->
<script src="{{asset('js/page/bootstrap-modal.js')}}"></script>
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
<script>
    $(document).ready(function() {
        //Pagination numbers
        $('#table-3').DataTable({
            "pagingType": "simple_numbers",
            'info': true,
            'autoWidth': true
        });
    });
</script>
@endpush

@section('content')
<section class="section">

    @if ($message = Session::get('info'))
    <div class="alert alert-success alert-dismissible fade show alert-has-icon" role="alert">
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
    @endif

    @if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-dismissible fade show alert-has-icon" role="alert">
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
    <!-- Tabel Responsive -->
    <div class="row sortable-card">
        <div class="col-12 col-md-6 col-lg-5">
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
                            <div class="col">
                                <p style="text-align: justify;"><b>Klasifikasi</b> adalah penyusunan bersistem dalam kelompok atau golongan menurut kaidah atau standar yang ditetapkan, dimana pada sistem ini masing-masing kriteria mempunyai beberapa klasifikasi yang berbeda dengan nilai yang sudah ditetapkan pada masing-masing klasifikasi di setiap kriterianya. Terdapat 7 Kriteria dengan masing-masing 5 klasifikasi pada 6 kriteria, serta 4 klasifikasi pada 1 kriteria. Total 7 kriteria dengan jumlah klasifikasi keseluruhan 34 dan jumlah ini bisa diperbaharui.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-7">
            <div class="card card-primary">
                <div class="card-header">
                    <button style="background-color: #3460df;line-height:32px; border-radius:5px;" class="btn btn-icon icon-left btn-primary" type="button" data-toggle="collapse" data-target="#tambah" aria-expanded="false" aria-controls="tambah">
                        <i class="far fa-edit"></i> <b>TAMBAH KLASIFIKASI</b>
                    </button>
                </div>
                <div class="collapse" id="tambah">
                    <div class="card-body">
                            <form action="{{route('klasifikasi.create')}}" method="POST" class="form">
                                {{ csrf_field() }}
                                <div class="row">  
                                <div class="col-md">
                                        <div class="form-group">
                                            <h7><b>Kriteria</b></h7>
                                            <div class="input-group mt-2">
                                                <select class="form-control select2 mt-2" style="width: 100%" name="kriteria" data-minimum-results-for-search="-1" required>
                                                <option value="">- Pilih Kriteria</option>
                                                @foreach ($kriteria as $data)
                                                    <option value={{$data->id}}>{{$data->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <h7><b>Nilai</b></h7>
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                </div>
                                                <input class="form-control" type="number" min="1" name="nilai" placeholder="..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <h7><b>Klasifikasi</b></h7>
                                            <div class="input-group mt-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-location-arrow"></i>
                                                    </div>
                                                </div>
                                                <input class="form-control" type="text" id="klasifikasi" name="klasifikasi" placeholder="Klasifikasi..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button style="line-height:26px; margin-top:15px; margin-bottom:23px;" class="btn btn-icon icon-left btn-info" type="submit"><i class="fas fa-info-circle"></i> <b>PROSES KLASIFIKASI</b></button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-1" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>NO</th>
                                    <th>KRITERIA</th>
                                    <th>NILAI</th>
                                    <th>KLASIFIKASI</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;?>
                                @foreach ($klasifikasi as $data)
                                <?php $no++ ;?>
                                <tr align="center">
                                    <td>{{$no}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->nilai}}</td>
                                    <td>{{$data->klasifikasi}}</td>
                                    <td>
                                    <button class="btn btn-icon icon-left btn-warning" data-toggle="modal" data-target="#modaledit{{$data->id}}"><i class="far fa-edit"></i> Edit</button>
                                        <button class="btn btn-icon icon-left btn-danger" data-toggle="modal" data-target="#modaldelete{{$data->id}}"><i class="far fa-trash-alt"></i> Delete</button>
                                        @push('tambahan')
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modaldelete{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6><b>Hapus {{$data->klasifikasi}}</b></h6>
                                                    </div>
                                                    <div class="modal-body mb-0">
                                                        <h7>Apakah anda ingin menghapus Klasifikasi <b>{{$data->klasifikasi}}</b></h7>
                                                    </div>
                                                    <div class="modal-footer br">
                                                        <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                        <form action="{{route('klasifikasi.delete',$data->id)}}" method="GET">
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
                                    @push('tambahan')
                                    <div class="modal fade" tabindex="-1" role="dialog" id="modaledit{{$data->id}}">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h7><b>Edit {{$data->nama}}</b></h7>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('klasifikasi.update')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <br>
                                                        <div class="form-group">
                                                            <h7>Nama Kriteria</h7>
                                                            <input class="form-control mt-2" disabled type="text" name="nama" value="{{$data->nama}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <h7>Nilai Klasifikasi</h7>
                                                            <input class="form-control mt-2" disabled type="number" name="nilai" value="{{$data->nilai}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <h7>Klasifikasi</h7>
                                                            <input class="form-control mt-2" required type="text" name="klasifikasi" value="{{$data->klasifikasi}}">
                                                        </div>
                                                </div>
                                                <div class="modal-footer br">
                                                    <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                    <form action="{{route('klasifikasi.update')}}" method="POST">
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
                                    <th>NO</th>
                                    <th>KRITERIA</th>
                                    <th>NILAI</th>
                                    <th>KLASIFIKASI</th>
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