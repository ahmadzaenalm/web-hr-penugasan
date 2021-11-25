@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><a href="{{route('admins')}}">Dashboard</a> => {{ __('Data Karyawan Cuti') }}
                </div>
                <div class="card-body">
                <p class="btn-cuti">@if(isset($soal)){{$soal}}@endif</p>
                    <table class="table table-striped">
                        <thead>
                            <th>No </th>
                            <th>Nomor Induk</th>
                            <th>Nama</th>
                            <th>Sisa Cuti</th>
                           
                           
                           
                        </thead>
                        @foreach($data as $key =>$val)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$val->nomor_induk}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{(12-$val->cuti()->count())}} Hari</td>
                            

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection