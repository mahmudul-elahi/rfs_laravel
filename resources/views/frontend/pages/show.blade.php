@extends('frontend.master')

@section('title')
    {{ $page->meta_title ?: $page->title }}
@endsection

@section('content')
    <section class="product-details-page" dir="rtl">
        <div class="container">
            <h2>{{ $page->title }}</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
                </ol>
            </nav>

            <div class="row g-5">
                <div class="col-md-12">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
