@extends('adminlte::page')

@section('title', 'Management Client')

@section('content_header')
    <h1>Management Client</h1>
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
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Client</th>
                        <th>Bidang</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($client as $client)
                <!-- Modal edit -->
        <div class="modal fade" id="edit{{$client->id_klien}}" tabindex="-1" aria-labelledby="modalEdit{{$client->id_klien}}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEdit{{$client->id_klien}}">Edit</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('client.update', $client) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Nama Perusahaan <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nama Perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan', $client->nama_perusahaan) }}" />
                            </div>
                            <div class="form-group">
                                <label>Nama Client <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nama Client" name="nama_klien" value="{{ old('nama_klien', $client->nama_klien) }}" />
                            </div>
                            <div class="form-group">
                                <label>Bidang <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Bidang" name="bidang" value="{{ old('bidang', $client->bidang) }}" />
                            </div>
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email', $client->email) }}" />
                            </div>
                            <div class="form-group">
                                <label>No Hp <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" placeholder="No Hp" name="no_hp" value="{{ old('no_hp', $client->no_hp) }}" />
                            </div>
                            <div class="form-group">
                                <label>Alamat <span class="text-danger">*</span></label>
                                <input class="form-control" type="text-area" placeholder="Alamat" name="alamat" value="{{ old('alamat', $client->alamat)}}" />
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- mmodal show -->
        <div class="modal fade" id="show{{$client->id_klien}}" tabindex="-1" aria-labelledby="showLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showLabel">Detail</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Perusahaan <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nama Perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan', $client->nama_perusahaan) }}" / disabled readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Client <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nama Client" name="nama_klien" value="{{ old('nama_klien', $client->nama_klien) }}" / disabled readonly>
                            </div>
                            <div class="form-group">
                                <label>Bidang <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Bidang" name="bidang" value="{{ old('bidang', $client->bidang) }}" / disabled readonly>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email', $client->email) }}" / disabled readonly>
                            </div>
                            <div class="form-group">
                                <label>No Hp <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" placeholder="No Hp" name="no_hp" value="{{ old('no_hp', $client->no_hp) }}" / disabled readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat <span class="text-danger">*</span></label>
                                <input class="form-control" type="text-area" placeholder="Alamat" name="alamat" value="{{ old('alamat', $client->alamat)}}" / disabled readonly>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $client->nama_perusahaan }}</td>
                        <td>{{ $client->nama_klien }}</td>
                        <td>{{ $client->bidang }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->no_hp }}</td>
                        <td>
                            <a class="btn btn-sm btn-secondary modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show{{$client->id_klien}}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning modal-title" id="modalEdit{{$client->id_klien}}"  data-bs-toggle="modal" data-bs-target="#edit{{$client->id_klien}}"><i class="fas fa-pen"></i></a>
                            <form method="POST" action="{{ route('client.destroy', $client) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Perusahaan <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nama Perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" />
                            </div>
                            <div class="form-group">
                                <label>Nama Client <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nama Client" name="nama_klien" value="{{ old('nama_klien') }}" />
                            </div>
                            <div class="form-group">
                                <label>Bidang <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Bidang" name="bidang" value="{{ old('bidang') }}" />
                            </div>
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email') }}" />
                            </div>
                            <div class="form-group">
                                <label>No Hp <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" placeholder="No HP" name="no_hp" value="{{ old('no_hp') }}" />
                            </div>
                            <div class="form-group">
                                <label>Alamat <span class="text-danger">*</span></label>
                                <input class="form-control" type="text-area" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}" />
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