@extends('layout.app')

@section('content')
    <div class="form-tambah container">
        <h3>Edit Barang</h3>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('barangs.update', $barang->id) }}" method="POST" class="row g-3 pt-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="{{ $barang->kode_barang }}" readonly>
            </div>

            <div class="col-md-6">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}"
                    required>
            </div>

            <div class="col-md-6">
                <label for="harga_barang" class="form-label">Harga</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">Rp</span>
                    <input type="number" class="form-control" name="harga_barang" id="harga_barang"
                        aria-describedby="inputGroupPrepend" value="{{ $barang->harga_barang }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <label for="satuan" class="form-label">Satuan</label>
                <select class="form-select" name="satuan" id="satuan" required>
                    @php
                        $selected = '';
                        if ($errors->any()) {
                            $selected = old('satuan');
                        } else {
                            $selected = $barang->satuan_barang_id;
                        }
                    @endphp
                    @foreach ($_satuan as $s)
                        <option value="{{ $s->id }}" {{ $selected == $s->id ? 'selected' : '' }}>
                            {{ $s->kode_satuan . ' - ' . $s->nama_satuan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12">
                <label for="deskripsi_barang" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi_barang" id="deskripsi_barang" rows="3" required>
                    {{ $barang->deskripsi_barang }}
                </textarea>
            </div>

            {{-- <div class="col-12">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div> --}}

            <div class="row mt-3">
                <div class="col-1">
                    <a href="{{ route('barangs.index') }}" class="btn btn-sm rounded-3 px-3 btn-outline-dark">
                        <i class="bi-arrow-left-circleme-2"></i> Cancel</a>
                </div>
                <div class="col-1">
                    <button class="btn btn-sm rounded-3 px-3 btn-primary" type="submit">Simpan</button>
                </div>
            </div>

        </form>
    </div>
@endsection
