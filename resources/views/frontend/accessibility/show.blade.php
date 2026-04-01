@extends('frontend.master')

@section('title')
    Accessibility - {{ $accessibility->heading }}
@endsection

@section('content')
    <section class="product-details-page" dir="rtl">
        <div class="container">
            <h2>{{ $accessibility->heading }}</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('accessibility.index') }}">Accessibility</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $accessibility->heading }}</li>
                </ol>
            </nav>

            @php
                $text = $accessibility->description;
                $firstPart = Str::limit($text, 700, '');
                $remainingPart = Str::substr($text, 700);
            @endphp

            <div class="row g-5">
                <div class="col-md-5">
                    <div class="product-details-image">
                        <img src="{{ asset($accessibility->image) }}" alt="{{ $accessibility->heading }}"
                            title="{{ $accessibility->heading }}">
                    </div>
                </div>

                <div class="col-md-7">
                    <p>{!! $firstPart !!}</p>
                </div>

                @if ($remainingPart)
                    <div class="col-md-12">
                        <p>{!! $remainingPart !!}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
