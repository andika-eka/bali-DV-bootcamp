
<!DOCTYPE html>
<html>

<head>
    <title>Wisata</title>
    <link rel="stylesheet" href="{{asset('kontenAsset/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrap">

        <div class="blog">
            <div class="conteudo">
                <div id="frame-image">
                    <img src="{{ url('storage/'.$data->Foto) }}">
                </div>
                <br>
                <div class="post-info">
                    Posted By : <b>{{$data->user->name}}</b>
                </div>
                <h1> {{$data->Nama_Wisata}} </h1>
                <i class="fas fa-map-marker-alt"> {{$data->Lokasi}}</i>
                <br>
                <br>

                <hr>
                <p align="justify"> {{$data->Deskripsi}}
                </p>

            </div>
        </div>

        <aside class="sidebar">
            <div class="widget">
                <h4>Ulasan</h4>

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <br>
                <br>
                <h4>Review</h4>
                
                @foreach($komentar as $komen)
                
                <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <!--img---->
                            <div class="profile-img">
                                <img src="image/rai.png" />
                            </div>
                            <!--name-and-username-->
                            <div class="name-user">
                                <strong>Anonim</strong>
                                <div class="client-comment">
                                    <p>{{$komen->Hasil_Review}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
                    
               
                <form action="{{route('komentar.store')}}" method="POST" id="form1">
                    @csrf
                    <input type="hidden" name="Wisata_id" value= "{{$data->Id_Wisata}}">
                    <label for="w3review"><h4>Komentar</h4></label>
                    <br>
                    <textarea id="w3review" name="Hasil_Review" rows="4" cols="25"></textarea>
                <br>
                    <button type="submit" form="form1" class="btn btn-primary">kirim</button>
                <br>
                </form>

                <br>
                <a href="#">Tampilkan Lebih Banyak</a> 
            </div>
        </aside>
        <aside class="sidebar">
            <div class="widget">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.6036300578276!2d115.21713351407138!3d-8.633995990161624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f6c18292c09%3A0x568273c572f525c2!2sJl.%20Gatot%20Subroto%20I%2FVII%20No.5%2C%20Tonja%2C%20Kec.%20Denpasar%20Utara%2C%20Kota%20Denpasar%2C%20Bali%2080234!5e0!3m2!1sen!2sid!4v1637851139786!5m2!1sen!2sid"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </div>
        </aside>
    </div>
</body>

</html>