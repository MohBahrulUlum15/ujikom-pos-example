@extends('layouts.app')

@section('title', 'Tambah Penjualan')

@section('content')
    <div class="container">
        <h1>Tambah Penjualan</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('penjualan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pelanggan_id">Pelanggan</label>
                <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                    @foreach ($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->id }}">{{ $pelanggan->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="number" name="diskon" id="diskon" class="form-control" step="0.01" value="0">
            </div>

            <div class="form-group">
                <label>Detail Obat</label>
                <div id="obat-wrapper">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <select name="obat_id[]" class="form-control">
                                @foreach ($obats as $obat)
                                    <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="number" name="jumlah[]" class="form-control" placeholder="Jumlah" required>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger remove-obat">Hapus</button>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="add-obat">Tambah Obat</button>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <script>
        document.getElementById('add-obat').addEventListener('click', function() {
            var wrapper = document.getElementById('obat-wrapper');
            var newObatRow = `
                <div class="row mb-2">
                    <div class="col-md-6">
                        <select name="obat_id[]" class="form-control">
                            @foreach ($obats as $obat)
                                <option value="{{ $obat->id }}">{{ $obat->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="number" name="jumlah[]" class="form-control" placeholder="Jumlah" required>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-obat">Hapus</button>
                    </div>
                </div>`;
            wrapper.insertAdjacentHTML('beforeend', newObatRow);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-obat')) {
                e.target.closest('.row').remove();
            }
        });
    </script>
@endsection
