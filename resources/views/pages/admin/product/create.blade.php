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
                    <h3>Tambah Produk / Layanan</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST", enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nama Produk / Layanan</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="nama product / layanan" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="excerpt">Kutipan</label>
                                    <textarea type="text" class="form-control" id="excerpt" name="excerpt" placeholder="kutipan" rows="5"
                                        required>{{ old('excerpt') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="slug" value="{{ old('slug') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="text" class="form-control" id="logo" name="logo"
                                        placeholder="logo" value="{{ old('logo') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="my-editor" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="my-editor form-control" id="my-editor" cols="30" rows="10" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('prepend-script')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options)
    </script>
    <script type="text/javascript">
        $('.date').datepicker({

            format: 'yyyy-mm-dd'

        });
    </script>
@endpush
