@extends('template')

@section('content')
    <h3>Detail Data Karyawan</h3>

    <a href="/mykaryawan" class="btn btn-info">← Kembali</a>
    <br/><br/>

    <div class="form-horizontal">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawan->kodepegawai }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawan->namalengkap }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawan->divisi }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="{{ $mykaryawan->departemen }}">
            </div>
        </div>
    </div>
@endsection
