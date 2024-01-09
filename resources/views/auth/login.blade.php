@extends('layouts.app')
@section('content')
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-outline mb-4">
                                    <label for="">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                   
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-check d-flex justify-content-center mb-4">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Sign In
                                    </button>
                                </div>
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <a href="{{route('register')}}"> <b>Don't have an Account ? Sign Up</b> </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Welcome Back <br />
                        <span style="color: hsl(218, 81%, 75%)">Unlock Your Potential</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Welcome back! Sign in to explore personalized career guidance and advice.
                    </p>
                </div>
            </div>
        </div>
    </section>
   @endsection
