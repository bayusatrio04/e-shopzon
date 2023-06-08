@extends('layouts.app')

@section('content')
<nav class="mb-5 pt-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item nav-item"><a href="{{ route('province.index') }}" class="nav-link">Provinces</a></li>
      <li class="breadcrumb-item active nav-item" aria-current="page"><a href="" class=""> City </a></li>
    </ol>
</nav>

<a href="{{ route('province.index') }}" class="btn btn-secondary">Back</a>
<h1 class="pt-5">Daftar Kota</h1>
<table class="table table-striped">
    <thead>
        <th>ID Kota</th>
        <th>Nama Kota</th>
    </thead>
    <tbody>
        @foreach ($city as $citys)
        <tr>
            <td>{{ $citys['city_id'] }}</td>
            <td>{{ $citys['city_name'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
