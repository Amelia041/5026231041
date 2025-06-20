@extends('template')

@section('content')

<div class="container mt-5">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit Data Karyawan</h4>
        </div>
        <div class="card-body">

            <a href="/mykaryawan" class="btn btn-secondary mb-3">← Kembali</a>

            @foreach($mykaryawan as $p)
            <form action="/mykaryawan/update" method="post" class="mb-4">
                {{ csrf_field() }}
                <input type="hidden" name="kodepegawai" value="{{ $p->kodepegawai }}">

                <div class="mb-3">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control text-capitalize" name="namalengkap" id="namalengkap" value="{{ $p->namalengkap }}" required>
                </div>

                <div class="mb-3">
                    <label for="divisi" class="form-label">Divisi</label>
                    <input type="text" class="form-control text-uppercase" name="divisi" id="divisi" value="{{ $p->divisi }}" required>
                </div>

                <div class="mb-3">
                    <label for="departemen" class="form-label">Departemen</label>
                    <textarea class="form-control" name="departemen" id="departemen" required>{{ $p->departemen }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </form>
            @endforeach

        </div>
    </div>
</div>

@endsection
