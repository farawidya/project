@extends('adminlte::page')

@section('title', 'Penomoran Dokumen')

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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                        <i class="fas fa-plus"></i>
                        Tambah
                    </button>
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
                        <th>Judul Dokumen</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($nomor as $nomor)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $nomor->m_kategori_penomoran->kategori }}</td>
                    <td>{{ $nomor->penomoran }}</td>
                    <td>{{ $nomor->m_dokumen->judul_dokumen }}</td>
                    <td>{{ $nomor->m_dokumen->dokumen }}</td>
                    <td>
                        <form method="POST" action="{{ route('nomor.destroy', $nomor) }}" style="display: inline-block;">
                                 <button type="button" class="btn btn-secondary btn-xs" data-bs-toggle="modal" data-bs-target="#show{{$nomor->id_dokumen_penomoran}}">
                                    <i class="fas fa-eye"></i>
                                </button>
                                   <button type="button" class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#edit{{$nomor->id_dokumen_penomoran}}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger btn-xs"
                                    onclick="return confirm('Hapus Data?')"><i class="fas fa-trash"></i></button>
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
                                            <input class="btn btn-primary" type="button" value="Kode(PN)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="TahunBulanTgl(20220311)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="NoUrutTiapBulan(II)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="IDClient(001)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori-option">Kategori <span class="text-danger">*</span></label>
                                        <select class="form-control" name="kategori_penomoran">
                                            @foreach ($kategori_penomoran as $kategori_penomorans)
                                                @if ($kategori_penomorans == old('kategori_penomoran'))
                                                    <option value="{{ $kategori_penomorans->id_kategori_penomoran }}" selected>{{ $kategori_penomorans->kategori }}</option>
                                                @else
                                                    <option value="{{ $kategori_penomorans->id_kategori_penomoran }}">{{ $kategori_penomorans->kategori }}</option>
                                                @endif
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
                                        <label for="kategori-option">Nama Client <span class="text-danger">*</span></label>
                                        <select class="form-control" name="client">
                                            {{-- @foreach ($proyek as $proyek)
                                                @if ($proyek == old('proyek'))
                                                    <option value="{{ $proyek->id_m_klien }}" selected>{{ $proyek->client->nama_perusahaan }}</option>
                                                @else
                                                    <option value="{{ $proyek->id_m_klien }}">{{ $proyek->client->nama_perusahaan }}</option>
                                                @endif
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Tanggal" type="date" name="tanggal" value="{{ old('tanggal') }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Judul Dokumen <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="judul_dokumen" value="{{ old('Penomoran') }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen <span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" type="file" name="dokumen" id="formFile" value="{{ old('dokumen') }}">Choose file</label>
                                        </div>
                                        {{-- <input class="form-control" type="file" name="file" id="formFile"> --}}
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Dokumen <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" type="file" name="dokumen" id="formFile" value="{{ old('dokumen') }}">Choose file</label>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
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
                                            <input class="btn btn-primary" type="button" value="Kode(PN)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="TahunBulanTgl(20220311)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="NoUrutTiapBulan(II)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="IDClient(001)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori-option">Kategori</label>
                                        <select class="form-control" name="kategori_penomoran">
                                            @foreach ($kategori_penomoran as $kategori_penomorans)
                                                @if ($kategori_penomorans == old('kategori_penomoran'))
                                                    <option value="{{ $kategori_penomorans->id_kategori_penomoran }}" selected>{{ $kategori_penomorans->kategori }}</option>
                                                @else
                                                    <option value="{{ $kategori_penomorans->id_kategori_penomoran }}">{{ $kategori_penomorans->kategori }}</option>
                                                @endif
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
                                <button type="button" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
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
                                            <input class="btn btn-primary" type="button" value="Kode(PN)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="TahunBulanTgl(20220311)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="NoUrutTiapBulan(II)">
                                            <label class="mx-2 my-auto">/</label>
                                            <input class="btn btn-primary" type="button" value="IDClient(001)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori-option">Kategori</label>
                                        <select class="form-control" name="kategori_penomoran"/ disabled readonly>
                                            @foreach ($kategori_penomoran as $kategori_penomorans)
                                                @if ($kategori_penomorans == old('kategori_penomoran'))
                                                    <option value="{{ $kategori_penomorans->id_kategori_penomoran }}" selected>{{ $kategori_penomorans->kategori }}</option>
                                                @else
                                                    <option value="{{ $kategori_penomorans->id_kategori_penomoran }}">{{ $kategori_penomorans->kategori }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >judul Dokumen</label>
                                        <input type="text" class="form-control"
                                            id="exampleInputPenomoran" placeholder="Judul Dokumen" name="judul_dokumen"
                                            value="{{ old('penomoran') }}" / disabled readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Dokumen</label>
                                        <input class="form-control" type="file" id="formFile" 
                                            value="{{ old('dokumen') }}" / disabled readonly>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
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
