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
                    <h3>Data Artikel</h3>
                    <p class="text-subtitle text-muted">Data artikel blog</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <div class="float-end float-sm-end float-md-end float-lg-end">
                            <a href="{{ route('article.create') }}" class="btn btn-primary">
                                Tambah
                            </a>
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
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)
                                <tr>
                                    <td width="30%">
                                        <img src="{{ Storage::url($article->thumbnail) }}" alt="image"
                                            style="width:250px" class="img img-thumbnail">
                                    </td>
                                    <td>
                                        {{ $article->title }}
                                    </td>
                                    <td>
                                        {{ $article->category }}
                                    </td>
                                    <td>
                                        {{ $article->date }}
                                    </td>
                                    <td>
                                        <form action="{{ route('article.edit') }}" method="POST" class="d-inline">
                                            @csrf
                                            <button class="btn icon btn-info">
                                                <input type="hidden" name="id" value="{{ $article->id }}">
                                                <i class="bi bi-pen"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('article.delete') }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $article->id }}">
                                            <button class="btn icon btn-danger" onclick="return confirm('Hapus Artikel ?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data Kosong</td>
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
