@extends('adminlte::page')

@section('title', 'Tambah client ')

@section('content_header')
    <h1>Tambah Client</h1>
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
                    <form action="{{ route('manclient.store') }}" method="manclient" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Client <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="list_client" value="{{ old('list_client') }}" />
                        </div>
                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Email" value="{{ old('Email') }}" />
                        </div>
                        <div class="form-group">
                            <label>No telepon <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="No_telepon" value="{{ old('No_telepon') }}" />
                        </div>
                        <div class="form-group">
                            <label>pekerjaan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" />
                        </div>
                        <div class="form-group">
                            <label>alamat</label>
                            <textarea class="form-control" name="content" rows="10">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('manclient.index') }}">Kembali</a>
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
