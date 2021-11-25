@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><a href="{{route('admins')}}">Dashboard</a> => <a href="{{route('admins.data_karyawan')}}">Data Karyawan</a> => {{ __('Lihat Data Karyawan') }}</div>
                <div class="card-body">
                    <div class="form">
                   
                        <div class="form-group">
                            <lable>Nama:</label>
                                <h5>{{$data->name}} </h5>
                        </div>
                        <div class="form-group">
                            <lable>Email:</label>
                                <h5>{{$data->email}} </h5>
                        </div>
                        <div class="form-group">
                            <lable>Alamat:</label>
                                <h5>{{$data->alamat}} </h5>
                        </div>
                        <div class="form-group">
                            <lable>Tgl Lahir</label>
                                <h5>{{date('d-M-Y', strtotime($data->tgl_lahir))}} </h5>
                        </div>
                        <div class="form-group">
                            <lable>Tgl Bergabung</label>
                                <h5>{{date('d-M-Y', strtotime($data->tgl_bergabung))}} </h5>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection