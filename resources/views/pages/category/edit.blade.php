@extends('layouts.app')

@section('title', 'Edit Category')

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
                <h1>Edit Data Category</h1>
                {{-- <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div> --}}
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('category.update', $category) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" readonly name="email"
                                    value="{{ $category->user->email }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="number" class="form-control" name="phone"
                                    value="{{ $category->user->phone }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('phone') }}</span>
                                @endif
                            </div> --}}

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $category->description }}">
                                @if ($errors->has('description'))
                                    <span class="text-danger lowercase text-sm">&nbsp;*
                                        {{ $errors->first('description') }}</span>
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
