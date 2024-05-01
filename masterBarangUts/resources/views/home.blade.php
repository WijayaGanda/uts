@extends('layouts.app')
@section('content')
    <div class="container">

    </div>
    <h1 class="text-center mt-3">
        Selamat Datang !!!
    </h1>
    <h2 class="text-center">
        Biodata Mahasiswa
    </h2>
    <div class="card mb-2 mx-auto mt-5" style="max-width: 800px; background-color:#F7EEDD">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="wijaya.jpeg" class="img-fluid rounded-start" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body text-center" style="background-color:#F7EEDD">
                    <div class="card-footer" style="background-color: #1E0342; color:white">
                        Biodata Diri
                    </div>
                    <table class="table table-primary table-striped-columns table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">Nama Lengkap</th>
                                <td>Wijaya Ganda Prasetyo</td>
                            </tr>
                        </tbody>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">NIM</th>
                                <td>1204220048</td>
                            </tr>
                        </tbody>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">Kelas</th>
                                <td>IS-05-02</td>
                            </tr>
                        </tbody>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">NIM</th>
                                <td>1204220048</td>
                            </tr>
                        </tbody>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">Tempat, Tanggal Lahir</th>
                                <td>Pasuruan, 23 April 2004</td>
                            </tr>
                        </tbody>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>Jl Siwalankerto Timur no 276</td>
                            </tr>
                        </tbody>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">No Hp</th>
                                <td>081818455048</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn" style="background-color: #1E0342;color: white" type="button">List Barang</button>
    </div>
@endsection
