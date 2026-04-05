@extends('frontend.master')

@section('title', 'מוצרים')

@section('content')
    <section class="products" dir="rtl">
        <div class="container">
            <div class="product-heading">
                <div>
                    <h2>המוצרים שלנו</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">מוצרים</li>
                        </ol>
                    </nav>
                </div>

                <form action="#" method="post">
                    <div class="product-search">
                        <input type="text" class="form-control form-control-lg" name="search" id="search"
                            placeholder="חיפוש לפי שם מוצר..." />
                        <i class="bi bi-search"></i>
                    </div>
                </form>
            </div>

            @forelse ($products as $product)
                @php
                    $isEven = $loop->even;
                @endphp
                <div class="products-item">
                    <div class="row g-5 align-items-center">
                        <div class="col-md-6 order-2 {{ $isEven ? 'order-md-2' : 'order-md-1' }}">
                            <h2>{{ Str::limit($product->heading, 18, '') }}</h2>
                            <p> {!! Str::limit($product->description, 150) !!}</p>

                            <div class="text-center text-md-start">
                                <a href="{{ route('products.show_detail', $product) }}" class="product-button">
                                    <div class="product-details">פרטי מוצר</div>
                                    <div class="product-icon">
                                        <i class="bi bi-arrow-left-short"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 order-1 {{ $isEven ? 'order-md-1' : 'order-md-2' }}">
                            <div class="product-image">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->heading }}"
                                    title="{{ $product->heading }}">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">לא נמצאו מוצרים</p>
            @endforelse

        </div>
    </section>

@endsection
