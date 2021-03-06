@extends('adminlte::page')

@section('title', 'Tambah')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah</h1>
@stop

@section('content')
    <form action="#" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                placeholder="Nama lengkap" name="name" value="{{ $user->name ?? old('name') }}" >
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                            <select class="form-control" name="Jenis_kelamin" />
                            @foreach ($categories as $category)
                                @if ($category == old('Jenis_kelamin'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No. Telp <span class="text-danger"></span></label>
                            <input class="form-control" placeholder="No. Telp" minlength="11" maxlength="14" type="text" onkeypress="return isNumber(event)" name="no telp" value="{{ old('no_telp') }}" />
                        </div>
                        <div class="form-group">
                            <label>Gmail <span class="text-danger"></span></label>
                            <input class="form-control" type="email" placeholder="Email" name="gmail" value="{{ old('gmail') }}" />
                        </div>
                    </div>  

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/devlop" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script>
        function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
    }
    </script>
    <script>
        $('#huruf').bind('keypress', alphaOnly);
        function alphaOnly(event) {
       var value = String.fromCharCode(event.which);
       var pattern = new RegExp(/[a-zA-Z]/i);
       return pattern.test(value);
    }
    </script>
