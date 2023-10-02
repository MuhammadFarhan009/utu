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
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px">

                <div class="card">
                        <div class="card-header">
                                Database barang
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Gambar</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($dataGambar as $item)
                                <tr>
                                    <td>{{$loop ->iteration}}</td>
                                    <td>{{$item ->nama}}</td>
                                    <td><a href="{{ asset('/img/'.$item->gambar) }}" target="_blank" rel="noopeener nonreferrer">p </a></td>
                                </tr>
                                @endforeach
                            </table>


                            <a href="{{ route('Create-gambar')}}" class="btn btn-success btn-sm">
                            Add New</a>
                        </div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>
