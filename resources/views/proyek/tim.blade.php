@extends('adminlte::page')

@section('title', 'Tim Project')

@section('content_header')
    <h1>Tim Project</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="card">
        {{-- @foreach ($proyek as $p) --}}
        <div class="card-header" style="background-color: #17a2b8;color: #ffffff;">
            <h3 class="card-title"><b>Data Tim Project</b></h3>
        </div>
        <div class="card-body">
            <input type="hidden" value="" name="" id="" />
            <input type="hidden" value="" name="" id="" />
            <dl class="row col-sm-8">
                <dt class="col-sm-2">Nama Project </dt>
                <dd class="col-sm-10" id="nama_project">: {{$proyek->nama_project}}</dd>
                <dt class="col-sm-2">Client </dt>
                <dd class="col-sm-10" id="nama_klien">: {{$proyek->klien->nama_perusahaan}}</dd>
                <dt class="col-sm-2">Deadline </dt>
                <dd class="col-sm-10" id="waktu_berakhir">: {{$proyek->waktuberakhir}}</dd>
                {{-- <dt class="col-sm-2">Tingkat </dt>
                <dd class="col-sm-10" id="tingkat"></dd>
                <dt class="col-sm-2">Kelas </dt>
                <dd class="col-sm-10" id="kelas"></dd> --}}
            </dl>
        </div>
        {{-- @endforeach --}}
    </div>
    <div class="card card-default">
        <div class="card-body table-responsive">
         <div class="form-group mr-1">
            {{-- <a class="btn btn-primary" href="manPengumuman.create">Tambah</a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i>
                Tambah Tim
            </button>
        </div>

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tim</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('proyek.tim.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" name="id_project" value="{{$proyek[0]->id_project}}"> --}}
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="demo-hor-inputemail">Nama</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="name_user" name="id_user" onchange="autofill()" >
                                        <option value=""></option>
                                        @foreach ($marketing as $marketings)
                                            {{-- @if ($marketings == old('marketing')) --}}
                                                {{-- <option value="{{ $marketings->id_user }}" selected>{{ $marketings->nama }}</option> --}}
                                                 {{-- @else --}}
                                                    <option value="{{ $marketings->id_user }}">{{ $marketings->nama }}</option>
                                            {{-- @endif --}}
                                        @endforeach
                                    </select>
                                    </div>
                            </div>

                         <div class="form-group row">
                             <label class="col-sm-2 control-label" for="demo-hor-inputemail">Jabatan</label>
                                 <div class="col-sm-10">
                                    @foreach ($marketing as $marketings)
                                    {{-- <a class="form-control" placeholder="Jabatan" type="text" name="level" value="{{ $marketings->id_user }}">{{ $marketings->level }} </a> --}}
                                    <input type="text" class="form-control" disabled type="text" name="level" id="jabatan">
                                    @endforeach
                                 </div>
                         </div>
                 </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah Tim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
            <table class="table table-bordered table-striped table-hover mb-0" id="example1">
                <thead>
                    <tr>
                        <th width="5%">
                            <center>No</center>
                        </th>
                        <th width="15%">
                            <center>Nama</center>
                        </th>
                        <th width="15%">
                            <center>Jabatan</center>
                        </th>
                        <th width="15%">
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                @foreach ($tim as $t)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->nama}}</td>
                            {{--  <td>{{ $p->deskripsi_project }}</td>  --}}
                            @php
                                $akunUser = App\Models\akun_user::find($t->id_akun);
                            @endphp
                            <td>{{ ucwords($akunUser->level->level) }}</td>
                            {{--  <td>
                                <center>1</center>
                            </td>
                            <td>
                                <center>Helena Putri</center>
                            </td>
                            <td>
                                <center>Project Manager</center>
                            </td> --}}
                            <td>
                            <center>
                                <form method="POST" action="{{route('proyek.tim.delete', ['id' => $t->id_log_project])}}" style="display: inline-block;">
                                    @method('delete')
                                    @csrf
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Hapus Data?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                </form>
                            </center>
                            </td>
                        </tr>
                        </tbody>
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

        $('#example1').DataTable({
            "responsive": true,
        });

        function autofill(){
            let id = $("#name_user").val();
                
                    $.ajax({
                        url: "/getJabatan/"+id,
                        success: function(res){
                            obj = JSON.parse(res);
                            if(obj[0].level==''){
                                $("#jabatan").val('');
                            }
                            else{
                                $("#jabatan").val(obj[0].level);
                            }
                        },
                        error: function(err){
                            $("#jabatan").val('');
                        }
                    });
                    
            
            // }
        }

    </script>
@stop
