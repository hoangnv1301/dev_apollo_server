@php
$isNavbar = false;
@endphp

@extends('Admin::layouts.contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{cxl_asset('assets_cms/img/layouts/layout-without-navbar-light.png')}}" class="img-fluid" alt="Layout without navbar">
  </div>
  <div class="layout-demo-info">
    <h4>Layout without Navbar</h4>
    <p>Layout does not contain Navbar component.</p>
  </div>
</div>
<!--/ Layout Demo -->

@endsection
