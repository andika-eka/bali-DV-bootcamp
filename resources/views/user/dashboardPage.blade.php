
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
                        <a class="logout" href="/logout">logout</a>
                    </div>
                    
                   
                    
            </ul>
    </nav>

    <div class="container">
        <div class="container-fluid mt-3">
            {{-- <h2>Daftar Postingan</h2> --}}
            
            <a href="{{route('wisata.create')}}"><button type="button" class="btn btn-primary float-right" >
                Tambah
              </button> </a>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table user-list">
                                <thead>
                                    <tr>
                                        <th><span><h4>Foto</h4></span></th>
                                        <th><span><h4>Nama Wisata</h4> </span></th>
                                        <th><span><h4>Kabupaten</h4> </span></th>
                                        <th><span><h4>aksi</h4> </span></th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr >
                                        @foreach($data as $datas)
                                        <td style="background-color: #fff">
                                        
                                        <img src="{{ url('storage/'.$datas->Foto) }}" width = 100px alt="" />
                                        
                                        </td>

                                        <td style="background-color: #fff">
                                            <h4>{{$datas->Nama_Wisata}}</h4>
                                        </td>


                                        <td class="text-left" style="background-color: #fff">
                                            <h4>{{$datas->Lokasi}}</h4>
                                        </td>

                                    <td style="width: 20%;  display:flex; margin: 50px 25px; background-color: #fff">
                                    
                                            <a href="{{route('wisata.show', $datas->Id_Wisata)}}" class="table-link">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									            </span>
                                            </a>

                                            <a href="{{route('wisata.edit', $datas->Id_Wisata)}}" >
                                                <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            

                                            <form action="{{route('wisata.destroy', $datas->Id_Wisata)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style = "background: none;
                                                        color: inherit;
                                                        border: none;
                                                        padding: 0;
                                                        font: inherit;
                                                        cursor: pointer;
                                                        outline: inherit;"><a href="#" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                </button>
                                            </form>
                                                     

                                            
                                    </td>

                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                        
</body>

</html>