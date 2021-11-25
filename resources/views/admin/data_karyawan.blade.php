@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><a href="{{route('admins')}}">Dashboard</a> => {{ __('Data Karyawan') }}</div>
                <div class="card-body">
                    <a href="{{route('admins.add_data_karyawan')}}"><button class="btn btn-primary btn-sm btn-cuti">Tambah
                            Data Karyawan</button></a>
                    <table class="table table-striped">
                        <thead>
                            <th>No </th>
                            <th>Nomor Induk</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tgl Lahir</th>
                            <th>Tgl Bergabung </th>
                            <th>Action</th>
                        </thead>
                        @foreach($data as $key =>$val)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$val->nomor_induk}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->alamat}}</td>
                            <td>{{date('d-M-Y', strtotime($val->tgl_lahir))}}</td>
                            <td>{{date('d-M-Y', strtotime($val->tgl_bergabung))}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn-group" href="{{route('admins.view_data_karyawan',$val->id)}}">
                                        <button class="btn btn-primary btn-sm btn-group" data-toggle="tooltip"
                                            data-placement="top" title="Lihat Data"><i
                                                class="fa fa-eye"></i></button></a>
                                    <a class="btn-group" href="{{route('admins.update_data_karyawan',$val->id)}}">
                                        <button class="btn btn-success btn-sm btn-group" data-toggle="tooltip"
                                            data-placement="top" title="Ubah Data"><i
                                                class="fa fa-pencil"></i></button></a>
                                    <a class="btn-group" href="#" data-toggle="modal" data-target="#data{{ $val->id }}">
                                        <button class="btn btn-danger btn-sm btn-group" data-toggle="tooltip"
                                            data-placement="top" title="Hapus Data"><i
                                                class="fa fa-trash"></i></button></a>
                                </div>
                                <div id="data{{ $val->id }}" class="delete-modal modal fade" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <div class="delete-icon"></div>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h4 class="modal-heading">Anda yakin ingin menghapus data ini ?</h4>

                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="{{route('admins.delete_data_karyawan',$val->id)}}" class="pull-right">
                                                    {{csrf_field()}}
                                                    {{method_field("DELETE")}}

                                                    <button type="reset" class="btn btn-gray translate-y-3"
                                                        data-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-danger">Ya</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection