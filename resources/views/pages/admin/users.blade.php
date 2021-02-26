@extends('layouts.master')

@section('header')
@section('pages','Options')
@section('title','Users')
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
<script>
    $(document).ready(function() {
        //Pagination numbers
        $('#table-2').DataTable({
            "pagingType": "simple_numbers",
            "lengthChange": false,
            "paging": false
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

    @elseif($message = Session::get('error'))
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

    @error('email')
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
    @enderror

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
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>ROLE</th>
                                    <!-- <th>STATUS</th> -->
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach ($datas as $data)
                                <tr align="center">
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <!-- <td>{{ $data->name }}</td> -->
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->role }}</td>
                                    <td>
                                        <button class="btn btn-icon icon-left btn-warning" data-toggle="modal" data-target="#modaledit{{$data->id}}"><i class="far fa-edit"></i> Edit</button>
                                        @push('tambahan')
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modaledit{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h7><b>Edit Users {{$data->name}}</b></h7>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('pengguna.update', $data->id)}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <br>
                                                            <div class="form-group">
                                                                <h7>Nama</h7>
                                                                <input class="form-control mt-2" type="text" name="name" value="{{$data->name}}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <h7>Email</h7>
                                                                <input class="form-control mt-2" type="text" name="email" value="{{$data->email}}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <h7>Role</h7>
                                                                <div class="input-group mt-2">
                                                                    <select class="form-control select2" style="width: 100%;" data-minimum-results-for-search=" -1" name="role" value="{{$data->role}}" required>
                                                                        <option name="role" value="{{$data->role}}">{{$data->role}}</option>
                                                                        @if ($data->role == 'User')
                                                                        <option value="Administrator">Administrator</option>
                                                                        @elseif ($data->role != 'User')
                                                                        <option value="User">User</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                        <form action="{{route('pengguna.update', $data->id)}}" method="POST">
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
                                        @if ($data->role != "Administrator")
                                        <button class="btn btn-icon icon-left btn-danger" data-toggle="modal" data-target="#modaldelete{{$data->id}}"><i class="far fa-edit"></i> Delete</button>
                                        @push('tambahan')
                                        @csrf
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modaldelete{{$data->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6><b>Delete {{$data->name}}</b></h6>
                                                    </div>
                                                    <div class="modal-body mb-0">
                                                        <h7>Apakah anda ingin menghapus Users {{$data->name}}</h7>
                                                    </div>
                                                    <div class="modal-footer br">
                                                        <button type="button" class="btn btn-icon icon-left btn-info" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                                        <form action="{{route('pengguna.delete')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$data->id}}">
                                                            <button type="submit" class="btn btn-icon icon-left btn-danger"><i class="far fa-trash-alt"></i> Ya</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endpush
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>ROLE</th>
                                    <!-- <th>STATUS</th> -->
                                    <th>OPSI</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show alert-has-icon" role="alert">
                <div class="alert-icon">
                    <i class="far fa-check-circle"></i>
                </div>
                <div class="alert-body">
                    <div class="alert-title" style="font-weight:normal">Sukses</div>
                    {{session('message')}}
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Daftar Registrasi User</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-2" class="table table-striped" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr align="center">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if ($user->status == 0)
                                        <b>Inactive</b>
                                        @else
                                        <b>Active</b>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user -> status == 1)
                                        <a href="{{route('status', ['id'=>$user->id])}}" class="btn btn-icon icon-left btn-danger"><i class="far fa-edit"></i> Deactivated</a></a>
                                        @else
                                        <a href="{{route('status', ['id'=>$user->id])}}" class="btn btn-icon icon-left btn-info"><i class="far fa-edit"></i> Actived</a></a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="text-align:center; color:#666">
                                <tr>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
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