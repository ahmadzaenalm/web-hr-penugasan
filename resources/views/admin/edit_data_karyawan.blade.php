@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><a href="{{route('admins')}}">Dashboard</a> => <a href="{{route('admins.data_karyawan')}}">Data Karyawan</a> =>{{ __('Edit Data Karyawan') }}</div>
                <div class="card-body">
                    <form class="form" action="{{route('admins.update_data_karyawan',$data->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <lable>Nama</label>
                                <input class="form-control" type="text" name="name" value="{{$data->name}}" required>
                        </div>
                        <div class="form-group">
                            <lable>Email</label>
                                <input class="form-control" type="email" name="email" value="{{$data->email}}" required>
                        </div>
                        <div class="form-group">
                            <lable>Alamat</label>
                                <input class="form-control" type="text" name="alamat" value="{{$data->alamat}}" required>
                        </div>
                        <div class="form-group">
                            <lable>Tgl Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir" value="{{$data->tgl_lahir}}" required>
                        </div>
                        <div class="form-group">
                            <lable>Tgl Bergabung</label>
                                <input class="form-control" type="date" name="tgl_bergabung" value="{{$data->tgl_bergabung}}" required>
                        </div>
                       
                       
                        <div class="form-group"><button class="btn btn-primary">Update</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection