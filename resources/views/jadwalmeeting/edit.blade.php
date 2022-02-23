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
                    <form action="{{ route('jadwalmeeting.update', $row) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Tanggal <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="jadwalmeeting"
                                value="{{ old('jadwalmeeting', $row->jadwalmeeting) }}" />
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="jadwalmeeting"
                                value="{{ old('jadwalmeeting', $row->jadwalmeeting) }}" />
                        </div>
                        <div class="form-group">
                            <label>Agenda <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="jadwalmeeting"
                                value="{{ old('jadwalmeeting', $row->jadwalmeeting) }}" />
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('jadwalmeeting.index') }}">Kembali</a>
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
