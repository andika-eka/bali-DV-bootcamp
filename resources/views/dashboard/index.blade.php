@extends('dashboard.template.layout')

@section('content')

<div class="container-fluid">
    <h1 class="mt-4">daftar wisata (harus per user)</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">web</a></li>
        <li class="breadcrumb-item active">dashboard</li>
    </ol>

    @if(count($data)>0)
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Destinasi Wisata
            </div>
            <div class="card-body">
                        @foreach($data as $data)
                        <div class = "shadow p-3 mb-5 bg-body rounded">
                            <div class="card">
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{$data->Nama_Wisata}}</h5>
                                    <p class="card-text">{{$data->Deskripsi}}</p>
                                    <a href="#" class="btn btn-primary">details</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        @endforeach
                @else
                <p>data tidak ditemukan</p>
                @endif
            </div>
        </div>
    
</div>

`@endsection
