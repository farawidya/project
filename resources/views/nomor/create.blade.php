@extends('adminlte::page')

@section('title', 'Tambah Penomoran')

@section('content_header')
    <h1>Tambah Penomoran</h1>
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
                    <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="formFile" class="form-label">Dokumen</label>
                        <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="form-group">
                            <label>Penomoran <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Penomoran" value="{{ old('Penomoran') }}" />
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
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="/nomor">Kembali</a>
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
