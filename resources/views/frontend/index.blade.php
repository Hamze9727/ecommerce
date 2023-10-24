@extends('layouts.app')

@section('title', 'Home Page')



@section('content')

    <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-inner">
            @foreach ($sliders as $key => $slidersItem)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    @if ($slidersItem->image)
                        <img src="{{ asset("$slidersItem->image") }}" class="d-block w-100 h-25" alt="...">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                        <div class="custom-carousel-content">
                            <h1>
                                {!! $slidersItem->title !!}
                            </h1>
                            <p>
                                {!! $slidersItem->description !!}
                            </p>
                            <div>
                                <a href="#" class="btn btn-slider">
                                    Get Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h4>Welcome to IT E-Commerce developed BY Hamze</h4>
                    <div class="underline mx-auto"></div>
                    <p>
                        Dome her
                        write the dome her and macke suer is long dome i developed the wep site in laravel 10and using
                        livewire in this wep
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Traending Product</h4>
                    <div class="underline md-4"></div>
                </div>
                @if ($traendingProduct)
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme traending-Product">
                            @foreach ($traendingProduct as $productsItem)
                                <div class="item">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <label class="stock bg-danger">NEW</label>

                                            @if ($productsItem->ProductImage->count() > 0)
                                                <a
                                                    href="{{ url('/collections/' . $productsItem->category->slug . '/' . $productsItem->slug) }}">

                                                    <img src="{{ asset($productsItem->ProductImage[0]->image) }}"
                                                        alt="{{ $productsItem->name }}">
                                                </a>
                                            @endif
                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productsItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a
                                                    href="{{ url('/collections/' . $productsItem->category->slug . '/' . $productsItem->slug) }}">
                                                    {{ $productsItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price">$ {{ $productsItem->salling_price }} </span>
                                                <span class="original-price">$ {{ $productsItem->orginal_price }}</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4> No products Available</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.traending-Product').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection
