<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="{{asset('css/form.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="wrapper">
    <div class="title">
      {{$title}}
    </div>

    <form class="form" action="{{(isset($data))?route('wisata.update', $data->Id_Wisata):route('wisata.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
                @if(isset($data))
                  @method('PUT')
                @endif

      <div class="inputfield" data-error="ini error">
          <label>Nama Wisata</label>
          <input type="text" class="input" name = "Nama_Wisata" value="{{(isset($data))?$data->Nama_Wisata:old('Nama_Wisata')}}" >
      </div>  

      <div class="inputfield">
          <label>Kategori</label>
          <div class="custom_select" >
            <select name ="Kategori" value="{{(isset($data))?$data->Kategori:old('Kategori')}}">
              <option value="">Select</option>
              <option value="Desa Wisata">Desa Wisata</option>
              <option value="Pantai">pantai</option>
              <option value="Punung">gunung</option>
              <option value="Alam">alam</option>
              <option value="Hotel">hotel</option>
              <option value="Makanan">makanan</option>
              <option value="Sejarah">Sejarah</option>

            </select>
          </div>
      </div> 

       <div class="inputfield">
          <label>Lokasi</label>
          <div class="custom_select">
            <select name = "Lokasi" value="{{(isset($data))?$data->Lokasi:old('Lokasi')}}">
              <option value="">Select</option>
              <option value="Badung">Badung</option>
              <option value="Denpasar">Denpasar</option>
              <option value="Gianyar">Gianyar</option>
              <option value="Klungkung">Klungkung</option>
              <option value="Karangasem">Karangasem</option>
              <option value="Bangli">Bangli</option>
              <option value="Tabanan">Tabana</option>
              <option value="Jembrana">Jembrana</option>
              <option value="Buleleng">Buleleng</option>
          
            </select>
          </div>
       </div>  
      
       <div class="inputfield">
          <label>Deskripsi</label>
          <textarea class="textarea" name = "Deskripsi" >{{(isset($data))?$data->Lokasi:old('Lokasi')}}</textarea>
       </div> 


       <div class="inputfield">
          <label>kontak</label>
          <input type="text" class="input" name = "Kontak" value="{{(isset($data))?$data->Kontak:old('Kontak')}}">
       </div>

       <div class="inputfield">
          <label>Foto Wisata</label>
          <input type="file" class="input" name = "Foto" value="{{(isset($data))?$data->Foto:old('Foto')}}">
       </div>

      <div class="inputfield">
        <input type="submit" value="Simpan" class="btn">
      </div>

    </form>
    
</div>	
	
</body>
</html>