@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Edit Data Kertas</h4>
        </div>
        <div class="card-body">
            <a href="/kertas" class="btn btn-secondary mb-3">← Kembali</a>

            @foreach($kertas as $p)
            <form action="/kertas/update" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->ID }}">

                <div class="form-group">
                    <label for="id_display">ID</label>
                    <input type="text" class="form-control" value="{{ $p->ID }}" readonly>
                </div>

                <div class="form-group">
                    <label for="merek">Merek Kertas</label>
                    <input type="text" name="merek" required class="form-control" value="{{ $p->merkkertas }}">
                </div>

                <div class="form-group">
                    <label for="harga">Harga Kertas (Rp)</label>
                    <input type="number" name="harga" required class="form-control" value="{{ $p->hargakertas }}">
                </div>

                <div class="form-group">
                    <label for="tersedia">Tersedia</label>
                    <select name="tersedia" class="form-control" required>
                        <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="berat">Berat Kertas (gram)</label>
                    <input type="number" step="0.1" name="berat" required class="form-control" value="{{ $p->berat }}">
                </div>

                <button type="submit" class="btn btn-success">💾 Simpan Perubahan</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
