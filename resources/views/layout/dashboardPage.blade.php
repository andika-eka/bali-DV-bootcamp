
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Daftar postingan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="container-fluid mt-3">
            <h1>Daftar Postingan <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambah">
                Tambah
              </button> </h1>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="staticBackdropLabel">Buat Postingan</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                    </div>
                    <div class="modal-body">
                        
                     <form action="{{route('wisata.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="namabarang">Nama Wisata</label>
                                <input name="Nama_Wisata" type="name" class="form-control" id="nama_barang" aria-describedby="namelHelp" placeholder="Masukkan Nama Tempat Wisata">
                                <small id="namaHelp" class="form-text text-muted">Nama Tempat Wisata Maksimal 50 Karakter</small>
                            </div>

                            <div class="form-group">
                                <label for="hargabarang">Kategori</label>
                                <input name="Kategori" type="name" class="form-control" id="harga_barang" placeholder="Masukkan Nama Kabupaten">
                            </div>

                            <div class="form-group">
                                <label for="hargabarang">Lokasi Kabupaten</label>
                                <input name="Lokasi" type="name" class="form-control" id="harga_barang" placeholder="Masukkan Nama Kabupaten">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi barang">Deskripsi Wisata</label>
                                <textarea name="Deskripsi" type="description" class="form-control" id="deskripsi_barang" rows="3"></textarea>

                            </div>

                            <div class="form-group">
                                <label for="hargabarang">Kontak</label>
                                <input name="Kontak" type="name" class="form-control" id="harga_barang" placeholder="Masukkan Nama Kabupaten">
                            </div>


                            <div class="form-group">
                                <label for="hargabarang">Foto</label>
                                <input name="Foto" type="file" class="form-control" id="harga_barang" placeholder="Masukkan Nama Kabupaten">
                            </div>

                        
                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>
                                    <tr>
                                        <th><span><h3>Foto</h3></span></th>
                                        <th><span><h3>Nama Wisata</h3> </span></th>
                                        <th><span><h3>Kabupaten</h3> </span></th>
                                        <th><span><h3>aksi</h3> </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($data as $datas)
                                        <td>
                                        
                                        <img src="{{ url('storage/'.$datas->Foto) }}" width = 100px alt="" />
                                        
                                        </td>

                                        <td>
                                            <h4>{{$datas->Nama_Wisata}}</h4>
                                        </td>


                                        <td class="text-left">
                                            <h4>{{$datas->Lokasi}}</h4>
                                        </td>

                                        <td style="width: 20%;">
                                            <a href="#" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									            </span>
                                            </a>
                                            <a href="#" class="table-link" data-toggle="modal" data-target="#modalEdit">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									            </span>
                                            </a>
                                            <a href="#" class="table-link danger">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									            </span>
                                            </a>
                                        </td>

                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="staticBackdropLabel">Edit Postingan</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <label for="namabarang">Nama Wisata</label>
                                                <input name="nama_barang" type="name" class="form-control" id="nama_barang" aria-describedby="namelHelp" placeholder="Masukkan Nama Tempat Wisata">
                                                <small id="namaHelp" class="form-text text-muted">Nama Tempat Wisata Maksimal 50 Karakter</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="hargabarang">Lokasi Kabupaten</label>
                                                <input name="harga_barang" type="name" class="form-control" id="harga_barang" placeholder="Masukkan Nama Kabupaten">

                                            </div>

                                            <div class="form-group">
                                                <label for="deskripsi barang">Deskripsi Wisata</label>
                                                <textarea name="deskripsi_barang" type="description" class="form-control" id="deskripsi_barang" rows="3"></textarea>

                                            </div>

                                            <div class="form-group">
                                                <label for="fotobarang">Lokasi Tempat Wisata</label>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalLokasi">Pilih</button>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <ul class="pagination pull-right">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>