@extends('adminlte::page')

@section('title', 'Jadwal meeting')

@section('content_header')
    <h1  class="m-0 text-dark text-center">Jadwal Meeting</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
              
                <!-- Button trigger modal -->

<div class="card card-default">
    <div class="card card-default">
        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahjadmeet">Tambah Jadwal</button>
                </div>
            </form>
        </div>
    </div>  
<div class="card-body table-responsive">
    <table class="table table-bordered table-striped table-hover mb-0" id="example2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Project</th>
                <th>Tanggal</th>
                <th>Tempat</th>
                <th>Agenda</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php $no = 1; ?>
        @foreach ($meet as $meet)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $meet->nama_project }}</td>
                <td>{{ $meet->tanggal }}</td>
                <td>{{ $meet->tempat }}</td>
                <td>{{ $meet->agenda }}</td>
                {{-- <td>
                    <img src="{{ $meet->image() }}" height="75" />
                </td> --}}
                <td>
                    <button type="button" class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#showjadmeet">
                        Show
                    </button>                           
                     <button type="button" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#editjadmeet">
                        Edit
                    </button>
                    <form method="POST" action="{{ route('jadwalmeeting.destroy', $meet) }}" style="display: inline-block;">
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
  
  <!-- CreateModal -->
  <div class="modal fade" id="tambahjadmeet" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahjadmeetLabel">Jadwal meeting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('jadwalmeeting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> Nama project <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label> Tanggal <span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label>Tempat <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label>Agenda<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('jadwalmeeting.index') }}">Kembali</a>
                </div>
            </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    
    <!-- EditModal -->
    <div class="modal fade" id="editjadmeet" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editjadmeetLabel">Edit Jadwal meeting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ route('jadwalmeeting.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label> Nama project <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                  </div>
                  <div class="form-group">
                      <label> Tanggal <span class="text-danger">*</span></label>
                      <input class="form-control" type="date" name="post_title" value="{{ old('post_title') }}" />
                  </div>
                  <div class="form-group">
                      <label>Tempat <span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                  </div>
                  <div class="form-group">
                      <label>Agenda<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary">Simpan</button>
                      <a class="btn btn-danger" href="{{ route('jadwalmeeting.index') }}">Kembali</a>
                  </div>
              </form>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

        
    <!-- ShowModal -->
    <div class="modal fade" id="showjadmeet" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="showjadmeetLabel">Show Jadwal meeting</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jadwalmeeting.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama project <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Nama project" name="Nama project" value="{{ old('Nama project') }}" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Tanggal" name="Tanggal" value="{{ old('Tanggal') }}" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Tempat <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Tempat" name="Tempat" value="{{ old('Tempat') }}" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Agenda <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="Agenda" name="Agenda" value="{{ old('Agenda') }}" disabled readonly>
                    </div>
                </form>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stop
