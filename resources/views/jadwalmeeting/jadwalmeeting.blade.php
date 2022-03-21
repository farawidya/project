@extends('adminlte::page')

@section('title', 'Jadwal Meeting')

@section('content_header')
    <h1>Jadwal Meeting</h1>
@stop

@section('content')
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        <div id="calendar"></div>
        </div>
        <div class="card-body table-responsive">
        <center><label> <h2>List Jadwal Meeting</h2></label></center>
            <table class="table table-bordered table-striped table-hover mb-0" id="example2">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Project</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Tempat</th>
                        <th>Agenda</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                @foreach ($jadwalmeeting as $jadwalmeeting)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jadwalmeeting->nama_project }}</td>
                        <td>{{ $jadwalmeeting->start_date }}</td>
                        <td>{{ $jadwalmeeting->end_date }}</td>
                        <td>{{ $jadwalmeeting->tempat }}</td>
                        <td>{{ $jadwalmeeting->agenda }}</td>
                        <td>
                            <a class="btn btn-sm btn-info modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#show">Show</a>
                            <a class="btn btn-sm btn-warning modal-title" id="exampleModalLabel"  data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                            <form method="POST" action="{{ route('jadwalmeeting.destroy', $jadwalmeeting) }}" style="display: inline-block;">
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
          <form action="{{ route('jadwalmeeting.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group">
                            <label>Project <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_project" >
                                @foreach ($project as $projects)
                                    @if ($projects == old('nama_project'))
                                        <option value="{{ $projects}}" selected>{{ $projects->nama_project }}</option>
                                    @else
                                        <option value="{{ $projects}}">{{ $projects->nama_project }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Start Date <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Start Date" type="datetime-local" name="start_date" value="{{ old('start_date') }}" />
                        </div>
                        <div class="form-group">
                            <label>End Date <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="End Date" type="datetime-local" name="end_date" value="{{ old('end_date') }}" />
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Tempat" name="tempat" value="{{ old('tempat') }}" />
                        </div>
                        <div class="form-group">
                                <label>Agenda <span class="text-danger">*</span></label>
                                <input class="form-control" type="text-area" placeholder="Agenda" name="agenda" value="{{ old('agenda')}}" />
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
                <form action="{{ route('jadwalmeeting.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label>Project <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_project" >
                                @foreach ($project as $projects)
                                    @if ($projects == old('nama_project'))
                                        <option value="{{ $projects}}" selected>{{ $projects->nama_project }}</option>
                                    @else
                                        <option value="{{ $projects}}">{{ $projects->nama_project }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Start Date <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Start Date" type="datetime-local" name="start_date" value="{{ old('start_date') }}" />
                        </div>
                        <div class="form-group">
                            <label>End Date <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="End Date" type="datetime-local" name="end_date" value="{{ old('end_date') }}" />
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Tempat" name="tempat" value="{{ old('tempat') }}" />
                        </div>
                        <div class="form-group">
                                <label>Agenda <span class="text-danger">*</span></label>
                                <input class="form-control" type="text-area" placeholder="Agenda" name="agenda" value="{{ old('agenda')}}" />
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
          <form action="{{ route('jadwalmeeting.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                            <label>Project <span class="text-danger">*</span></label>
                            <select class="form-control" name="id_project" >
                                @foreach ($project as $projects)
                                    @if ($projects == old('nama_project'))
                                        <option value="{{ $projects}}" selected>{{ $projects->nama_project }}</option>
                                    @else
                                        <option value="{{ $projects}}">{{ $projects->nama_project }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Start Date <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="Start Date" type="datetime-local" name="start_date" value="{{ old('start_date') }}" />
                        </div>
                        <div class="form-group">
                            <label>End Date <span class="text-danger">*</span></label>
                            <input class="form-control" placeholder="End Date" type="datetime-local" name="end_date" value="{{ old('end_date') }}" />
                        </div>
                        <div class="form-group">
                            <label>Tempat <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Tempat" name="tempat" value="{{ old('tempat') }}" />
                        </div>
                        <div class="form-group">
                                <label>Agenda <span class="text-danger">*</span></label>
                                <input class="form-control" type="text-area" placeholder="Agenda" name="agenda" value="{{ old('agenda')}}" />
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
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
<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/full-calender',
        selectable:true,
        selectHelper: true,
        select:function(start_date, end_date, allDay)
        {
            var title = prompt('Project:'); 

            if(title)
            {
                var start_date = $.fullCalendar.formatDate(start_date, 'Y-MM-DD HH:mm:ss');

                var end_date = $.fullCalendar.formatDate(end_date, 'Y-MM-DD HH:mm:ss');
            }
        },
    });

});
  
</script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
@stop