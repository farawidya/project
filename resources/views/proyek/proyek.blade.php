@extends('adminlte::page')

@section('title', 'Management Proyek')

@section('content_header')
    <h1>Management Proyek</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
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
                    <th>No.</th>
                    <th>Nama Project</th>
                    <th>Nama Klien</th>
                    <th>Deskripsi Project</th>
                    <th>Waktu</th>
                    <th>Status Project</th>
                    <th>Action</th>  
                </tr>
            </thead>
            <?php $no = 1; ?>
            @foreach ($proyek as $proyek)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $proyek->nama_project}}</td>
                    <td>{{ $proyek->nama_klien }}</td>
                    <td>{{ $proyek->deskripsi_project }}</td>
                    <td>{{ $proyek->waktu }}</td>
                    <td>{{ $proyek->status_project }}</td>
                    <td>
                        <a class="btn btn-sm btn-info modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show">Show</a>
                        <a class="btn btn-sm btn-warning modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                        <form method="POST" action="{{ route('proyek.destroy', $proyek) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
        <!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label>Nama Project <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Nama Project" type="text" name="nama_project" value="{{ old('nama_project') }}" />
                        </div>
                        <div class="form-group">
                            <label>Nama Klien <span class="text-danger">*</span></label>
                            <select class="form-control" name="nama_klien" />
                            @foreach ($categories as $category)
                                @if ($category == old('nama_klien'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Project <span class="text-danger">*</span></label>
                            <textarea class="form-control" type="text-area" placeholder="Deskripsi Project" name="deskripsi_project" value="{{ old('deskripsi_project') }}" /></textarea>
                        </div>
                        <div class="form-group">
                            <label>Waktu <span class="text-danger">*</span></label>
                            <input class="form-control" type="time" placeholder="Waktu" name="waktu" value="{{ old('waktu') }}" />
                        </div>
                        <div class="form-group">
                            <label>Status Project <span class="text-danger">*</span></label>
                            <select class="form-control" name="status_project" />
                            @foreach ($statusproject as $category)
                                @if ($category == old('status_project'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                         
                          <div class="form-group">
                              <button class="btn btn-primary">Simpan</button>
                              <a class="btn btn-danger" data-bs-dismiss="modal">Kembali</a>
                          </div>
                      </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal edit -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Project <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Nama Project" id="huruf" type="text" name="nama_project" value="{{ old('nama_project') }}" />
                    </div>
                    <div class="form-group">
                        <label>Nama Klien <span class="text-danger">*</span></label>
                        <select class="form-control" name="nama_klien" />
                        @foreach ($categories as $category)
                            @if ($category == old('nama_klien'))
                                <option value="{{ $category }}" selected>{{ $category }}</option>
                            @else
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Project <span class="text-danger">*</span></label>
                        <textarea class="form-control" type="text-area" placeholder="Deskripsi Project" name="deskripsi_project" value="{{ old('deskripsi_project') }}" /></textarea>
                    </div>
                    <div class="form-group">
                        <label>Waktu <span class="text-danger">*</span></label>
                        <input class="form-control" type="time" placeholder="Waktu" name="waktu" value="{{ old('waktu') }}" />
                    </div>
                    <div class="form-group">
                        <label>Status Project <span class="text-danger">*</span></label>
                        <select class="form-control" name="status_project" />
                        @foreach ($statusproject as $category)
                            @if ($category == old('status_project'))
                                <option value="{{ $category }}" selected>{{ $category }}</option>
                            @else
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                        <a class="btn btn-danger" data-bs-dismiss="modal">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
</div>
<!-- mmodal show -->
<div class="modal fade" id="show" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="showLabel">Detail</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama Project <span class="text-danger">*</span></label>
                <input class="form-control" placeholder="Nama Project" id="huruf" type="text" name="nama_project" value="{{ old('nama_project') }}" / disabled readonly>
            </div>
            <div class="form-group">
                <label>Nama Klien <span class="text-danger">*</span></label>
                <select class="form-control" name="nama_klien" / disabled readonly>
                @foreach ($categories as $category)
                    @if ($category == old('nama_klien'))
                        <option value="{{ $category }}" selected>{{ $category }}</option>
                    @else
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endif
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi Project <span class="text-danger">*</span></label>
                <textarea class="form-control" type="text-area" placeholder="Deskripsi Project" name="deskripsi_project" value="{{ old('deskripsi_project') }}" / disabled readonly></textarea>
            </div>
            <div class="form-group">
                <label>Waktu <span class="text-danger">*</span></label>
                <input class="form-control" type="time" placeholder="Waktu" name="waktu" value="{{ old('waktu') }}" / disabled readonly>
            </div>
            <div class="form-group">
                <label>Status Project <span class="text-danger">*</span></label>
                <select class="form-control" name="status_project" / disabled readonly>
                @foreach ($statusproject as $category)
                    @if ($category == old('status_project'))
                        <option value="{{ $category }}" selected>{{ $category }}</option>
                    @else
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endif
                @endforeach
                </select>
            </div>

          </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
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
