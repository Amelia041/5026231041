@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Kertas</h4>
            <a href="/kertas/tambah" class="btn btn-light btn-sm">
                + Tambah Kertas Baru
            </a>
        </div>

        <div class="card-body">
            <form action="/kertas/cari" method="GET" class="form-inline mb-3">
                <div class="input-group w-50">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Kertas..." />
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">CARI</button>
                    </div>
                </div>
            </form>

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Merek</th>
                        <th>Harga</th>
                        <th>Tersedia</th>
                        <th>Berat (gram)</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kertas as $p)
                    <tr>
                        <td>{{ $p->ID }}</td>
                        <td>{{ $p->merkkertas }}</td>
                        <td>Rp {{ number_format($p->hargakertas, 0, ',', '.') }}</td>
                        <td>
                            @if($p->tersedia)
                                <span class="badge badge-success">Ya</span>
                            @else
                                <span class="badge badge-danger">Tidak</span>
                            @endif
                        </td>
                        <td>{{ $p->berat }}</td>
                        <td>
                            <a href="/kertas/edit/{{ $p->ID }}" class="btn btn-sm btn-success">
                                 Edit
                            </a>
                            <a href="/kertas/hapus/{{ $p->ID }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $kertas->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
