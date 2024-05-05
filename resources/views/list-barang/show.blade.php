@extends('layout.app')

@section('content')
    <div class="form-tambah container">
        <h3>Detail Barang</h3>

        <form class="row g-3 pt-3">
            <div class="col-md-6">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input value="{{ $barang->kode_barang }}" type="text" class="form-control" readonly>
            </div>

            <div class="col-md-6">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input value="{{ $barang->nama_barang }}" type="text" class="form-control" readonly>
            </div>

            <div class="col-md-6">
                <label for="harga_barang" class="form-label">Harga</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">Rp</span>
                    <input value="{{ number_format($barang->harga_barang, 0, ',', '.') }}" type="number" class="form-control" readonly>
                </div>
            </div>

            <div class="col-md-6">
                <label for="kode_barang" class="form-label">Nama Satuan</label>
                <input value="{{ $barang->satuan->kode_satuan . ' - ' . $barang->satuan->nama_satuan }}" class="form-control" readonly>
            </div>

            <div class="col-md-12">
                <label for="deskripsi_barang" class="form-label">Deskripsi</label>
                <input value="{{ $barang->deskripsi_barang }}" class="form-control" readonly>
            </div>
        </form>
        <div class="col-1 mt-4">
            <a href="{{ route('barangs.index') }}" class="btn btn-sm rounded-3 px-3 btn-outline-dark">
                <i class="bi-arrow-left-circleme-2"></i> Cancel</a>
        </div>
    @endsection
