@extends('adminlte::page')

@section('title', 'Management MOM')

@section('content_header')
    <h1>Management MOM</h1>
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
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Agenda</th>
                        <th>Hasil Pembahasan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($mom as $mom)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mom->nama_project }}</td>
                        <td>{{ $mom->start_date }}</td>
                        <td>{{ $mom->tempat }}</td>
                        <td>{{ $mom->agenda }}</td>
                        <td>{{ $mom->hasil_pembahasan }}</td>
                        <td>
                            <a class="btn btn-sm btn-info modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show">Show</a>
                            <a class="btn btn-sm btn-warning modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                            <form method="POST" action="{{ route('mom.destroy', $mom) }}" style="display: inline-block;">
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
<div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('mom.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label>Tanggal <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_jadwal_meeting" />
                            @foreach ($jadwalmeeting as $jadwalmeetings)
                                @if ($jadwalmeetings == old('jadwalmeeting'))
                                    <option value="{{ $jadwalmeetings->id_jadwal_meeting }}" selected>{{ $jadwalmeetings->start_date }}</option>
                                @else
                                    <option value="{{ $jadwalmeetings->id_jadwal_meeting }}">{{ $jadwalmeetings->start_date }}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                          <div class="form-group">
                            <label>Nama Project <span class="text-danger">*</span></label>
                            <select class="form-control" id="proyek-option" name="id_project">
                                @foreach ($proyek as $proyeks)
                                    <option value="{{ $proyeks->id_project }}">{{ $proyeks->nama_project }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_jadwal_meeting" />
                            @foreach ($jadwalmeeting as $jadwalmeetings)
                                @if ($jadwalmeetings == old('jadwalmeeting'))
                                    <option value="{{ $jadwalmeetings->tempat }}" selected></option>
                                @else
                                    <option value="{{ $jadwalmeetings->id_jadwal_meeting }}">{{ $jadwalmeetings->tempat }}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Agenda <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_jadwal_meeting" />
                            @foreach ($jadwalmeeting as $jadwalmeetings)
                                @if ($jadwalmeetings == old('jadwalmeeting'))
                                    <option value="{{ $jadwalmeetings->agenda }}" selected></option>
                                @else
                                    <option value="{{ $jadwalmeetings->id_jadwal_meeting }}">{{ $jadwalmeetings->agenda }}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                                    <label>Hasil Pembahasan <span class="text-danger">*</span></label>
                                    <div class="col-sm-14">
                                        <textarea
                                            id="summernote" name="hasil_pembahasan" value="{{ old('hasil_pembahasan') }}" ></textarea>
                                    </div>
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
<div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('mom.store') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')    
                @csrf
                    <div class="form-group">
                            <label>Nama Project <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Nama Project" type="text" name="nama_project" value="{{ old('nama_project') }}" />
                        </div>
                        <div class="form-group">
                            <label>Tanggal <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Tanggal" type="date" name="tanggal" value="{{ old('tanggal') }}" />
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Tempat" type="text" name="tempat" value="{{ old('tempat') }}" />
                        </div>
                        <div class="form-group">
                            <label>Agenda <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Agenda" type="text" name="agenda" value="{{ old('agenda') }}" />
                        </div>
                        <div class="form-group">
                                    <label>Hasil Pembahasan <span class="text-danger">*</span></label>
                                    <div class="col-sm-14">
                                        <textarea
                                            id="summernote1" name="hasil_pembahasan" value="{{ old('hasil_pembahasan') }}" ></textarea>
                                    </div>
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
<div class="modal fade" id="show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Show</h5>
            </div>
        <div class="modal-body">
          <form action="{{ route('mom.store') }}" method="POST" enctype="multipart/form-data">
          @method('PUT')  
              @csrf
              <div class="form-group">
                        <label>Nama Project <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Nama Project" id="bukanangka" type="text" name="nama_project" value="{{ old('nama_project') }}" / disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Tanggal" type="date" name="tanggal" value="{{ old('tanggal') }}" / disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Tempat" type="text" name="tempat" value="{{  old('tempat') }}" / disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Agenda <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Agenda" type="text" name="agenda" value="{{  old('agenda') }}" / disabled readonly>
                    </div>
                    <div class="form-group">
                                    <label>Hasil Pembahasan <span class="text-danger">*</span></label>
                                    <div class="col-sm-14">
                                        <textarea
                                            id="summernote2" name="hasil_pembahasan" value="{{ old('hasil_pembahasan') }}" / disabled readonly></textarea>
                                    </div>
                        </div>
          </form>
        </div>
        </div>
        
        <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Download PDF</button>
          <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
       
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        })
        $(function() {
            // Summernote
            $('#summernote1').summernote()
        })
        $(function() {
            // Summernote
            $('#summernote2').summernote()
        })
        $('#example1').DataTable({
            "responsive": true,
        });
    </script>
@stop