@extends('auth.layouts')

@section('title')
    Login
@endsection

@section('content')

<nav class="navbar navbar-light navbar-expand-lg mb-5"></nav>
    <main class="login-form" >
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card rounded">
                        <div class="card-header bg-primary" style="background-color: #0996ce"></div>
                        <h5 class="mt-3 text-center">Masuk Ke Akun Anda</h5>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom')}}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Username" id="email" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 d-flex flex-row-reverse">
                                    <a href="#" class="fst-italic"> <u>lupa password? </u></a>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto mb-5">                
                                    <button type="submit" class="btn btn-primary btn-block ">LOGIN</button>                                  
                                </div>
                            </form>

                            @if(session()->has('message'))
                                <div class="alert alert-success mt-2">
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col mt-1">
                        <div class="text-center"> Belum Daftar? <a href="{{ route('register.view') }}"> Daftar Sekarang </a></div>                                                     
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection