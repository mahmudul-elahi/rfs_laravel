@extends('backend.master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <i class="bi bi-house-door"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
            <h2 class="h4">Create Page</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('pages.index') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i>
                Back
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow">
        <form action="{{ route('pages.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" rows="8" class="form-control editor @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title"
                    class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title') }}">
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_description" class="form-label">Meta Description</label>
                <textarea name="meta_description" id="meta_description" rows="4"
                    class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description') }}</textarea>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Create Page
            </button>
        </form>
    </div>
@endsection
