@extends('karyawan.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Pengajuan Cuti') }}</div>

                <div class="card-body">
                    <form  class="form" action="{{route('karyawan.pengajuan_cuti')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <lable>Tanggal Cuti</label>
                            <input class="form-control" type="date" name="tgl_cuti">
                        </div>
                        <div class="form-group">
                            <lable>Lama Cuti</label>
                            <input class="form-control" type="number" name="lama_cuti">
                        </div>
                        <div class="form-group">
                            <lable>Alasan Cuti</label>
                            <textarea class="form-control" name="keterangan_cuti"></textarea>
                        </div>
                        <div class="form-group"><button class="btn btn-primary">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
