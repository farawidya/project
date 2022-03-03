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
                        <th>Kategori</th>
                        <th>Penomoran</th>
                        <th>Dokumen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($nomor as $nomor)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $nomor->m_kategori_penomoran->kategori }}</td>
                    <td>{{ $nomor->penomoran }}</td>
                    <td>{{ $nomor->dokumen }}</td>
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
                <!-- Modal tambah-->
                <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Penomoran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="exampleInputEmail1" class="col-lg-1">No : </label>
                                            <input class="btn btn-primary" type="button" value="Ol">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="V">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="AC">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="65">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori-option">Kategori</label>
                                        <select class="form-control" id="kategori-option" name="id_kategori_penomoran">
                                            @foreach ($nomor as $nomor)
                                                <option value="{{ $m_kategori_penomoran->id_kategori_penomoran }}">{{ $m_kategori_penomoran->kategori }}</option>
                                                {{-- @if ($category == old('Kategori'))
                                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                                @else
                                                    <option value="{{ $category }}">{{ $category }}</option>
                                                @endif --}}
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
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
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Judul Dokumen <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="judul_dokumen" value="{{ old('Penomoran') }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal edit-->
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Penomoran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf    
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="exampleInputEmail1" class="col-lg-1">No : </label>
                                            <input class="btn btn-primary" type="button" value="Ol">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="V">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="AC">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="65">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori-option">Kategori</label>
                                        <select class="form-control" id="kategori-option" name="id_kategori_penomoran">
                                            @foreach ($nomor as $nomor)
                                                <option value="{{ $nomor->id_kategori_penomoran }}">{{ $kategori_penomoran->kategori }}</option>
                                                {{-- @if ($category == old('Kategori'))
                                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                                @else
                                                    <option value="{{ $category }}">{{ $category }}</option>
                                                @endif --}}
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
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
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Judul Dokumen <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="judul_dokumen" value="{{ old('Penomoran') }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Modal show-->
        <div class="modal fade" id="show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Penomoran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('nomor.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="exampleInputEmail1" class="col-lg-1">No : </label>
                                            <input class="btn btn-primary" type="button" value="Ol">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="V">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="AC">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="65">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori-option">Kategori</label>
                                        <select class="form-control" id="kategori-option" name="id_kategori_penomoran">
                                            @foreach ($nomor as $nomor)
                                                <option value="{{ $nomor->id_kategori_penomoran }}">{{ $kategori_penomoran->kategori }}</option>
                                                {{-- @if ($category == old('Kategori'))
                                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                                @else
                                                    <option value="{{ $category }}">{{ $category }}</option>
                                                @endif --}}
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >judul Dokumen</label>
                                        <input type="text" class="form-control"
                                            id="exampleInputPenomoran" placeholder="Judul Dokumen" name="judul_dokumen"
                                            value="{{ old('penomoran') }}" disabled readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen</label>
                                        <input class="form-control" type="file" id="formFile" 
                                            value="{{ old('dokumen') }}" disabled readonly>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
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
