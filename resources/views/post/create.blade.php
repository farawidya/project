@extends('adminlte::page')

@section('title', 'Tambah Kegiatan')

@section('content_header')
    <h1>Tambah Project</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Jumlah Project Masuk <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>Jumlah Project Berjalan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>List Project <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>List Task <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>List Jadwal Meeting <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                        </div>
                        <div class="form-group">
                            <label>Kategori <span class="text-danger">*</span></label>
                            <select class="form-control" name="category" />
                            @foreach ($categories as $category)
                                @if ($category == old('category'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input class="form-control" type="file" name="image" value="{{ old('image') }}" />
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <textarea class="form-control" name="content" rows="10">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('post.index') }}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
