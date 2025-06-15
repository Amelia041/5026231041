@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Tambah Keranjang Pembelian</h4>
        </div>
        <div class="card-body">
            <a href="/keranjangbelanja" class="btn btn-secondary mb-3">← Kembali</a>

            <form action="/keranjangbelanja/store" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="id">Kode Barang</label>
                    <input type="text" name="KodeBarang" required class="form-control" placeholder="Masukkan Kode Barang">
                </div>

                <div class="form-group">
                    <label for="Jumlah">Jumlah Pembelian</label>
                    <input type="text" name="Jumlah" required class="form-control" placeholder="Masukkan JUmlah Pembelian ">
                </div>

                <div class="form-group">
                    <label for="Harga">Harga per Item</label>
                    <input type="number" name="Harga" required class="form-control" placeholder="Contoh: 35000">
                </div>

                <button type="submit" class="btn btn-success">💾 Simpan Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
