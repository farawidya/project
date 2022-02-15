@extends('adminlte::page')

@section('title', 'Edit client')

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
                    <form  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama client <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="nama_client"
                                value="{{ old('nama_client', ) }}" />
                        </div>
                        <div class="form-group">
                            <label>Email  <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Email"
                                value="{{ old('Email',) }}" />
                        </div>
                        <div class="form-group">
                            <label>No hp  <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="No_hp"
                                value="{{ old('No_hp',) }}" />
                        </div>
                        <div class="form-group">
                            <label>pekerjaan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="pekerjaan"
                                value="{{ old('pekerjaan', ) }}" />
                        </div>
                        <div class="form-group">
                            <label>Alamat<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Alamat"
                                value="{{ old('Alamat',) }}" />
                        </div>
                        <div class="form-group">
                            <label>mengapa diubah?</label>
                            <textarea class="form-control" name="content"
                                rows="10">{{ old('content',) }}</textarea>
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
