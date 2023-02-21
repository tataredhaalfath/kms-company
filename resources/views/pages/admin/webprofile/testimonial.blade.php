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
                    <h3>Data Testimonial</h3>
                    <p class="text-subtitle text-muted">Data terimonial dari pelanggan KMS Beton</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Testimoni</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($testimonial as $testi)
                                <tr>
                                    <td>
                                        {{ $testi->name }}
                                    </td>
                                    <td>
                                        {{ $testi->testimoni }}
                                    </td>
                                    <td>
                                        <form action="{{ route('testimonial.delete') }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $testi->id }}">
                                            @method('delete')
                                            <button class="btn icon btn-danger" onclick="return confirm('Hapus data ?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Data Kosong</td>
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
