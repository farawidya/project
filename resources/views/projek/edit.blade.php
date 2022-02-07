@extends('adminlte::page')

@section('title', 'Edit Kegiatan')

@section('content_header')
    <h1>Edit project</h1>
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
                    <form action="{{ route('projek.update', $list) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       <div class="form-group">
                            <label>List Project Manager <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="List_project_manager" value="{{ old('List_project_manager') }}" />
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" href="{{ route('projek.index') }}">Kembali</a>
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
