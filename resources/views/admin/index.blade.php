@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat datang Admin HR') }}
                    <h4>Menu Admin</h4>
                    <ul>
                        <li><a href="{{route('admins.data_karyawan')}}">Data Karyawan</a></li>
                        <li><a href="{{route('admins.data_karyawan_cuti')}}">Data Pengajuan Cuti</a></li>
                    </ul>

                    <h4>Link Lihat Hasil Penugasan</h4>
                    <ol>
                        <li><a href="{{route('admins.data_karyawan')}}">CRUD Data Kontak Karyawan</a></li>
                        <li><a href="{{route('admins.data_tiga_karyawan_pertama')}}">Menampilkan 3 karyawan yang pertama kali bergabung</a></li>
                        <li><a href="{{route('admins.data_karyawan_pernah_cuti')}}">Menampilkan daftar karyawan yang saat ini pernah mengambil cuti</a></li>
                        <li><a href="{{route('admins.data_karyawan_pernah_cuti_lebih')}}">Menampilkan daftar karyawan yang saat ini pernah mengambil cuti lebih dari satu kali</a></li>
                        <li><a href="{{route('admins.sisa_cuti')}}">Menampilkan sisa cuti tiap karyawan adalah 12 hari</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
