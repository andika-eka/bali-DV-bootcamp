@extends('auth.layouts')

@section('title')
    Register
@endsection

@section('content')
<nav class="navbar navbar-light navbar-expand-lg mb-5"></nav>
    <main class="login-form" >
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-header bg-primary" style="background-color: #0996ce"></div>
                        <h5 class="mt-3 text-center">Buat Akun</h5>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Nama" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>    
                            
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Konfirmasi Password" id="confirmPass" class="form-control"
                                    name="confirmPass" required>                             
                            </div> 

                            <div class="d-grid gap-2 col-6 mx-auto mb-3">                
                                    <button type="submit" class="btn btn-primary btn-block ">Registrasi</button>                                  
                            </div>
                        </form>

                            @if(session()->has('message'))
                                <div class="alert alert-success mt-2">
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </main>
@endsection