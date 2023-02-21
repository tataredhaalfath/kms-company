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
                    <h3>Data Gambar</h3>
                    <p class="text-subtitle text-muted">Data gambar digunakan untuk postingan blog</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
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
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($images as $img)
                                <tr>
                                    <td width="30%">
                                        <img src="{{ Storage::url($img->image) }}" alt="image" style="width:250px"
                                            class="img img-thumbnail">
                                    </td>
                                    <td>
                                        {{ $img->name }}
                                    <td>
                                        <input style="width:100%;" type="text" class="form-controll"
                                            value="/storage/{{ $img->image }}" disabled>
                                    <td>
                                        <form action="{{ route('image.drop') }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $img->id }}">
                                            <button class="btn icon btn-danger" onclick="return confirm('Hapus Gambar ?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
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
                <h4 class="modal-title" id="myModalLabel33">Tambah Gambar </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama" name="name" class="form-control">
                    </div>
                    <label>Gambar: </label>
                    <div class="form-group">
                        <input type="file" placeholder="Gambar" name="image" class="form-control">
                    </div>
                    <label>Deskripsi </label>
                    <div class="form-group">
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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
