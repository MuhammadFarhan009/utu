@extends('databarang.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12" style="padding:20px">

            <div class="card">
                    <div class="card-header">
                            Database barang
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Nama barang</th>
                                    <th>harga barang</th>
                                    <th>stik barang</th>
                                    <th>jenis barang</th>
                                    <th>gambar barang</th>
                                </thead>
                            </thead>
                            <tbody>
                                @foreach ($databarang as $item )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->harga_barang }}</td>
                                    <td>{{ $item->stok_barang }}</td>
                                    <td>{{ $item->jenis_barang }}</td>
                                    <td>
                                        <img src="{{ asset($item->gambar_barang) }}" width="50" height="50" alt="">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <a href="{{ url('/data_barang/create') }}" class="btn btn-success btn-sm">
                            Add New</a>
                    </div>


            </div>
        </div>

    </div>

</div>
@endsection


