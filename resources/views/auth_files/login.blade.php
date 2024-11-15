@extends('layout.head')
    @section('content')
        <section id="login" class="d-flex align-items-center justify-content-center vh-100 w-100">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="vector-bg">
                        <figure>
                            <img src="{{asset('images/contact.png')}}" alt="Cactus Vector Image" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                    <form action="{{route('login-user')}}" method="POST">
                        @csrf
                        <h2 class="mb-4">Let's get started.</h2>
                        <label for="email" class="form-label mt-2">Email Address</label>
                        <input type="email" name="email" class="form-control line-input mb-2">
                        @error('email')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control line-input mb-3">
                        @error('password')
                            <p class="text-small text-danger">{{$message}}</p>
                        @enderror
                        <div class="d-flex justify-content-between">
                            <p>Don't have an account yet?</p>
                            <a href="{{route('register')}}" class="text-dark">Signup instead</a>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center align-items-center mt-1">
                            <button type="submit" class="btn btn-dark login-button w-100">
                                <i class="fas fa-sign-in-alt me-2"></i>
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection