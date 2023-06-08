@extends('layouts.app')
@section('content')
<nav class="mb-5 pt-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
      <li class="breadcrumb-item active nav-item" aria-current="page"><a href="" class=""> Detail Product </a></li>
    </ol>
</nav>
<h1>Detail Product</h1>
<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{  }}</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>

@endsection
