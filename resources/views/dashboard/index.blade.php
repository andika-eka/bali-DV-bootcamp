@extends('dashboard.template.layout')

@section('content')

<h1 class="mt-4">daftar wisata (harus per user)</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">web</a></li>
    <li class="breadcrumb-item active">dashboard</li>
</ol>

<div class="card-body">
    @if(count($data)>0)
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>-</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>-</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->Id_Wisata}}</td>
                    <td>{{$data->Nama_Wisata}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>data tidak ditemukan</p>
        @endif
    </div>
</div>
@endsection
