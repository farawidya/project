@extends('adminlte::page')

@section('title', 'Management Dokumen')

@section('content_header')
    <h1>Management Dokumen</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card">
        <div class="card-header" style="background-color: #17a2b8;color: #ffffff;">
            <h3 class="card-title"><b>Informasi Project</b></h3>
        </div>
        <div class="card-body">
            <input type="hidden" value="" name="" id="" />
            <input type="hidden" value="" name="" id="" />
            <dl class="row col-sm-8">
                <dt class="col-sm-3">Nama Project </dt>
                <dd class="col-sm-7" id="nama_project">: Solusi</dd>
                <dt class="col-sm-3">Nama Client </dt>
                <dd class="col-sm-7" id="nama_client">: Sun</dd>
                <dt class="col-sm-3">Deadline </dt>
                <dd class="col-sm-7" id="tingkat">: Agustus 2022</dd>
            </dl>
        </div>
    </div>
    <div class="card card-default">
        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
                    Tambah
                </button>
                </div>
            </form>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0" id="example2">
                <thead>
                    <tr>
                        <th>
                            <center>No</center>
                        </th>
                        <th>
                            <center>Jenis Dokumen</center>
                        </th>
                        <th>
                            <center>File</center>
                        </th>
                        <th>
                            <center>Aksi</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <center>1</center>
                        </td>
                        <td>
                            <center>Fitur</center>
                        </td>
                        <td>
                            <center>(File))</center>
                        </td>
                        <td>
                            <center>
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                    data-target="#show">
                                    Lihat
                                </button>
                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                    data-target="#edit">
                                    Edit
                                </button>
                                <form method="POST" action="" style="display: inline-block;">
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Hapus Data?')">Delete</button>
                                </form>
                            </center>
                        </td>
                    </tr>
                </tbody>
                {{-- <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Dokumen</th>
                        <th>Dokumen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($dokumen as $dokumen)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $dokumen->status_project }}</td>
                        <td>{{ $dokumen->dokumen }}</td>
                        <td>
                            <a href="{{ url('dokumen/'.$dokumen->id) }}"class="btn btn-sm btn-info modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show">Show</a>
                            <a href="{{ url('dokumen/edit'.$dokumen->id) }}"class="btn btn-sm btn-warning modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                            <form method="POST" action="{{ route('dokumen.destroy', $dokumen) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach  --}}
                
            </table>
        </div>
    </div>
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" id="id">
                                        <div class="form-group row" id="foto_div_input">
                                            <label class="col-sm-2 control-label" for="demo-hor-inputemail">Jenis Dokumen</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="jenis_dokumen" id="jenis_dokumen">
                                                    <option value="0">-- pilih jenis dokumen --</option>
                                                    <option value="Penawaran">Fitur</option>
                                                    <option value="Proposal">Flowchart</option>
                                                    <option value="workflow">workflow</option>
                                                    <option value="Desain">Desain</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="name" class="col-sm-12 control-label">Jenis Dokumen</label>
                                            <div class="col-sm-12">
                                                <select name="status_project" id="status_project" class="form-control required" data-width="100%">
                                                    <option>Pilih Jenis Dokumen</option>
                                                    @foreach ($status_project as $status_project)
                                                        <option value="{{ $status_project->id }}">{{ $status_project->status_project }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="formFile" class="form-label">Dokumen</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        </div>
                             </form>         
                        </div>
                </div>
            </div>
        </div>
        <!-- Modal edit -->
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <div class="form-group row" id="foto_div_input">
                                            <label class="col-sm-2 control-label" for="demo-hor-inputemail">Jenis Dokumen</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="jenis_dokumen" id="jenis_dokumen">
                                                    <option value="0">-- pilih jenis dokumen --</option>
                                                    <option value="Penawaran">Fitur</option>
                                                    <option value="Proposal">Flowchart</option>
                                                    <option value="workflow">workflow</option>
                                                    <option value="Desain">Desain</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="name" class="col-sm-12 control-label">Jenis Dokumen</label>
                                            <div class="col-sm-12">
                                                <select name="status_project" id="status_project" class="form-control required" data-width="100%">
                                                    <option>Pilih Jenis Dokumen</option>
                                                    @foreach ($status_project as $status_project)
                                                        <option value="{{ $status_project->id }}">{{ $status_project->status_project }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                            <div class="form-group">
                                <label for="formFile" class="form-label">Dokumen <span class="text-danger">*</span></label>
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
        <!-- modal show -->
        <div class="modal fade" id="show" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showLabel">Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row" id="foto_div_input">
                                            <label class="col-sm-2 control-label" for="demo-hor-inputemail">Jenis Dokumen</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="jenis_dokumen" id="jenis_dokumen">
                                                    <option value="0">-- pilih jenis dokumen --</option>
                                                    <option value="Penawaran">Fitur</option>
                                                    <option value="Proposal">Flowchart</option>
                                                    <option value="workflow">workflow</option>
                                                    <option value="Desain">Desain</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="name" class="col-sm-12 control-label">Jenis Dokumen</label>
                                            <div class="col-sm-12">
                                                <select name="status_project" id="status_project" class="form-control required" data-width="100%" disabled readonly>
                                                    <option>Pilih Jenis Dokumen</option>
                                                    @foreach ($status_project as $status_project)
                                                        <option value="{{ $status_project->id }}">{{ $status_project->status_project }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                            <div class="form-group">
                                <label for="formFile" class="form-label">Dokumen</label>
                                <input class="form-control" type="file" id="formFile" 
                                    value="{{ old('dokumen') }}" disabled readonly>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                <script>
                    $('#bukanangka').bind('keypress', alphaOnly);
                    function alphaOnly(event) {
                   var value = String.fromCharCode(event.which);
                   var pattern = new RegExp(/[a-zA-Z]/i);
                   return pattern.test(value);
                }
                </script>
@stop
