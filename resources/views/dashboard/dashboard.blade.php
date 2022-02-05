@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Welcome to SUPER ADMIN.</p>
<hr>

<div class="row">

    <div class="col-sm-4">

        <div class="card">

            <div class="card-body rounded bg-primary">

                <h5 class="card-title">Jumlah Project Masuk</h5>

                <p class="card-text fa-2x">100</p>

            </div>

        </div>

    </div>

    <div class="col-sm-4">

        <div class="card">

            <div class="card-body rounded bg-warning">

                <h5 class="card-title">Jumlah Project Berjalan</h5>

                <p class="card-text fa-2x">100</p>

            </div>

        </div>

    </div>

    <div class="col-sm-4">

        <div class="card">

            <div class="card-body rounded bg-info">

                <h5 class="card-title">Jumlah Project Pending</h5>

                <p class="card-text fa-2x">100</p>

            </div>

        </div>

    </div>

    <div class="col-sm-4">

        <div class="card">

            <div class="card-body rounded bg-success">

                <h5 class="card-title">Jumlah project Selesai</h5>

                <p class="card-text fa-2x">100</p>

            </div>

        </div>

    </div>

</div>

<!-- Main content -->
<div class="content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6">

                {{-- Grafik peserta per-wilayah --}}
                <div class="card">  

                    <div class="card-header border-0">

                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Grafik Project Masuk</h3>

                            <p class="ml-auto d-flex flex-column text-right">

                            <span class="text-success">

                                <i class="fas fa-arrow-up"></i> 33.1%

                            </span>

                            <span class="text-muted">Since last month</span>

                            </p>

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="position-relative mb-4">

                            <canvas id="pesertaWilayah" height="200"></canvas>

                        </div>

                    </div>

                </div>
                {{-- End --}}

                {{-- Grafik peserta per-bulam --}}
                {{-- <div class="card">

                    <div class="card-header border-0">

                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Grafik peserta per-bulan</h3>

                        </div>

                    </div>

                    <div class="card-body">                        

                        <div class="position-relative mb-4">

                            <canvas id="pesertaBulan" height="200"></canvas>

                        </div>

                    </div>

                </div> --}}
                {{-- End --}}

            </div>
            
            <div class="col-lg-6">
                
                {{-- Grafik jumlah kegiatan per-Wilayah --}}
                <div class="card">

                    <div class="card-header border-0">

                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Grafik Project Berjalan</h3>

                            <p class="ml-auto d-flex flex-column text-right">

                            <span class="text-success">

                                <i class="fas fa-arrow-up"></i> 33.1%

                            </span>

                            <span class="text-muted">Since last month</span>

                            </p>

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="position-relative mb-4">

                            <canvas id="kegiatanWilayah" height="200"></canvas>

                        </div>

                    </div>

                </div>
                {{-- End --}}

                {{-- Grafik jumlah kegiatan per-bulan --}}
                {{-- <div class="card">

                    <div class="card-header border-0">

                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Grafik Project Berjalan</h3>

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="position-relative mb-4">

                            <canvas id="kegiatanBulan" height="200"></canvas>

                        </div>

                    </div>

                </div> --}}
                {{-- End --}}

            </div>
            
            <div class="col-lg-6">
                
                {{-- Grafik peserta per-EO --}}
                <div class="card">

                    <div class="card-header border-0">

                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Grafik Project Pending</h3>

                            <p class="ml-auto d-flex flex-column text-right">

                            <span class="text-success">

                                <i class="fas fa-arrow-up"></i> 33.1%

                            </span>

                            <span class="text-muted">Since last Event</span>

                            </p>

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="position-relative mb-4">

                            <canvas id="pesertaEO" height="200"></canvas>

                        </div>

                    </div>

                </div>
                {{-- End --}}
                
            </div>
            
            <div class="col-lg-6">
                
                {{-- Grafik kegiatan per-EO --}}
                <div class="card">

                    <div class="card-header border-0">

                        <div class="d-flex justify-content-between">

                            <h3 class="card-title">Grafik Project selesai</h3>

                            <p class="ml-auto d-flex flex-column text-right">

                            <span class="text-success">

                                <i class="fas fa-arrow-up"></i> 33.1%

                            </span>

                            <span class="text-muted">Since last Event</span>

                            </p>

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="position-relative mb-4">

                            <canvas id="kegiatanEO" height="200"></canvas>

                        </div>

                    </div>

                </div>
                {{-- End --}}

            </div>

        </div>
      <!-- End row -->

    </div>
    <!-- End container-fluid -->

</div>
<!-- End content -->


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>

    {{-- Script Chart Peserta Wilayah --}}
    <script>
        const ctx = document.getElementById('pesertaWilayah').getContext('2d');
        const pesertaWilayah = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jawa', 'Sumatra', 'Kalimantan', 'Sulawesi', 'Papua', 'Nusa Tenggara'],
                datasets: [{
                    label: 'Grafik Peserta Per-Wilayah',
                    data: [10, 10, 10, 10, 10, 10,],
                    backgroundColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- End --}}
    
    {{-- Script Chart Peserta Bulan --}}
    <script>
        const ctx2 = document.getElementById('pesertaBulan').getContext('2d');
        const pesertaBulan = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Febuari', 'Mai', 'April', 'Maret','Juni', 'Juli', 'Agustus', 'September', 'October', 'November',],
                datasets: [{
                    label: 'Grafik Jumlah Kegiatan Per-Bulan',
                    data: [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
                    backgroundColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',                        
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- End --}}
    
    {{-- Script Jumlah Kegiatan Wilayah --}}
    <script>
        const ctx3 = document.getElementById('kegiatanWilayah').getContext('2d');
        const kegiatanWilayah = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['Jawa', 'Sumatra', 'Kalimantan', 'Sulawesi', 'Papua', 'Nusa Tenggara'],
                datasets: [{
                    label: 'Grafik Jumlah Kegiatan Per-Wilayah',
                    data: [10, 10, 10, 10, 10, 10],
                    backgroundColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- End --}}
    
    {{-- Script Jumlah Peserta Bulan --}}
    <script>
        const ctx4 = document.getElementById('kegiatanBulan').getContext('2d');
        const kegiatanBulan = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Febuari', 'Mai', 'April', 'Maret','Juni', 'Juli', 'Agustus', 'September', 'October', 'November',],
                datasets: [{
                    label: 'Grafik Jumlah Kegiatan Per-Bulan',
                    data: [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
                    backgroundColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- End --}}

    {{-- Script Jumlah Peserta Wilayah EO --}}
    <script>
        const ctx5 = document.getElementById('pesertaEO').getContext('2d');
        const pesertaEO = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: ['Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO','Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO'],
                datasets: [{
                    label: 'Grafik Jumlah Peserta Per-EO',
                    data: [10, 10, 10, 10, 10, 10, 10, 10, 10],
                    backgroundColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- End --}}

    {{-- Script Jumlah Kegiatan EO --}}
    <script>
        const ctx6 = document.getElementById('kegiatanEO').getContext('2d');
        const kegiatanEO = new Chart(ctx6, {
            type: 'bar',
            data: {
                labels: ['Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO', 'Nama-EO'],
                datasets: [{
                    label: 'Grafik Jumlah Kegiatan Per-EO',
                    data: [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
                    backgroundColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderColor: [
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF',
                        '#007BFF'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- End --}}

@stop