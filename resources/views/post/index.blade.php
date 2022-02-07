@extends('adminlte::page')

@section('title', 'List kegiatan')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <div class="card card-default">
        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                    <input class="form-control" type="text" name="q" value="{{ $q }}"
                        placeholder="Pencarian..." />
                </div>
                <div class="form-group mr-1">
                    <button class="btn btn-success">Refresh</button>
                </div>
                <div class="form-group mr-1">
                    <a class="btn btn-primary" href="{{ route('post.create') }}">Tambah</a>
                </div>
            </form>
        </div>
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jumlah Project Masuk</th>
                        <th>Jumlah Project Berjalan</th>
                        <th>List Project</th>
                        <th>List Task</th>
                        <th>List Jadwal Meeting</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->post_title }}</td>
                        <td>{{ $row->post_title }}</td>
                        <td>{{ $row->post_title }}</td>
                        <td>{{ $row->category }}</td>
                        <td>
                            <img src="{{ $row->image() }}" height="75" />
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('post.show', $row) }}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('post.edit', $row) }}">Edit</a>
                            <form method="POST" action="{{ route('post.destroy', $row) }}" style="display: inline-block;">
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
@stop
