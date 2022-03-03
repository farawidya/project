@extends('adminlte::page')

@section('title', 'Dokumen Project')

@section('content_header')
    <h1>Dokumen Project</h1>
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
                        <th>
                            <center>No</center>
                        </th>
                        <th>
                            <center>Nama Project</center>
                        </th>
                        <th>
                            <center>Client</center>
                        </th>
                        <th>
                            <center>Deadline</center>
                        </th>
                        <th>
                            <center>Aksi</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <center>1</center>
                        </td>
                        <td>
                            <center>Lelang</center>
                        </td>
                        <td>
                            <center>Sun</center>
                        </td>
                        <td>
                            <center>Agustus</center>
                        </td>
                        <td>
                            <center><a class="btn btn-sm btn-info" target="_blank" href="dokumen/view">Lihat Dokumen</a></center>
                        </td>
                    </tr>
                </tbody>
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
