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
                            <label for="exampleInputName">Nama Client</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                placeholder="Nama client" name="name" value="{{ old('name') }}" disabled readonly>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputName">List Client</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                placeholder="list client" name="name" value="{{ old('name') }}" disabled readonly>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/marketing" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @stop