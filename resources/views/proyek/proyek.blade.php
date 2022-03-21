@extends('adminlte::page')

@section('title', 'Management Project')

@section('content_header')
    <h1>Management Project</h1>
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
            <i class="fas fa-plus"></i>
            Tambah Project
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
                    {{--  <th>Deskripsi Project</th>  --}}
                    <th>Waktu Mulai</th>
                    <th>Waktu Berakhir</th>
                    <th>Nama Client</th>
                    <th>Status Project</th>
                    <th>Tim Project</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            @foreach ($proyek as $p)
                <!-- Modal edit -->
                    <div class="modal fade" id="edit{{$p->id_project}}" tabindex="-1" aria-labelledby="modalEdit{{$p->id_project}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEdit{{$p->id_project}}">Edit Data Project</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('proyek.update', $p) }}" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Project <span class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Nama Project" id="huruf" type="text" name="nama_project" value="{{ old('nama_project', $p->nama_project) }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Project <span class="text-danger">*</span></label>
                                            <textarea class="form-control" type="text-area" placeholder="Deskripsi Project" name="deskripsi_project" />{{ old('deskripsi_project', $p->deskripsi_project) }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Mulai <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" placeholder="Waktu Mulai" name="waktumulai" value="{{ old('waktumulai', $p->waktumulai) }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Berakhir <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" placeholder="Waktu Berakhir" name="waktuberakhir" value="{{ old('waktuberakhir', $p->waktuberakhir) }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori-option">Nama Client</label>
                                            <select class="form-control" name="id_m_klien">
                                                @foreach ($client as $clients)
                                                    @if ($clients->id == $p->id_m_klien)
                                                        <option value="{{ $clients->id_m_klien }}" selected>{{ $clients->nama_perusahaan }}</option>
                                                    @else
                                                        <option value="{{ $clients->id_m_klien }}">{{ $clients->nama_perusahaan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Project <span class="text-danger">*</span></label>
                                            <select class="form-control" name="id_status_project" />
                                            @foreach ($status_project as $status_projects)
                                                @if ($status_projects->id_status_project == $p->id_status_project)
                                                    <option value="{{ $status_projects->id_status_project }}" selected>{{ $status_projects->status_project }}</option>
                                                @else
                                                    <option value="{{ $status_projects->id_status_project }}">{{ $status_projects->status_project }}</option>
                                                    @endif
                                                    @endforeach
                                                    </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary">Simpan</button>
                                            <a class="btn btn-danger" data-bs-dismiss="modal">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- mmodal show -->
                    <div class="modal fade" id="show{{$p->id_project}}" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="showLabel">Detail Data Project</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Nama Project <span class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Nama Project" id="huruf" type="text" name="nama_project" value="{{ old('nama_project', $p->nama_project) }}" / disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Project <span class="text-danger">*</span></label>
                                            <textarea class="form-control" type="text-area" placeholder="Deskripsi Project" name="deskripsi_project" / disabled readonly>{{ $p->deskripsi_project }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Mulai <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" placeholder="Waktu Mulai" name="waktumulai" value="{{ old('waktumulai', $p->waktumulai) }}" / disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Waktu Berakhir <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" placeholder="Waktu Berakhir" name="waktuberakhir" value="{{ old('waktuberakhir', $p->waktuberakhir) }}" / disabled readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategori-option">Nama Client</label>
                                            <select class="form-control" name="client" / disabled readonly>
                                                @foreach ($client as $clients)
                                                    @if ($clients == old('client'))
                                                        <option value="{{ $clients->id_m_klien }}" selected>{{ $clients->nama_perusahaan }}</option>
                                                    @else
                                                        <option value="{{ $clients->id_m_klien }}">{{ $clients->nama_perusahaan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Project <span class="text-danger">*</span></label>
                                            <select class="form-control" name="status_project" / disabled readonly>
                                            @foreach ($status_project as $status_projects)
                                                @if ($status_projects == old('status_project'))
                                                    <option value="{{ $status_projects->id_status_project }}" selected>{{ $status_projects->status_project }}</option>
                                                @else
                                                    <option value="{{ $status_projects->id_status_project }}">{{ $status_projects->status_project }}</option>
                                                    @endif
                                                    @endforeach
                                                    </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <tr>
                    <td>{{ $no++ }}</td>
                    <td width="20%">{{ $p->nama_project}}</td>
                    {{--  <td>{{ $p->deskripsi_project }}</td>  --}}
                    <td>{{ $p->waktumulai }}</td>
                    <td>{{ $p->waktuberakhir }}</td>
                    <td>{{ $p->nama_perusahaan }}</td>
                    <td>
                        <center><a class="btn btn-xs btn-success" target="_blank" href="">{{ $p->status_project }}</a></center>
                    </td>
                    <td>
                        <center><a class="btn btn-xs btn-info modal-title" target="_blank" href="{{route('proyek.tim', ['id' => $p->id_project])}}">Tim</a></center>
                    </td>
                    <td width="12%">
                        <a class="btn btn-xs btn-secondary modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show{{$p->id_project}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-xs btn-warning modal-title" id="modalEdit{{$p->id_project}}"  data-bs-toggle="modal" data-bs-target="#edit{{$p->id_project}}"><i class="fas fa-pen"></i></a>
                        <form method="POST" action="{{ route('proyek.destroy', $p) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-xs btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
        <!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group">
                            <label>Nama Project <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Nama Project" type="text" name="nama_project" value="{{ old('nama_project') }}" />
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Project <span class="text-danger">*</span></label>
                            <textarea class="form-control" type="text-area" placeholder="Deskripsi Project" name="deskripsi_project" value="{{ old('deskripsi_project') }}" /></textarea>
                        </div>
                        <div class="form-group">
                            <label>Waktu Mulai <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" placeholder="Waktu Mulai" name="waktumulai" value="{{ old('waktumulai') }}" />
                        </div>
                        <div class="form-group">
                            <label>Waktu Berakhir <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" placeholder="Waktu Berakhir" name="waktuberakhir" value="{{ old('waktuberakhir') }}" />
                        </div>
                        <div class="form-group">
                            <label for="kategori-option">Nama Client</label>
                                <select class="form-control" name="id_m_klien">
                                    @foreach ($client as $clients)
                                        @if ($clients == old('client'))
                                            <option value="{{ $clients->id_m_klien }}" selected>{{ $clients->nama_perusahaan }}</option>
                                             @else
                                                <option value="{{ $clients->id_m_klien }}">{{ $clients->nama_perusahaan }}</option>
                                        @endif
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Status Project <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_status_project" />
                            @foreach ($status_project as $status_projects)
                                @if ($status_projects == old('status_project'))
                                    <option value="{{ $status_projects->id_status_project }}" selected>{{ $status_projects->status_project }}</option>
                                @else
                                    <option value="{{ $status_projects->id_status_project }}">{{ $status_projects->status_project }}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Simpan</button>
                            <a class="btn btn-danger" data-bs-dismiss="modal">Kembali</a>
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