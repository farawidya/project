@extends('adminlte::page')

@section('title', 'Detail')

@section('content_header')
    <h1 class="m-0 text-dark">Detail</h1>
@stop

@section('content')
    <form action="#" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Nama Desain grafis <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Nama Desain grafis" name="Nama_Desain_grafis" value="{{ old('Nama_Desain_grafis') }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label>Jenis kelamin <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Jenis kelamin" name="Jenis_kelamin" value="{{ old('Jenis_kelamin') }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label>No telp <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="No telp" name="No_telp" value="{{ old('No_telp') }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label>Gmail <span class="text-danger">*</span></label>
                            <input class="form-control" type="text"placeholder="Gmail" name="Gmail" value="{{ old('Gmail') }}" disabled readonly>
                        </div>

                    </div>
                    <div class="form-group">
                        <a class="btn btn-danger" href="{{ route('desaingrafis.index') }}">Kembali</a>
                    </div>
                   
                </div>
            </div>
        </div>
    @stop