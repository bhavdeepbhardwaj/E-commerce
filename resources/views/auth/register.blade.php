@extends('backend.layouts.app')

{{-- @extends('layouts.app') --}}

@section('content')

<div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="ec-brand">
              <a href="index.html" title="Ekka">
                <img class="ec-brand-icon" src="backend/assets/img/logo/logo-login.png" alt="Logo-Register" />
              </a>
            </div>
          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Sign Up</h4>

            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  {{-- <input type="text" class="form-control" id="name" placeholder="Name"> --}}
                  <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="full_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                </div>

                <div class="form-group col-md-12 mb-4">
                  {{-- <input type="email" class="form-control" id="email" placeholder="Username"> --}}
                  <input id="email" type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                </div>

                <div class="form-group col-md-12 ">
                  {{-- <input type="password" class="form-control" id="password" placeholder="Password"> --}}
                  <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
                </div>

                <div class="form-group col-md-12 ">
                  {{-- <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password"> --}}
                  <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>

                <div class="col-md-12">
                  <div class="d-inline-block mr-3">
                    {{-- <div class="control control-checkbox">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                      I Agree the terms and conditions
                    </div> --}}
                  </div>

                  <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

                  <p class="sign-upp">Already have an account?
                    <a class="text-blue" href="{{ route('login') }}">Sign in</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
