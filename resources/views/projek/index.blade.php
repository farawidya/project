@extends('adminlte::page')

@section('title', 'List Project')

@section('content_header')
    <h1>Management Project Manager</h1>
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
        Tambah
     </button>
   </div>
    </form>
    </div>
    <div class="card-body  table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0" id="example2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>  
                        <th>Username</th>  
                        <th>Email</th>  
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($list as $list)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $list->Nama }}</td>
                        <td>{{ $list->Username }}</td>
                        <td>{{ $list->Email }}</td>
                        <td>
                
                           
                            <form method="POST" action="{{ route('projek.destroy', $list) }}" style="display: inline-block;">
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

    <!-- TambahModal -->
         <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambah" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahLabel">Tambah Project</h5>
                </div>
                <div class="modal-body">
                  <form action="{{ route('projek.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="nama" name="nama" value="{{ old('Nama') }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat<span class="text-danger">*</span></label>
                            <textarea  class="form-control" type="text" placeholder="alamat" name="alamat" value="{{ old('Alamat') }}"></textarea>
                    </div>      
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="email" name="email" value="{{ old('email') }}">
                    </div>      
                    <div class="form-group">
                        <label>No Telp <span class="text-danger">*</span></label>
                        <input class="form-control" type="text"  minlength="11" maxlength="13" onkeypress="return isNumber(event)" placeholder="no telp" name="No_telp" value="{{ old('No_telp') }}">
                    </div>
                    <div class="form-group">
                        <label>Username <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="username" name="username" value="{{ old('Username') }}" >
                    </div>
                    <div class="form-group">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" placeholder="password" name="password" value="{{ old('Password') }}">
                    </div>

                         <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/projek" class="btn btn-danger">
                        Batal
                    </a>
                </div>

                  </form>
                </div>
                </div>
              </div>
            </div>
        

<!-- ShowModal -->
         <div class="modal fade" id="show" tabindex="-1" aria-labelledby="show" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahLabel">Detail Project</h5>
                </div>
                <div class="modal-body">
                  <form action="{{ route('projek.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="nama" name="Nama" value="{{ old('Nama') }}" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat<span class="text-danger">*</span></label>
                            <textarea  class="form-control" type="text" placeholder="alamat" name="alamat" value="{{ old('Alamat') }}" disabled readonly></textarea>
                    </div>  
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="email" name="Email" value="{{ old('email') }}" disabled readonly>
                    </div>          
                    <div class="form-group">
                        <label>No Telp <span class="text-danger">*</span></label>
                        <input class="form-control" type="text"  minlength="11" maxlength="13" onkeypress="return isNumber(event)"placeholder="No telp" name="No_telp" value="{{ old('No_telp') }}" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Username <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="username" name="username" value="{{ old('Username') }}" disabled readonly>
                    </div>
                    <div class="form-group">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" placeholder="password" name="password" value="{{ old('Password') }}" disabled readonly>
                    </div>

                         <div class="modal-footer">
                   <button type= "button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                  
                </div>

                  </form>
                </div>
                </div>
              </div>
            </div>
    

             <!-- EditModal -->
         <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tambahLabel">Edit Project</h5>
                </div>
                <div class="modal-body">
                  <form action="{{ route('projek.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                        <label>Nama <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="nama" name="nama" value="{{ old('Nama') }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat<span class="text-danger">*</span></label>
                        <textarea class="form-control" type="text" placeholder="alamat" name="alamat" value="{{ old('Alamat') }}"></textarea>
                    </div>  
                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="email" name="email" value="{{ old('email') }}">
                    </div>          
                    <div class="form-group">
                        <label>No Telpn <span class="text-danger">*</span></label>
                        <input class="form-control" type="text"  minlength="11" maxlength="13" onkeypress="return isNumber(event)" placeholder="no telp" name="No_telp" value="{{ old('No_telp') }}">
                    </div>
                    <div class="form-group">
                        <label>Username <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="username" name="username" value="{{ old('Username') }}" >
                    </div>
                    <div class="form-group">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" placeholder="password" name="password" value="{{ old('Password') }}">
                    </div>

                         <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/projek" class="btn btn-danger">
                        Batal
                    </a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

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
