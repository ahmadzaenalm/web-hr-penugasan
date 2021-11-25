@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><a href="{{route('admins')}}">Dashboard</a> => <a href="{{route('admins.data_karyawan')}}">Data Karyawan</a> =>{{ __('Tambah Data Karyawan') }}</div>
                <div class="card-body">
                    <form class="form" action="{{route('admins.add_data_karyawan')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <lable>Nama</label>
                                <input class="form-control" type="text" name="name"  required>
                        </div>
                        <div class="form-group">
                            <lable>Email</label>
                                <input class="form-control" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <lable>Alamat</label>
                                <input class="form-control" type="text" name="alamat" required>
                        </div>
                        <div class="form-group">
                            <lable>Tgl Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir"  required>
                        </div>
                        <div class="form-group">
                            <lable>Tgl Bergabung</label>
                                <input class="form-control" type="date" name="tgl_bergabung"  required>
                        </div>
                       
                       
                        <div class="form-group"><button class="btn btn-primary">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection