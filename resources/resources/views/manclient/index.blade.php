@extends('adminlte::page')

@section('title', 'management Client')

@section('content_header')
    <h1>management Client</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
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
                            @foreach ($klien as $klien)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $klien->nama_client }}</td>
                                    <td>{{ $klien->email }}</td>
                                    <td>{{ $klien->no_hp }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Show
                                          </button>
                      
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Show</h5>
                </div>
                <div class="modal-body">
        
                    <div class="mb-3 row">
                        <div class="col-sm-11">
                            <input type="alphadash" class="form-control" id="inputNama_client" name="Nama_client" value="{{ old('Nama_client') }}" >
                        </div>
                    </div>
        
                        <div class="mb-3 row">
                            <label for="inputemail" class="col-sm-3 col-form-label">email <span class="text-danger"></span></label>
                            <div class="col-sm-11">
                                <input type="alphadash" class="form-control" id="inputemail" name="email" value="{{ old('email') }}" >
                            </div>
                        </div>
        
                    <div class="mb-3 row">
                        <label for="inputNo_telepon" class="col-sm-3 col-form-label">No telepon <span class="text-danger"></span></label>
                        <div class="col-sm-11">
                            <input type="alphadash" class="form-control" id="inputNo_telepon" name="No_telepon" value="{{ old('No_telepon') }}" >
                        </div>
                    </div>
                    
                    </div>
                    <div class="mb-4 row">
                        <label for="inputPekerjaan" class="col-sm-3 col-form-label">Pekeerjaan  <span class="text-danger"></span></label>
                        <div class="col-sm-11">
                            <input type="alphadash" class="form-control" id="inputPekerjaan" name="Pekerjaan" value="{{ old('Pekerjaan') }}" >
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat  <span class="text-danger"></span></label>
                        <div class="col-sm-15">
                            <input type="Alamat" class="form-control" id="inputAlamat" name="Alamat" value="{{ old('Alamat') }}" >
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
                                                             <!-- Button trigger modal -->
                                 <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit
                                  </button>
              
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">tambah client</h5>
        </div>
        <div class="modal-body">

            <div class="mb-3 row">
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputNama_client" name="Nama_client" value="{{ old('Nama_client') }}" >
                </div>
            </div>

                <div class="mb-3 row">
                    <label for="inputemail" class="col-sm-3 col-form-label">email <span class="text-danger"></span></label>
                    <div class="col-sm-15">
                        <input type="alphadash" class="form-control" id="inputemail" name="email" value="{{ old('email') }}" >
                    </div>
                </div>

            <div class="mb-3 row">
                <label for="inputNo_telepon" class="col-sm-3 col-form-label">No telepon <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputNo_telepon" name="No_telepon" value="{{ old('No_telepon') }}" >
                </div>
            </div>
            
            </div>
            <div class="mb-4 row">
                <label for="inputPekerjaan" class="col-sm-3 col-form-label">Pekeerjaan  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputPekerjaan" name="Pekerjaan" value="{{ old('Pekerjaan') }}" >
                </div>
            </div>
            <div class="mb-4 row">
                <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="Alamat" class="form-control" id="inputAlamat" name="Alamat" value="{{ old('Alamat') }}" >
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
                </div>
                </div>
            </form>
       
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">edit client</h5>
        </div>
        <div class="modal-body">

            <div class="mb-3 row">
                <label for="inputNama_admin" class="col-sm-3 col-form-label">Nama client  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputNama_client" name="Nama_client" value="{{ old('Nama_client') }}" >
                </div>
            </div>

                <div class="mb-3 row">
                    <label for="inputemail" class="col-sm-3 col-form-label">email <span class="text-danger"></span></label>
                    <div class="col-sm-15">
                        <input type="alphadash" class="form-control" id="inputemail" name="email" value="{{ old('email') }}" >
                    </div>
                </div>

            <div class="mb-3 row">
                <label for="inputNo_telepon" class="col-sm-3 col-form-label">No telepon <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputNo_telepon" name="No_telepon" value="{{ old('No_telepon') }}" >
                </div>
            </div>
            
            </div>
            <div class="mb-4 row">
                <label for="inputPekerjaan" class="col-sm-3 col-form-label">Pekeerjaan  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="alphadash" class="form-control" id="inputPekerjaan" name="Pekerjaan" value="{{ old('Pekerjaan') }}" >
                </div>
            </div>
            <div class="mb-4 row">
                <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat  <span class="text-danger"></span></label>
                <div class="col-sm-15">
                    <input type="Alamat" class="form-control" id="inputAlamat" name="Alamat" value="{{ old('Alamat') }}" >
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
                            
                            <form method="POST" action="{{ route('manclient.destroy', $klien) }}" style="display: inline-block;">
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
    <link rel="stylesheet" href="/css/client_custom.css">
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
