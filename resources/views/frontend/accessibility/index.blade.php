@extends('frontend.master')


@section('title', 'Accessibility')


@section('content')

    @php
        $item1 = $accessibilities->get(0);
        $item2 = $accessibilities->get(1);
        $item3 = $accessibilities->get(2);

        $title1 = $item1?->heading ?? "Accessibility for people\nwith disabilities";
        $title2 = $item2?->heading ?? "Technological solutions for\npeople with disabilities";
        $title3 = $item3?->heading ?? "The ANZAC Soldiers' Memorial Centre";

        $url1 = $item1 ? route('accessibility.show_detail', $item1) : '#';
        $url2 = $item2 ? route('accessibility.show_detail', $item2) : '#';
        $url3 = $item3 ? route('accessibility.show_detail', $item3) : '#';
    @endphp

    <section class="nav-iteam-list accessibility">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="item item-1">
                        <a href="{{ $url1 }}" class="full-href">
                            <div class="d-flex align-items-center justify-content-between w-100 gap-4">
                                <h4>{!! nl2br(e($title1)) !!}</h4>

                                <div class="button-rounded button-rounded-primary">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="d-flex flex-column justify-content-between h-100 w-100">
                        <div class="item item-2">
                            <a href="{{ $url2 }}" class="full-href">
                                <div class="d-flex align-items-end justify-content-between w-100 gap-4">
                                    <h4>{!! nl2br(e($title2)) !!}</h4>

                                    <div class="button-rounded button-rounded-sm button-rounded-primary">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item item-3">
                            <a href="{{ $url3 }}" class="full-href">
                                <div class="d-flex align-items-end justify-content-between w-100 gap-4">
                                    <h4>{!! nl2br(e($title3)) !!}</h4>

                                    <div class="button-rounded button-rounded-sm button-rounded-primary">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
