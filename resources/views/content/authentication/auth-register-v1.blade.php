@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
    <!-- Register v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="javascript:void(0);" class="brand-logo">
          <span class="brand-logo">            
            <img src="{{asset('images/icons/jasuko-icon.svg')}}" alt="Jasuko logo" />
          </span>
          <h2 class="brand-text">Jasuko</h2>
        </a>

        <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
        <p class="card-text mb-2">Make your app management easy and fun!</p>

        <form class="auth-register-form mt-2" action="/" method="GET">
          <div class="form-group">
            <label for="register-username" class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              id="register-username"
              name="register-username"
              placeholder="johndoe"
              aria-describedby="register-username"
              tabindex="1"
              autofocus
            />
          </div>
          <div class="form-group">
            <label for="register-email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="register-email"
              name="register-email"
              placeholder="john@example.com"
              aria-describedby="register-email"
              tabindex="2"
            />
          </div>

          <div class="form-group">
            <label for="register-password" class="form-label">Password</label>

            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="register-password"
                name="register-password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="register-password"
                tabindex="3"
              />
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
              <label class="custom-control-label" for="register-privacy-policy">
                I agree to <a href="javascript:void(0);">privacy policy & terms</a>
              </label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" tabindex="5">Sign up</button>
        </form>

        <p class="text-center mt-2">
          <span>Already have an account?</span>
          <a href="{{url('auth/login-v1')}}">
            <span>Sign in instead</span>
          </a>
        </p>

        <div class="divider my-2">
          <div class="divider-text">or</div>
        </div>

        <div class="auth-footer-btn d-flex justify-content-center">
          <a href="javascript:void(0)" class="btn btn-facebook">
            <i data-feather="facebook"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-twitter white">
            <i data-feather="twitter"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-google">
            <i data-feather="mail"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-github">
            <i data-feather="github"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register v1 -->
  </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/page-auth-register.js')}}"></script>
@endsection
