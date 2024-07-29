<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('title', 'Contact')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <!-- Contact -->
    <div class="row">
        <div class="order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2"> Halaman Kontak</h5>
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
                        <p>Ini Adalah Halaman Kontak</p>
        
                        <table class="table table-striped">
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>info@ayongoding.com</td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td>:</td>
                                <td>facebook/ayongoding</td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td>:</td>
                                <td>twitter/ayongoding</td>
                            </tr>
                            <tr>
                                <td>Hp</td>
                                <td>:</td>
                                <td>0853-6411-6655</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Contact -->

@endsection