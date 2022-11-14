@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Beranda') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <!-- total responden -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Responden</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {!!$jumlah!!}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- total instansi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Instansi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {!!$jumlah2!!}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- tabel responden -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel responden </h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Instansi</th>
                                            <th>Jumlah Responden</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Instansi</th>
                                            <th>Jumkah Responden</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>

            <!-- Color System -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Informasi -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <!-- <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('img/svg/undraw_editable_dywm.svg') }}" alt=""> -->
                    </div>
                    <p> Tujuan dari survey Kepuasan Penyelenggaraan Sistem Komunikasi Intra Pemerintah Daerah Kabupaten Tabanan adalah Mengetahui tingkat kepuasan OPD terhadap Internet terpasang, Mengetahui tingkat kepuasan OPD terhadap pelayanan kominfo dalam penanganan permasalaah internet di Pemkab Tabanan, Mengetahui besarnya Bandwith yang dibutuhkan di masing-masing OPD untuk menjalankan tugas -tugas Pemerintahan sesuai tupoksinya secara optimal 
</p>
                    <!-- <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw →</a> -->
                </div>
            </div>

            <!-- indikator -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Indikator</h6>
                </div>
                <div class="card-body">
                    <p>A. Presentase OPD yang puas terhadap kecepatan akses internet di Pemkab tabanan</p> <tr>
                    <p class="mb-0">A1. Koneksi Internet yang tersedia sudah cukup dan sesuai kebutuhan</p> <tr>
                    <p class="mb-0">A2. Kecepatan Internet yang Stabil</p> <tr>
                    <p class="mb-0">A3. Koneksi Internet yang tidak terputus</p> <tr>
                    <p class="mb-0">A4. Kemudahan dalam masuk ke jaringan</p> <tr>
                    <tr>
                    <p class="mb-0"></p>
                    <tr>
                    <p>B. Presentase OPD yang puas terhadap pelayanan diskominfo dalam penanganan masalah internet</p> <tr>
                    <p class="mb-0">B1. Kemudahan dalam melakukan komplain ketika terjadi masalah akses internet</p> <tr>
                    <p class="mb-0">B2. Kecepatan diskominfo dalam merespon komplain</p> <tr>
                    <p class="mb-0">B3. Kecepatan diskominfo dalam penanganan dan penyelesaian komplain</p> <tr>
                </div>
            </div>

        </div>
    </div>
@endsection
