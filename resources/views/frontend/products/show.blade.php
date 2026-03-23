@extends('frontend.master')

@section('title')
    פרויקט - {{ $product->heading }}
@endsection

@section('content')
    <section class="product-details-page" dir="rtl">
        <div class="container">
            <h2>{{ $product->heading }}</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.all') }}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->heading }}</li>
                </ol>
            </nav>


            <div class="row g-5">
                <div class="col-md-5">
                    <div class="product-details-image">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->heading }}"
                            title="{{ $product->heading }}">
                    </div>
                </div>

                <div class="col-md-7">
                    <p>{!! $product->description !!}</p>
                </div>

                <div class="col-md-12">
                    <p>{!! $product->about_description !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
