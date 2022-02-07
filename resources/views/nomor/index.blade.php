@extends('adminlte::page')

@section('title', 'List Nomor')

@section('content_header')
<h1> Management Penomoran Dokumen</h1>
@stop

@section('content')
@if (session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

    <!-- Button trigger modal -->
    <div class="card card-default">
        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>
                </div>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0" id="example2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dokumen</th>
                        <th>Penomoran</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($nomor as $nomor)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $nomor->dokumen }}</td>
                    <td>{{ $nomor->penomoran }}</td>
                    <td>{{ $nomor->kategori }}</td>
                    <td>
                        <form method="POST" action="{{ route('nomor.destroy', $nomor) }}" style="display: inline-block;">
                                 <button type="button" class="btn btn-info btn-xs" data-bs-toggle="modal" data-bs-target="#show">
                                    Show
                                </button>
                                   <button type="button" class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#edit">
                                    Edit
                                </button>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger btn-xs"
                                    onclick="return confirm('Hapus Data?')">Delete</button>
                            </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

   <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penomoran</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>

                            <div class="form-group">
                                        <label>Penomoran <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="Penomoran" value="{{ old('Penomoran') }}" />
                                    </div>    
                                    <div class="form-group">
                                        <label>Kategori <span class="text-danger">*</span></label>
                                        <select class="form-control" name="Kategori" />
                                        @foreach ($categories as $category)
                                        @if ($category == old('Kategori'))
                                        <option value="{{ $category }}" selected>{{ $category }}</option>
                                        @else
                                        <option value="{{ $category }}">{{ $category }}</option>
                                        @endif
                                        @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary">Simpan</button>
                                        <a class="btn btn-danger" href="/nomor">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>

        <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Penomoran</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                     <div class="form-group">
                                        <label>Penomoran <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="Penomoran" value="{{ old('Penomoran') }}" />
                                    </div>    
                                    <div class="form-group">
                                        <label>Kategori <span class="text-danger">*</span></label>
                                        <select class="form-control" name="Kategori" />
                                        @foreach ($categories as $category)
                                        @if ($category == old('Kategori'))
                                        <option value="{{ $category }}" selected>{{ $category }}</option>
                                        @else
                                        <option value="{{ $category }}">{{ $category }}</option>
                                        @endif
                                        @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary">Simpan</button>
                                        <a class="btn btn-danger" href="/nomor">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>

   <!-- Modal -->
    <div class="modal fade" id="show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Penomoran</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="modal-body">
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
                                    <div class="form-group">
                                <label>Kategori <span class="text-danger">*</span></label>
                                <select class="form-control" name="Kategori" disabled readonly>
                                @foreach ($categories as $category)
                                @if ($category == old('Kategori'))
                                <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                                @endforeach
                                </select>
                                    </div>
                                <div class="modal-footer">
                            <button type= "button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
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
<script>
    $('#example2').DataTable({
        "responsive": true,
    });

    function notificationBeforeDelete(event, el) {
        event.preventDefault();
        if (confirm('Apakah anda yakin akan menghapus data ? ')) {
            $("#delete-form").attr('action', $(el).attr('href'));
            $("#delete-form").submit();
        }
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@stop
