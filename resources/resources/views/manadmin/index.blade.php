@extends('adminlte::page')

@section('title', 'Management Admin')

@section('content_header')
    <h1>Management Admin</h1>
@stop

@section('content')
<div class="card card-default">
    <div class="card-header">
        <form class="form-inline">
                  <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah
                  </button> 
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped table-hover mb-0" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Tlpn</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        @foreach ($rows as $rows)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $rows->nama_admin }}</td>
                                <td>{{ $rows->email }}</td>
                                <td>{{ $rows->no_hp }}</td>
                    
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" btn data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Show
                                      </button>
                
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">tambah admin</h5>
        </div>
        <div class="modal-body">

            <div class="mb-3 row">
                <label for="inputNama_admin" class="col-sm-3 col-form-label">Nama Admin  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputNama_admin" name="Nama_Admin" value="{{ old('Nama_Admin') }}" >
                </div>
            </div>

                <div class="mb-3 row">
                    <label for="inputNo_telpon" class="col-sm-3 col-form-label">No telepon  <span class="text-danger"></span></label>
                    <div class="col-sm-15">
                        <input type="alphadash" class="form-control" id="inputNo_telepom" name="No telepon" value="{{ old('username') }}" >
                    </div>
                </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputEmail" name="Email" value="{{ old('Email') }}" >
                </div>
            </div>
            
            </div>
            <div class="mb-4 row">
                <label for="inputUsername" class="col-sm-3 col-form-label">Username  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputUsername" name="username" value="{{ old('username') }}" >
                </div>
            </div>
            <div class="mb-4 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Password <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="password" class="form-control" id="inputPassword" name="Password" value="{{ old('password') }}" >
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">simpan </button>
        </div>
      </div>
    </div>
  </div>

                              
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <a class="btn btn-sm btn-info" href="{{ route('manadmin.edit', $rows) }}">Show detail </a>
                                    </div>
                                    <div class="modal-body">
                            
                                        <div class="mb-3 row">
                                            <label for="inputNama_admin" class="col-sm-3 col-form-label">Nama Admin  <span class="text-danger"></span></label>
                                            <div class="col-sm-15 dissable requered">
                                                <input type="alphadash" class="form-control" id="inputNama_admin" name="Nama_Admin" value="{{ old('Nama_Admin') }}" >
                                            </div>
                                        </div>
                            
                                            <div class="mb-3 row">
                                                <label for="inputNo_telpon" class="col-sm-3 col-form-label">No telepon  <span class="text-danger"></span></label>
                                                <div class="col-sm-15">
                                                    <input type="alphadash" class="form-control" id="inputNo_telepom" name="No telepon" value="{{ old('username') }}" >
                                                </div>
                                            </div>
                            
                                        <div class="mb-3 row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Email <span class="text-danger"></span></label>
                                            <div class="col-sm-15">
                                                <input type="alphadash" class="form-control" id="inputEmail" name="Email" value="{{ old('Email') }}" >
                                            </div>
                                        </div>
                                        
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="inputUsername" class="col-sm-3 col-form-label">Username  <span class="text-danger"></span></label>
                                            <div class="col-sm-15">
                                                <input type="alphadash" class="form-control" id="inputUsername" name="username" value="{{ old('username') }}" >
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Password <span class="text-danger"></span></label>
                                            <div class="col-sm-15">
                                                <input type="password" class="form-control" id="inputPassword" name="Password" value="{{ old('password') }}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                           
                              <!-- Button trigger modal -->
<button type="button" class="btn btn-warning btn-sm" btn data-bs-toggle="modal" data-bs-target="#exampleModal">
    Edit 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <a class="btn btn-sm btn-info" href="{{ route('manadmin.edit', $rows) }}">Edit</a>
        </div>
        <div class="modal-body">

            <div class="mb-3 row">
                <label for="inputNama_admin" class="col-sm-3 col-form-label">Nama Admin  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputNama_admin" name="Nama_Admin" value="{{ old('Nama_Admin') }}" >
                </div>
            </div>

                <div class="mb-3 row">
                    <label for="inputNo_telpon" class="col-sm-3 col-form-label">No telepon  <span class="text-danger"></span></label>
                    <div class="col-sm-15">
                        <input type="alphadash" class="form-control" id="inputNo_telepom" name="No telepon" value="{{ old('username') }}" >
                    </div>
                </div>

            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputEmail" name="Email" value="{{ old('Email') }}" >
                </div>
            </div>
            
            </div>
            <div class="mb-4 row">
                <label for="inputUsername" class="col-sm-3 col-form-label">Username  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputUsername" name="username" value="{{ old('username') }}" >
                </div>
            </div>
            <div class="mb-4 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Password <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="password" class="form-control" id="inputPassword" name="Password" value="{{ old('password') }}" >
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">simpan </button>
        </div>
      </div>
    </div>
  </div>
                            <form method="POST" action="{{ route('manadmin.destroy', $rows) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Hapus Data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        id="example2"
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
@stop