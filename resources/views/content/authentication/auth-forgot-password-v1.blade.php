@extends('layouts/fullLayoutMaster')

@section('title', 'Forgot Password')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
    <!-- Forgot Password v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="javascript:void(0);" class="brand-logo">
          <span class="brand-logo">            
            <img src="{{asset('images/icons/jasuko-icon.svg')}}" alt="Jasuko logo" />
          </span>
          <h2 class="brand-text">Jasuko</h2>
        </a>

        <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
        <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

        <form class="auth-forgot-password-form mt-2" action="/auth/reset-password-v1" method="GET">
          <div class="form-group">
            <label for="forgot-password-email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="forgot-password-email"
              name="forgot-password-email"
              placeholder="john@example.com"
              aria-describedby="forgot-password-email"
              tabindex="1"
              autofocus
            />
          </div>
          <button class="btn btn-primary btn-block" tabindex="2">Send reset link</button>
        </form>

        <p class="text-center mt-2">
          <a href="{{url('auth/login-v1')}}"> <i data-feather="chevron-left"></i> Back to login </a>
        </p>
      </div>
    </div>
    <!-- /Forgot Password v1 -->
  </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/page-auth-forgot-password.js'))}}"></script>
@endsection
