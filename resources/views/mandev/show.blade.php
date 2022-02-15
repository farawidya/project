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
                            <label for="exampleInputName">Nama Project</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                placeholder="Nama Project" name="name" value="{{ old('name') }}" disabled readonly>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Nama Klien</label>
                            <input type="name" class="form-control"
                                id="exampleInputEmail" placeholder="Name" name="email"
                                value="{{ old('name') }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Deskripsi Project</label>
                            <input type="text" class="form-control"
                                id="exampleInputPassword" placeholder="Deskripsi Project" name="password" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Waktu</label>
                            <input type="password" class="form-control" id="exampleInputPassword"
                                placeholder="19.00 PM" name="password_confirmation" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Status Project</label>
                            <input type="text" class="form-control" id="exampleInputPassword"
                                placeholder="Status" name="password_confirmation" disabled readonly>
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
