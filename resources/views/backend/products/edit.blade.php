@extends('backend.master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
            </nav>
            <h2 class="h4">Edit Product</h2>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('products.index') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i>
                Back to Products
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow">
        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Product Image</label>

                @if ($product->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $product->image) }}" width="120" class="rounded">
                    </div>
                @endif

                <input type="file" name="image" class="dropify @error('image') is-invalid @enderror"
                    data-max-file-size="2M" data-allowed-file-extensions="jpg png jpeg gif webp">

                @error('image')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Heading</label>
                <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror"
                    value="{{ old('heading', $product->heading) }}">
                @error('heading')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" rows="4" class="form-control editor @error('description') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                    value="{{ old('meta_title', $product->meta_title) }}">
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Meta Keyword</label>
                <input type="text" name="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror"
                    value="{{ old('meta_keyword', $product->tags->pluck('name')->implode(', ')) }}">
                @error('meta_keyword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea name="meta_description" rows="4" class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description', $product->meta_description) }}</textarea>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">
                <i class="bi bi-check-lg me-1"></i>
                Update Product
            </button>
        </form>
    </div>
@endsection
