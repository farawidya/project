@extends('adminlte::page')

@section('title', 'Management Task')

@section('content_header')
    <h1>Management Task</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card card-default">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0" id="example1">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Nama Project</center></th>
                        <th><center>Client</center></th>
                        <th><center>Deadline</center></th>
                        <th><center>Aksi</center></th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($proyek as $proyek)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $proyek->nama_project }}</td>
                        <td>{{ $proyek->nama_perusahaan }}</td>
                        <td>{{ $proyek->waktuberakhir }}</td>
                        <td> 
                            <center><a class="btn btn-sm btn-info" target="_blank" href="{{route('task.lead', ['id'=> $proyek->id_project])}}">Lihat Task</a></center>
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

        $('#example1').DataTable({
            "responsive": true,
        });
    </script>
@stop
