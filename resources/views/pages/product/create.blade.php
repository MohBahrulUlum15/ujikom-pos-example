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
                <h1>Add Data Product</h1>
                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div> --}}
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description">
                                @if ($errors->has('description'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price">
                                @if ($errors->has('price'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="number" class="form-control" name="stock">
                                @if ($errors->has('stock'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('stock') }}</span>
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
                            {{-- <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" name="phone">
                                @if ($errors->has('phone'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('phone') }}</span>
                                @endif
                            </div> --}}


                            {{-- <div class="form-group">
                                <label class="form-label">Roles</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="ADMIN" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Admin</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="employee" class="selectgroup-input">
                                        <span class="selectgroup-button">employee</span>
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
