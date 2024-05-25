@extends('layouts.app')

@section('title', 'Edit Obat')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data Obat</h1>
                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-items</div>
                </div> --}}
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('obat.update', $obat) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Nama Suplier</label>
                                {{-- <select class="form-control selectric @error('suplier_id') is-invalid @enderror"
                                    name="suplier_id">
                                    <option value="">-- Pilih Suplier --</option>
                                    @foreach ($supliers as $suplier)
                                        <option value="{{ $suplier->id }}"
                                            {{ old('suplier_id') == $suplier->id ? 'selected' : '' }}>
                                            {{ $suplier->nama }}</option>
                                    @endforeach
                                </select> --}}
                                <input type="hidden" value="{{ $obat->suplier_id }}" name="suplier_id">
                                <input type="text" value="{{ $obat->suplier->nama }}" class="form-control" readonly>
                                @if ($errors->has('suplier_id'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('suplier_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $obat->nama }}">
                                @if ($errors->has('nama'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Jenis</label>
                                <input type="text" class="form-control" name="jenis" value="{{ $obat->jenis }}">
                                @if ($errors->has('jenis'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('jenis') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Satuan</label>
                                <input type="text" class="form-control" name="satuan" value="{{ $obat->satuan }}">
                                @if ($errors->has('satuan'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('satuan') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="number" class="form-control" name="harga_beli"
                                    value="{{ $obat->harga_beli }}">
                                @if ($errors->has('harga_beli'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('harga_beli') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="number" class="form-control" name="harga_jual"
                                    value="{{ $obat->harga_jual }}">
                                @if ($errors->has('harga_jual'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('harga_jual') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="number" class="form-control" name="stok" value="{{ $obat->stok }}">
                                @if ($errors->has('stok'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('stok') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endpush
