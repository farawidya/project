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
                            <label for="exampleInputListProjectManager">List Project Manager</label>
                            <input type="name" class="form-control"
                                id="exampleInputListProjectManager" placeholder="List Project Manager" name="List Project Manager"
                                value="{{ old('List project manager') }}" disabled readonly>
                        </div>
                       
                    </div>

                    <div class="card-footer">
                        <a href="/projek" class="btn btn-danger">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @stop