@extends('layouts.app')
@section('content')
<nav class="mb-5 pt-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
      <li class="breadcrumb-item active nav-item" aria-current="page"><a href="" class=""> Province </a></li>
    </ol>
</nav>
<h1>Daftar Provinsi</h1>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nama Provinsi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach ($provinces as $province)
        <tr>
            <td>{{ $province['province_id'] }}</td>
            <td>{{ $province['province'] }}</td>
            <td>
                <a href="{{ route('city', $province['province_id']) }}">Lihat Kota</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
