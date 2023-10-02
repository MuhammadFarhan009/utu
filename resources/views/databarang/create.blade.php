@extends('databarang.layout')
@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">
        Tambah data barang
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('data_barang.store') }}" enctype="multipart/form-data">
            {!!  csrf_field() !!}
             <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" min="0" class="form-control" id="harga_barang" name="harga_barang" placeholder="Masukkan harga">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" min="0" class="form-control" id="stok_barang" name="stok_barang" placeholder="Masukkan stok">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori Barang</label>
                <select class="form-control" id="jenis_barang" name="jenis_barang">
                    <option value="daging">Daging</option>
                    <option value="grosir">Grosir</option>
                    <option value="buah">Buah</option>
                    <option value="sayur">Sayur</option>
                    <option value="frozen">Frozen</option>
                </select>
            </div>

            <input class="form-control" type="file" name="gambar_barang" id="gambar_barang" style="margin-top: 20px; margin-bottom: 20px " >

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('/data_barang') }}" class="btn btn-danger">Cancel</a>
        </form>
</div>
@stop
