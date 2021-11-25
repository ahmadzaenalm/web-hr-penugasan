@extends('karyawan.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    <h2>Selamat Datang di Website HR</h2>
                    <p>Website ini dibuat untuk memenuhi penugasan Tes Online untuk Calon Karyawan Departement IT
                        Programmer (Software Developer)</p>
                    <h4>Fitur yang ada di web ini</h4>
                    <ul>
                        <li>User bisa registrasi di menu <a href="{{route('register')}}">register</a> dan Login di menu <a href="{{route('login')}}">Login</a></li>
                        <li>Setelah Login User bisa melakukan pengajuan cuti di menu <a href="{{route('form_pengajuan_cuti')}}">Pengajuan Cuti</a></li>
                        <li>Untuk User Admin bisa melakukan CRUD data kontak Karyawan</li>
                        <li>Admin juga bisa melihat data pengajuan cuti</li>
                    </ul>
                    <p>Untuk login sebagai admin bisa menggunakan email: admin@admin.com password: 12345678 login di sini <a href="{{route('login')}}">Login</a></p>
                    <p>Untuk login sebagai karyawan bisa menggunakan email: agus@gmail.com password: 12345678 login di sini <a href="{{route('login')}}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection