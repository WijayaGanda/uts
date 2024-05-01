@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    <div class="mb-3 text-center">
                        <i class="bi bi-boxes fs-2"></i>
                        <h4>Tambah Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBarang') is-invalid @enderror" type="text"
                                name="namaBarang" id="namaBarang" value="{{ old('namaBarang') }}"
                                placeholder="Masukkan Nama Barang">
                            @error('namaBarang')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('hargaBarang') is-invalid @enderror" type="text"
                                name="hargaBarang" id="hargaBarang" value="{{ old('hargaBarang') }}"
                                placeholder="Masukkan Harga Barang">
                            @error('hargaBarang')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi Barang">
                            @error('deskripsi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->code.' -> '.$satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Kembali</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
