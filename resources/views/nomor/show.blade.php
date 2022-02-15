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
                        <label for="formFile" class="form-label">Dokumen</label>
                        <input class="form-control" type="file" id="formFile"  value=
                        "{{ old('dokumen') }}" disabled readonly>
                        </div>


                     <div class="form-group">
                            <label for="exampleInputKategori">Penomoran</label>
                            <input type="name" class="form-control"
                                id="exampleInputPenomoran" placeholder="Penomoran" name="Penomoran"
                                value="{{ old('penomoran') }}" disabled readonly>
                        </div>

                         </div>
                          <div class="form-group">
                            <label>Kategori <span class="text-danger">*</span></label>
                            <select class="form-control" name="category"  disabled readonly>
                            @foreach ($categories as $category)
                                @if ($category == old('category'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>


                    <div class="card-footer">
                        <a href="/nomor" class="btn btn-danger">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @stop