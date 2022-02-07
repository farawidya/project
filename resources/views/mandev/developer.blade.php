@extends('adminlte::page')

@section('title', 'Management Developer')

@section('content_header')
    <h1>Management Developer</h1>
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
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($mandev as $mandev)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $mandev->nama }}</td>
                        <td>{{ $mandev->jenis_kelamin }}</td>
                        <td>{{ $mandev->no_telp }}</td>
                        <td>{{ $mandev->gmail }}</td>
                        <td>{{ $mandev->username }}</td>
                        <td>{{ $mandev->password }}</td>
                        <td>
                            <a class="btn btn-sm btn-info modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show">Show</a>
                            <a class="btn btn-sm btn-warning modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                            <form method="POST" action="#" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
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
          <form action="#" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input class="form-control" id="huruf" type="text" placeholder="Nama" name="nama" value="{{ old('nama') }}" />
                        </div>
                          <div class="form-group">
                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                            <select class="form-control" name="jenis_kelamin" />
                            @foreach ($categories as $category)
                                @if ($category == old('jenis_kelamin'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No. Telp <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="No. Telp" minlength="11" maxlength="13" type="text" onkeypress="return isNumber(event)" name="no_telp" value="{{ old('no_telp') }}" />
                        </div>
                        <div class="form-group">
                            <label>Gmail <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" placeholder="Email" name="gmail" value="{{ old('gmail') }}" />
                        </div>
                        <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="name" placeholder="Username" name="username" value="{{ old('username') }}" />
                        </div>
                        <div class="form-group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" placeholder="Password" name="password" value="{{ old('password') }}" />
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
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="bukanangka" placeholder="Nama" name="Nama" value="{{ old('Nama') }}" />
                    </div>
                    <div class="form-group">
                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                            <select class="form-control" name="jenis_kelamin" />
                            @foreach ($categories as $category)
                                @if ($category == old('jenis_kelamin'))
                                    <option value="{{ $category }}" selected>{{ $category }}</option>
                                @else
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                    <div class="form-group">
                        <label>No. Telp <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="No. Telp" minlength="11" maxlength="13" type="text" onkeypress="return isNumber(event)" name="no telp" value="{{ old('no_telp') }}" />
                    </div>
                    <div class="form-group">
                        <label>Gmail <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" placeholder="Email" name="gmail" value="{{ old('gmail') }}" />
                    </div>
                    <div class="form-group">
                        <label>Username <span class="text-danger">*</span></label>
                        <input class="form-control" type="username" placeholder="Username" name="username" value="{{ old('username') }}" />
                    </div>
                    <div class="form-group">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" placeholder="Password" name="password" value="{{ old('password') }}" />
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
          <form action="#" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="bukanangka" placeholder="Nama" name="Nama" value="{{ old('Nama') }}" / disabled readonly>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                <select class="form-control" name="jenis_kelamin" / disabled readonly>
                @foreach ($categories as $category)
                    @if ($category == old('jenis_kelamin'))
                        <option value="{{ $category }}" selected>{{ $category }}</option>
                    @else
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endif
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>No. Telp <span class="text-danger">*</span></label>
                <input class="form-control" placeholder="No. Telp" minlength="11" maxlength="13" type="text" onkeypress="return isNumber(event)" name="no telp" value="{{ old('no_telp') }}" / disabled readonly>
            </div>
            <div class="form-group">
                <label>Gmail <span class="text-danger">*</span></label>
                <input class="form-control" type="email" placeholder="Email" name="gmail" value="{{ old('gmail') }}" / disabled readonly>
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" placeholder="Username" name="username" value="{{ old('username') }}" / disabled readonly>
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" placeholder="Password" name="password" value="{{ old('password') }}" / disabled readonly>
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
