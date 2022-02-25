@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h5>Welcome to this beautiful admin Panel.</h5>
    <div class="row">

        <div class="col-sm-3">
    
            <div class="card">
    
                <div class="card-body rounded bg-primary">
    
                    <h5 class="card-title">Jumlah Project Masuk</h5>
    
                    <p class="card-text fa-2x">100</p>
                    
                    <i class="bi bi-calendar"></i>
                </div>
    
            </div>
    
        </div>
    
        <div class="col-sm-3">
    
            <div class="card">
    
                <div class="card-body rounded bg-warning">
    
                    <h5 class="card-title">Jumlah Project Berjalan</h5>
    
                    <p class="card-text fa-2x">100</p>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="col-sm-3">
    
            <div class="card">
    
                <div class="card-body rounded bg-info">
    
                    <h5 class="card-title">Jumlah Project Pending</h5>
    
                    <p class="card-text fa-2x">100</p>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="col-sm-3">
    
            <div class="card">
    
                <div class="card-body rounded bg-success">
    
                    <h5 class="card-title">Jumlah project Selesai</h5>
    
                    <p class="card-text fa-2x">100</p>
    
                </div>
    
            </div>
    
        </div>
    
        </div>

    {{-- <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Jumlah Project Masuk</p>
                <div class="d-flex flex-warp justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">100</h3>
                    <i class="bi bi-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>
                <p class="mb-0 mt-2 text warning">
                    <span class="text-black ml-1">
                        <small>(30 days)</small>
                    </span>
                </p>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Diagram Project Runing</h4>
                            </div>
                            <div class="ms-auto d-flex no-block align-items-center">
                                <ul class="list-inline dl d-flex align-items-center m-r-10 m-b-0">
                                    {{-- <li class="list-inline-item d-flex align-items-center text-info"><i class="fa fa-circle font-10 me-1"></i> Ample
                                    </li>
                                    <li class="list-inline-item d-flex align-items-center text-primary"><i class="fa fa-circle font-10 me-1"></i> Pixel
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="amp-pxl mt-4" style="height: 378px;">
                            <div class="chartist-tooltip"></div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Project Running</h4>
                <div class="mt-5 pb-3 d-flex align-items-center">
                    <span class="btn btn-primary btn-circle d-flex align-items-center">
                        <i class="fas fa-sort-amount-up fs-4" ></i>
                    </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">Admin Sales</h5>
                        <span class="text-muted fs-6">Project Proses</span>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-light text-muted">+25%</span>
                    </div>
                </div>
                <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-warning btn-circle d-flex align-items-center">
                        <i class="fas fa-sort-amount-up fs-4 text-white" ></i>
                    </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">Material Admin</h5>
                        <span class="text-muted fs-6">Project Proses</span>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-light text-muted">+25%</span>
                    </div>
                </div>
                <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-success btn-circle d-flex align-items-center">
                        <i class="fas fa-sort-amount-up text-white fs-4" ></i>
                    </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">Company Profile Shoes Shop</h5>
                        <span class="text-muted fs-6">Project Proses</span>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-light text-muted">+68%</span>
                    </div>
                </div>
                <div class="py-3 d-flex align-items-center">
                    <span class="btn btn-info btn-circle d-flex align-items-center">
                        <i class="fas fa-sort-amount-up text-white" ></i>
                    </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">E-commers PT.Kogen</h5>
                        <span class="text-muted fs-6">Project Proses</span>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-light text-muted">+15%</span>
                    </div>
                </div>

                <div class="pt-3 d-flex align-items-center">
                    <span class="btn btn-danger btn-circle d-flex align-items-center">
                        <i class="fas fa-sort-amount-up fs-4 text-white" ></i>
                    </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bold">Designer Web</h5>
                        <span class="text-muted fs-6">Project Proses</span>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-light text-muted">+90%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                        <div>
                            <h4 class="card-title">Traffict Project</h4>
                            <p class="card-subtitle"></p>
                        </div>
                        <div class="ms-auto">
                            <div class="dl">
                                <select class="form-select shadow-none">
                                    <option value="0" selected>Monthly</option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-6 table-hover align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Project</th>
                                    <th class="border-top-0">project masuk</th>
                                    <th class="border-top-0">Porject jalan</th>
                                    <th class="border-top-0">Project pending</th>
                                    <th class="border-top-0">Project selesai</th>
                                    {{-- <th class="border-top-0">Sales</th>
                                    <th class="border-top-0">Earnings</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-info text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h5 class="m-b-6 font-16">Elite Admin</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>John Doe</td>
                                    <td>
                                        <label class="badge bg-danger">Angular</label>
                                    </td>
                                    <td>46</td>
                                    {{-- <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td> --}}
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-primary text-white">MA</a>
                                            </div>
                                            <div class="">
                                                <h5 class="m-b-6 font-16">Monster Admin</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>Venessa Fern</td>
                                    <td>
                                        <label class="badge bg-info">Vue Js</label>
                                    </td>
                                    <td>46</td>
                                    {{-- <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td> --}}
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-success text-white">MP</a>
                                            </div>
                                            <div class="">
                                                <h5 class="m-b-0 font-16">Material Pro Admin</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>John Doe</td>
                                    <td>
                                        <label class="badge bg-success">Bootstrap</label>
                                    </td>
                                    <td>46</td>
                                    {{-- <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td> --}}
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-warning text-white">AA</a>
                                            </div>
                                            <div class="">
                                                <h5 class="m-b-0 font-10">Ample Admin</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Single Use</td>
                                    <td>John Doe</td>
                                    <td>
                                        <label class="badge bg-purple">React</label>
                                    </td>
                                    <td>46</td>
                                    {{-- <td>356</td>
                                    <td>
                                        <h5 class="m-b-0">$2850.06</h5>
                                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Project sesuai bidang </h4>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keahlian</th>
                            <th scope="col">Nama Project</th>
                            <th scope="col">Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Front end</td>
                            <td>Web Profile Company</td>
                            <td>1 Month</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Front End</td>
                            <td>Admin</td>
                            <td>1 month 15 days</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Designer</td>
                            <td>Membuat Mockup Web Profile C</td>
                            <td>5 days</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Catrine</td>
                            <td>Analis</td>
                            <td>Membuat Flowcart</td>
                            <td>2 days</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">jadwal Meeting</h4>
            </div>
            <div class="ms-auto">
                <div class="dl">
                    <select class="form-select shadow-none">
                        <option value="0" selected>Monthly</option>
                        <option value="1">Daily</option>
                        <option value="2">Weekly</option>
                        <option value="3">Yearly</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Project</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Agenda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Web Profile Company Pt.Code.id</td>
                            <td>1 january 2021</td>
                            <td>PT.Spero.id,Sawangan,Depok</td>
                            <td>Membahas Progres Projetc</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Admin magement PT.Toa</td>
                            <td>1 February 2021</td>
                            <td>PT.Spero.id,Sawangan,Depok</td>
                            <td>Membahas Progres Projetc</td>
                        </tr>
                        {{-- <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td></td>
                            <td>@twitter</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
