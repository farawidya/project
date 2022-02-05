@extends('adminlte::page')

@section('title', 'Management Developer')

@section('content_header')
    <h1 class="m-0 text-dark">Management Developer</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="/mandev/create" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Hp</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>User</td>
                                    <td>Laki-Laki</td>
                                    <td>12435687</td>
                                    <td>user@gmail.com</td>
                                    <td>
                                        <a href="/mandev/show" class="btn btn-primary btn-xs">
                                            Show
                                        </a>
                                        <a href="/mandev/edit" class="btn btn-warning btn-xs">
                                            Edit
                                        </a>
                                        <a href="#"
                                            onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
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
@endpush
