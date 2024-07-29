<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('title', 'Home')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <!-- Home -->
    <div class="row">
        <div class="order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2"> Halaman Home</h5>
                    <div class="dropdown">
                        <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2">
                        <p>Selamat datang!</p>
                        <p>Ini Adalah Halaman Home - Belajar Sistem Blade Template Laravel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Home -->

@endsection