@extends('adminlte::page')

@section('title', 'Edit Admin')

@section('content_header')
    <h1>Edit Admin</h1>
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
                    <form action="{{ route('manadmin.update', $id_admin) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Admin <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="nama_admin"
                                value="{{ old('nama_admin', $nama_admin) }}" />
                        </div>
                        <div class="form-group">
                            <label>No Tlpn <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="no_hp"
                                value="{{ old('no_hp', $no_hp) }}" />
                        </div>
                        <div class="form-group">
                            <label>username<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username"
                                value="{{ old('username', $username) }}" />
                        </div>
                        <div class="form-group">
                            <label>password<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="password"
                                value="{{ old('password', $password) }}" />
                        </div>
                        <div class="form-group">
                            <label>mengapa diubah?</label>
                            <textarea class="form-control" name="content"
                                rows="10">{{ old('content',) }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('manadmin.index') }}">Kembali</a>
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
