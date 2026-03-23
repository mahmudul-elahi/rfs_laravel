@extends('frontend.master')

@section('title', 'פרויקטים')

@section('content')

    <section class="products projects" dir="rtl">
        <div class="container">
            <div class="product-heading">
                <div>
                    <h2>הפרויקטים שלנו</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">פרויקט</li>
                        </ol>
                    </nav>
                </div>

                <form action="" method="post">
                    <div class="product-search">
                        <input type="text" class="form-control form-control-lg" name="search" id="search"
                            placeholder="חיפוש לפי שם פרויקט..." />
                        <i class="bi bi-search"></i>
                    </div>
                </form>
            </div>


            @forelse ($projects as $project)
                <div class="products-item" dir="rtl">
                    <div class="row g-5">
                        <div class="col-md-7 order-2 order-md-1">
                            <h2>{{ Str::limit($project->title, 25) }}</h2>
                            <p>
                                {!! Str::limit($project->description, 150, '...') !!}
                            </p>

                            <div class="text-center text-md-start">
                                <a href="{{ route('projects.show_detail', $project) }}" class="product-button">
                                    <div class="product-details">פרטי הפרויקט</div>
                                    <div class="product-icon"><i class="bi bi-arrow-left-short"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 order-1 order-md-2">
                            <div class="product-image">
                                <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                    title="{{ $project->title }}">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted">
                    לא נמצאו פרויקטים.
                </div>
            @endforelse




        </div>
    </section>

@endsection
