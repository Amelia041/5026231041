@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Tambah Data Kertas</h4>
        </div>
        <div class="card-body">
            <a href="/kertas" class="btn btn-secondary mb-3">← Kembali</a>

            <form action="/kertas/store" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" required class="form-control" placeholder="Masukkan Nomor ID">
                </div>

                <div class="form-group">
                    <label for="merkkertas">Merek Kertas</label>
                    <input type="text" name="merkkertas" required class="form-control" placeholder="Masukkan merek kertas">
                </div>

                <div class="form-group">
                    <label for="hargakertas">Harga Kertas (Rp)</label>
                    <input type="number" name="hargakertas" required class="form-control" placeholder="Contoh: 35000">
                </div>

                <div class="form-group">
                    <label for="tersedia">Tersedia</label>
                    <select name="tersedia" required class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="berat">Berat Kertas (gram)</label>
                    <input type="number" step="0.1" name="berat" required class="form-control" placeholder="Contoh: 70.0">
                </div>

                <button type="submit" class="btn btn-success">💾 Simpan Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
