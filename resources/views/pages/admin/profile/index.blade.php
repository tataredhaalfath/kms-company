@extends('layouts.admin')
@section('titile', 'Create Produk')
@push('prepend-style')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endpush
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Profile Admin</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                            @if (session('status'))
                                                <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger">
                                                    {{ $error }}
                                                </div>
                                            @endforeach
                                        </p>
                                        <h4 class="card-title">Photo</h4>
                                    </div>
                                    @if (Auth::user()->profile)
                                        <img class="img rounded-circle" style="object-fit:cover; width:350px; height:350px"
                                            src="{{ Storage::url(Auth::user()->profile) }}" alt="profile">
                                    @else
                                        <img class="img-fluid w-100 rounded-circle"
                                            src="{{ asset('dashboard/assets/images/faces/1.jpg') }}" alt="profile">
                                    @endif

                                    <form action="{{ route('profile.update') }}" method="POST",
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-5">
                                            <label for="profile">Ganti Profile</label>
                                            <input type="file" class="form-control" id="profile" name="profile"
                                                placeholder="profile">
                                        </div>
                                        <h4 class="mt-5">Ganti Password</h4>
                                        <div class="form-group">
                                            <label for="old_password">Password Lama</label>
                                            <input type="password" class="form-control" id="old_password"
                                                name="old_password" placeholder="password lama"
                                                value="{{ old('old_password') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password Baru</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="password baru" value="{{ old('password') }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Password Konfirmasi</label>
                                            <input type="password" class="form-control" id="password_confrmation"
                                                name="password_confirmation" placeholder="password konfirmasi"
                                                value="{{ old('password_confirmation') }}">
                                        </div>
                                        <div class="form-group mt-5 text-right">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
