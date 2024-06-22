@extends('layouts.main')
@section('title', 'Edit Data')
@section('navhead','Data')
@section('container')
<div class="row">
  <div class="col-lg-15">
    <div class="card">
      <div class="card-body">
        <div class="card"></div>
        <form method="POST" action="{{ route('inventaris.update', $inventaris->id) }}">
          @csrf
          @method('PUT')
            <div class="row mb-3">
              <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $inventaris->kode_barang }}">
              </div>
              <div class="col-sm-5">
                <input type="number" class="form-control" id="awalKode" name="awalKode" placeholder="Angka Awal Kode" value="{{ $inventaris->awalKode }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $inventaris->nama_barang }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $inventaris->jumlah_barang }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="tahun" class="col-sm-2 col-form-label">Tahun Pengadaan</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="tahun" name="tahun" value="{{ $inventaris->tahun_pengadaan }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="harga" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $inventaris->harga_beli }}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="sumberDana" class="col-sm-2 col-form-label">Sumber Dana</label>
              <div class="col-sm-10">
                <select class="form-control" id="sumberDana" name="sumberDana">
                  <option value="BOS" {{ $inventaris->sumber_dana == 'BOS' ? 'selected' : '' }}>BOS</option>
                  <option value="APBD" {{ $inventaris->sumber_dana == 'APBD' ? 'selected' : '' }}>APBD</option>
                  <option value="APBN" {{ $inventaris->sumber_dana == 'APBN' ? 'selected' : '' }}>APBN</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-secondary">Ulang</button>
              <a href="{{ route('inventaris.index') }}" class="btn btn-danger">Batal</a>
            </div>
           </form><!-- End Horizontal Form -->
        </div>
      </div>
    </div>
</div>
@endsection
