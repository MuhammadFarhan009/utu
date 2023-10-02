<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="card" style="margin: 20px">
        <div class="card-header">
            Tambah data barang
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('Simpan-gambar') }}" enctype="multipart/form-data">
                {!!  csrf_field() !!}
                {{-- <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" min="0" class="form-control" id="harga" name="harga" placeholder="Masukkan harga">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" min="0" class="form-control" id="stok" name="stok" placeholder="Masukkan stok">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Barang</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option value="daging">Daging</option>
                        <option value="grosir">Grosir</option>
                        <option value="buah">Buah</option>
                        <option value="sayur">Sayur</option>
                        <option value="frozen">Frozen</option>
                    </select>
                </div>
                <input class="form-control" type="file" name="photo" id="photo" style="margin-top: 20px; margin-bottom: 20px " >

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/data_barang') }}" class="btn btn-danger">Cancel</a> --}}
                <label for=""> nama_barang</label><br>
                <input type="text" name="nama" id="nama" class="form-control">
                <label for=""> harga_barang</label><br>
                <input type="file" name="gambar" id="gambar" class="form-control">
                {{-- <label for=""> stok_barang</label><br>
                <input type="text" name="stok_barang" id="name" class="form-control">
                <label for=""> jenis_barang</label><br>
                <input type="text" name="jenis_barang" id="name" class="form-control">


                <input class="form-control" type="file" name="photo" id="photo" style="margin-top: 20px; margin-bottom: 20px " > --}}

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>
</body>
</html>
