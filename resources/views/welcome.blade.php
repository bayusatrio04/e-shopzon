@extends('layouts.app')
@section('content')
        <section>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/carousel1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>

        <section>
            <div class="container pt-5">
                <h1 class="mb-5">Our Product</h1>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $product['image_url'] }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product['product_name'] }}</h5>
                                    <p class="card-text">Rp {{ number_format($product['current_price'] * $exchangeRate, 0, ',', '.') }}</p>
                                    <p class="card-text">{{ $product['asin'] }}</p>
                                    <a href="{{ route('product.detail', ['asin' => $product['asin']]) }}" class="btn btn-primary">See Product</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection
