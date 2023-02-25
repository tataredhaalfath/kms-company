@extends('layouts.admin')
@section('title', 'About Us')
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
                                    <td>{{ $about->about }}</td>
                                    <td>{{ $about->visi }}</td>
                                    <td>{{ $about->misi }}</td>
                                    <td>
                                        <form action="{{ route('about.delete') }}" method="POST" class="d-inline">
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

<!-- form Modal -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">About Company </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Judul: </label>
                    <div class="form-group">
                        <textarea class="form-control" id="about" name="about" placeholder="Tentang Perusahaan" rows="3" required></textarea>
                    </div>
                    <label>Visi </label>
                    <div class="form-group">
                        <textarea class="form-control" id="visi" name="visi" placeholder="Visi" rows="3" required></textarea>
                    </div>
                    <label>Misi </label>
                    <div class="form-group">
                        <textarea class="form-control" id="misi" name="misi" placeholder="Misi" rows="3" required></textarea>
                    </div>
                    <label>Gambar: </label>
                    <div class="form-group">
                        <input type="file" placeholder="Gambar" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
