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
                            <label>Tanggal <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Tanggal" name="Tanggal" value="{{ old('Tanggal') }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Tempat" name="Tempat" value="{{ old('Tempat') }}" disabled readonly>
                        </div>
                        <div class="form-group">
                            <label>Agenda <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Agenda" name="Agenda" value="{{ old('Agenda') }}" disabled readonly>
                        </div>

                    </div>
                    <div class="form-group">
                        <a class="btn btn-danger" href="{{ route('jadwalmeeting.index') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    @stop