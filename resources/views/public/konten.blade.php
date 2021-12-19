
<!DOCTYPE html>
<html>

<head>
    <title>Wisata</title>        
    <link rel="stylesheet" href="{{asset('kontenAsset/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <a href="/" class="logo">Digital <span>Destination</span></a>
        <!-- NAVIGATION MENU -->
            <ul class="nav-links">
                    <!-- USING CHECKBOX HACK -->

                    <!-- NAVIGATION MENUS -->
                    <div class="menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/">Service</a></li>
                         @auth
                            <a href="/wisata" class="logout">dashboard</a>
                            <a href="/logout" class="logout">logout</a>
                         @else
                            <a href="/login" class="btn-member">Login</a>
                         @endauth                   
                        
                    </div>
            </ul>
    </nav>
    <div class="wrap">

        <div class="blog">
            <div class="conteudo">
                <div id="frame-image" >
                    <img src="{{ url('storage/'.$data->Foto) }}" >
                </div>
                <br>
                <div class="post-info">
                   Posted By : <b>{{$data->user->name}}</b>
                </div>
                <h1> {{$data->Nama_Wisata}} </h1>
                <i class="fas fa-map-marker-alt"> {{$data->Lokasi}} </i>
                <br>
                <br>

                <hr>
                <p align="justify">
                    {{$data->Deskripsi}}
                </p>

            </div>
        </div>

        <aside class="sidebar">
            <div class="widget">
                <h5> <b>Review</b> </h5>

                @foreach($komentar as $komen)

                <div class="container">
                    <img src="{{ asset('img/user.png') }}" alt="Avatar" style="width:25px">
                    <p><span>Anonim</span> {{ $komen->created_at }}</p>
                    <p>{{$komen->Hasil_Review}}</p>
                </div>                  
                <br>

                @endforeach

                <form action="{{ route('komentar.store') }}" method="POST" id="form1">
                    @csrf
                    <input type="hidden" name="Wisata_id" value= "{{$data->Id_Wisata}}">
                    <label for="w3review"><h5><b>Komentar</b> </h5></label>
                    <br>
                    <textarea id="w3review" name="Hasil_Review" rows="4" cols="35"></textarea>                    
                    <br>
                    <button type="submit" form="form1" class="btn btn-primary">kirim</button>
                </form>

                <br>
                <br>

                <a href="#">Tampilkan Lebih Banyak</a>
            </div>
        </aside>
    </div>
</body>

</html>