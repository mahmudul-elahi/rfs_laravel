@extends('frontend.master')

@section('title')
    פרויקט - {{ $project->title }}
@endsection

@section('content')
    <section class="product-details-page" dir="rtl">
        <div class="container">
            <h2>{{ $project->title }}</h2>

            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="bi bi-house-door-fill"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">פרויקטים</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $project->title }}
                    </li>
                </ol>
            </nav>


            @php
                $text = $project->description;
                $firstPart = Str::limit($text, 700, '');
                $remainingPart = Str::substr($text, 700);
            @endphp

            <div class="row g-5 mt-3">
                <div class="col-md-5">
                    <div class="project-details-image">
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" title="{{ $project->title }}">
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
