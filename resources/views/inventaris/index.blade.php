@extends('layouts.main')
@section('title', 'Inventaris')
@section('navhead', 'Data')
@section('container')
<div class="row">
    <div class="col-lg-15">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a class="btn btn-primary" href="{{ route('inventaris.add') }}"> Tambah Data</a></h5>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Beli</th>
                            <th>Tahun Pengadaan</th>
                            <th>Sumber Dana</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inventaris as $key => $barang)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->jumlah_barang }}</td>
                            <td>{{ $barang->harga_beli }}</td>
                            <td>{{ $barang->tahun_pengadaan }}</td>
                            <td>{{ $barang->sumber_dana }}</td>
                            <td>
                                <div class="d-flex justify-content-start">
                                    <a href="{{ route('inventaris.edit', $barang->id) }}" class="btn btn-success mr-2">Edit</a>
                                    <form action="{{ route('inventaris.delete', $barang->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Barang inventaris tidak tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                            </div>
        </div>
    </div>
</div>
@endsection
