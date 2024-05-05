@extends('layout.app')

@section('content')
    <div class="list-barang container">
        <h3>List Barang</h3>
        <div class="action-top pt-3 pb-2">
            <a class="btn btn-sm btn-primary rounded-3 px-3" href="{{ route('barangs.create') }}">+Tambah Data</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->kode_barang }}</td>
                        <td>{{ $d->nama_barang }}</td>
                        <td>Rp. {{ number_format($d->harga_barang, 0, ',', '.') }}</td>
                        <td>{{ $d->satuan->kode_satuan }}</td>
                        <td>{{ $d->deskripsi_barang }}</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('barangs.show', $d->id)}}">Detail</a>
                            <a class="btn btn-sm btn-outline-warning" href="{{ route('barangs.edit', $d->id)}}">Edit</a>
                            <form action="{{ route('barangs.destroy', $d->id )}}" method="POST" type="button" class="btn btn btn-outline-danger p-0" onsubmit="return confirm('Yakin Hapus Data ?')" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger m-0 border-0">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
