@extends('layouts.admin')
@section('title', 'File Image')
@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('dashboard/assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/pages/simple-datatables.css') }}">
@endpush
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Informasi</h3>
                    <p class="text-subtitle text-muted">Informasi umum perusahaan KMS Beton</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                @if (!$about)
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <div class="float-end float-sm-end float-md-end float-lg-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm">
                                    Tambah
                                </button>
                            </div>
                        </nav>
                    </div>
                @endif
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Detail</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if ($about)
                                    <td width="30%">
                                        <img src="{{ Storage::url($about->image) }}" alt="image" style="width:250px"
                                            class="img img-thumbnail">
                                    </td>
                                    <td>{{ $about->detail }}</td>
                                    <td>{{ $about->visi }}</td>
                                    <td>{{ $about->misi }}</td>
                                    <td>
                                        <form action="{{ route('testimonial.delete') }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $about->id }}">
                                            @method('delete')
                                            <button class="btn icon btn-danger" onclick="return confirm('Hapus data ?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                @else
                                    <td colspan="5" class="text-center">Data Kosong</td>
                                @endif
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

@endsection
@push('prepend-script')
    <script src="{{ asset('dashboard/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/pages/simple-datatables.js') }}"></script>
@endpush
