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
                            <th>Tgl Cuti</th>
                            <th>Keterangan Cuti </th>
                           
                           
                        </thead>
                        @foreach($data as $key =>$val)
                        @if($val->jumlah>1)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$val->user->nomor_induk}}</td>
                            <td>{{$val->user->name}}</td>
                            <td>
                                @php $raw=explode(',',$val->tgl) @endphp
                                @foreach($raw as $tgl)
                                <p>{{date('d-M-Y', strtotime($tgl))}}</p>
                                @endforeach    
                            </td>
                            <td>{{$val->keterangan}}</td>

                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection