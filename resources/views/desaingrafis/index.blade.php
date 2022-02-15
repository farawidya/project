@extends('adminlte::page')

@section('title', 'Desain grafis')

@section('content_header')
    <h1 class="m-0 text-dark text-center ">Desain Grafis</h1>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdesain">Tambah Desain</button>
                </div>
            </form>
        </div>
    </div>    
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0" id="example2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Desain grafis</th>
                    <th>Alamat</th>
                    <th>Gmail</th>
                    <th>No HP</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            @foreach ($meet as $meet)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $meet->Nama_Desain_grafis }}</td>
                    <td>{{ $meet->Alamat }}</td>
                    <td>{{ $meet->Gmail }}</td>
                    <td>{{ $meet->No_hp }}</td>
                    <td>{{ $meet->Username }}</td>
                    {{-- <td>
                        <img src="{{ $meet->image() }}" height="75" />
                    </td> --}}
                    <td>
                        <button type="button" class="btn btn-warning btn-xs" data-bs-toggle="modal" data-bs-target="#showdesain">
                            Show
                        </button>
                        <button type="button" class="btn btn-primary btn-xs" data-bs-toggle="modal" data-bs-target="#editdesain">
                            Edit
                        </button>
                        <form method="POST" action="{{ route('desaingrafis.destroy', $meet) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger btn-xs"
                                onclick="return confirm('Hapus Data?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

 <!-- CreateModal -->
 <div class="modal fade" id="tambahdesain" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="tambahdesainLabel">Desain grafis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('desaingrafis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> Nama Desain grafis <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label> Alamat <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label>Gmail <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label>No HP<span class="text-danger">*</span></label>
                    <input class="form-control" type="text"  maxlength="13" onkeypress="return isNumber(event)" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="post_title" value="{{ old('post_title') }}" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('desaingrafis.index') }}">Kembali</a>
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
<div class="modal fade" id="editdesain" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editdesainLabel">Edit Desain grafis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('desaingrafis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label> Nama Desain grafis <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
            </div>
            <div class="form-group">
                <label> Alamat <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
            </div>
            <div class="form-group">
                <label>Gmail <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
            </div>
            <div class="form-group">
                <label>No HP<span class="text-danger">*</span></label>
                <input class="form-control" type="text"  maxlength="13" onkeypress="return isNumber(event)" name="post_title" value="{{ old('post_title') }}" />
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="post_title" value="{{ old('post_title') }}" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="post_title" value="{{ old('post_title') }}" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('desaingrafis.index') }}">Kembali</a>
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
<div class="modal fade" id="showdesain" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="showdesainLabel">Show Desain grafis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('desaingrafis.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label>Nama Desain grafis <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="Desain grafis" name="Nama_Desain_grafis" value="{{ old('Nama_Desain_grafis') }}" disabled readonly>
            </div>
            <div class="form-group">
                <label>Alamat<span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="Desain grafis" name="Alamat" value="{{ old('Alamat') }}" disabled readonly>
            </div>            
            <div class="form-group">
                <label>Gmail <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="Gmail" name="Gmail" value="{{ old('Gmail') }}" disabled readonly>
            </div>
            <div class="form-group">
                <label>No HP <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="No telp" name="No_telp" value="{{ old('No_telp') }}" disabled readonly>
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="Username" name="Username" value="{{ old('Username') }}" disabled readonly>
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" placeholder="Password" name="Password" value="{{ old('Password') }}" disabled readonly>
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
@stop
