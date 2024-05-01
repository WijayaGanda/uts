@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{route('barangs.create')}}"><button class="btn btn-primary" type="button">
                            <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                            <span role="status">Tambah Barang</span>
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table mt-4 table-bordered table-hover table-striped mb-0 bg-white">
            <thead style="background-color:#1E0342; color:white ">
                <tr>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Satuan Barang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->harga_barang}}</td>
                    <td>{{$barang->deskripsi_barang}}</td>
                    <td>{{$barang->satuan->nama_satuan}}</td>
                    <td>@include('barang.action')</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
