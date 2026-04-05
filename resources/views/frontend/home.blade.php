@extends('frontend.master')

@section('title', 'Home')

@section('content')
    <section class="hero" dir="rtl">
        <div class="bg">
            <div class="container d-flex align-items-center h-100">
                <div class="row w-100">
                    <div class="col-md-6 col-11 ms-auto">
                        <h1>{{ $settings['site_name'] ?? 'RSF ISRAEL AV ' }}</h1>
                        <p>החברה מתמחה במתן פתרונות טכנולוגיים ושירותי תוכן להעשרת חווית הביקור במוזיאונים, באתרי
                            תיירות, באתרי מורשת ובמרכזי מבקרים ברחבי העולם.
                        </p>

                        <a class="button button-primary" href="{{ route('products.all') }}">צפייה במוצרים</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="nav-iteam-list mb-0" dir="rtl">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="item item-1">
                        <a href="{{ route('accessibility.index') }}" class="full-href">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <h4>נגישות לאנשים עם <br>מוגבלות</h4>

                                <div class="button-rounded button-rounded-primary">
                                    <i class="bi bi-arrow-left-short"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-between h-100 w-100">
                        <div class="item item-2">
                            <a href="{{ route('products.all') }}" class="full-href">
                                <div class="d-flex align-items-end justify-content-between w-100">
                                    <h4>מוצרים</h4>

                                    <div class="button-rounded button-rounded-sm button-rounded-primary">
                                        <i class="bi bi-arrow-left-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        @php
                            $product = \App\Models\Page::where('slug', 'השכרת-מערכות')->first();
                        @endphp

                        <div class="item item-3">
                            <a href="{{ route('pages.show_detail', $product) }}" class="full-href">
                                <div class="d-flex align-items-end justify-content-between w-100">
                                    <h4>השכרת מערכות</h4>

                                    <div class="button-rounded button-rounded-sm button-rounded-primary">
                                        <i class="bi bi-arrow-left-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="products" dir="rtl">
        <div class="container">
            <div class="product-heading">
                <h2>מוצרים</h2>
                <a class="view-all-button" href="{{ route('products.all') }}">צפה בהכל</a>
            </div>


            @forelse ($products as $product)
                <div class="products-item">
                    <div class="row g-5 align-items-center">
                        <div class="col-md-6 order-2 order-md-1">
                            <h2>{{ Str::limit($product->heading, 18, '') }}</h2>
                            <p>
                                {!! Str::limit($product->description, 150) !!}
                            </p>

                            <div class="text-center text-md-start">
                                <a href="{{ route('products.show_detail', $product) }}" class="product-button">
                                    <div class="product-details">פרטי מוצר</div>
                                    <div class="product-icon">
                                        <i class="bi bi-arrow-left-short"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 order-1 order-md-2">
                            <div class="product-image">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->heading }}"
                                    title="{{ $product->heading }}">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">לא נמצאו מוצרים זמינים.</p>
            @endforelse





        </div>
    </section>
@endsection
