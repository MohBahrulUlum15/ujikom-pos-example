@extends('layouts.app')

@section('title', 'Advanced Forms')

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
                <h1>Add Data Suplier</h1>
                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div> --}}
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('suplier.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama">
                                @if ($errors->has('nama'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('email') }}</span>
                                @endif
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>NIK</label>
                                <input type="number" class="form-control" name="nik">
                                @if ($errors->has('nik'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('nik') }}</span>
                                @endif
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control"name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}">
                                @if ($errors->has('tanggal_lahir'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('tanggal_lahir') }}</span>
                                @endif
                            </div> --}}
                            {{-- <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                                @if ($errors->has('email'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('password') }}</span>
                                @endif
                            </div> --}}
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                                @if ($errors->has('alamat'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota">
                                @if ($errors->has('kota'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('kota') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="number" class="form-control" name="telepon">
                                @if ($errors->has('telepon'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('telepon') }}</span>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-label">Roles</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="ADMIN" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Admin</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="suplier" class="selectgroup-input">
                                        <span class="selectgroup-button">suplier</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="USER" class="selectgroup-input">
                                        <span class="selectgroup-button">User</span>
                                    </label>
                                </div>
                            </div> --}}
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
