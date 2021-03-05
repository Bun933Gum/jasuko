@php
$configData = Helper::applClasses();
@endphp
@extends('layouts/fullLayoutMaster')

@section('title', 'Maintenance')

@section('page-style')
<link rel="stylesheet" href="{{asset(mix('css/base/pages/page-misc.css'))}}">
@endsection

@section('content')
<!-- Under maintenance-->
<div class="misc-wrapper">
  <a class="brand-logo" href="javascript:void(0);">
    <span class="brand-logo">            
      <img src="{{asset('images/icons/jasuko-icon.svg')}}" alt="Jasuko logo" />
    </span>
    <h2 class="brand-text">Jasuko</h2>
  </a>
  <div class="misc-inner p-2 p-sm-3">
    <div class="w-100 text-center">
      <h2 class="mb-1">Under Maintenance 🛠</h2>
      <p class="mb-3">Sorry for the inconvenience but we're performing some maintenance at the moment</p>
      <form class="form-inline justify-content-center row m-0 mb-2" action="javascript:void(0);">
        <input class="form-control col-12 col-md-5 mb-1 mr-md-2" id="notify-email" type="text" placeholder="john@example.com" />
        <button class="btn btn-primary mb-1 btn-sm-block" type="submit">Notify</button>
      </form>
      @if($configData['theme'] === 'dark')
      <img class="img-fluid" src="{{asset('images/pages/under-maintenance-dark.svg')}}" alt="Under maintenance page" />
      @else
      <img class="img-fluid" src="{{asset('images/pages/under-maintenance.svg')}}" alt="Under maintenance page" />
      @endif
    </div>
  </div>
</div>
<!-- / Under maintenance-->
@endsection
