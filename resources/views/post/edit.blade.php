@extends('adminlte::page')

@section('title', 'Edit Kegiatan')

@section('content_header')
    <h1>Edit Kegiatan</h1>
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
                    <form action="{{ route('post.update', $row) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Project Masuk <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title"
                                value="{{ old('post_title', $row->post_title) }}" />
                        </div>
                        <div class="form-group">
                            <label>Project Berjalan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title"
                                value="{{ old('post_title', $row->post_title) }}" />
                        </div>
                        <div class="form-group">
                            <label>List Project <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title"
                                value="{{ old('post_title', $row->post_title) }}" />
                        </div>
                        <div class="form-group">
                            <label>List Project <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="post_title"
                                value="{{ old('post_title', $row->post_title) }}" />
                        </div>
                        <div class="form-group">
                            <label>Kategori <span class="text-danger">*</span></label>
                            <select class="form-control" name="category" />
                            @foreach ($categories as $category)
                                @if ($category == old('category', $row->category))
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
                            <p class="form-text">Kosongkan jika tidak ingin mengubah gambar.</p>
                            <img src="{{ $row->image() }}" height="75" />
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <textarea class="form-control" name="content"
                                rows="10">{{ old('content', $row->content) }}</textarea>
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
