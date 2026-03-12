@extends('backend.master')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Projects</li>
                </ol>
            </nav>
            <h2 class="h4">Update a Project</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('projects.index') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i>
                Back to Projects
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow">
        <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="image" class="form-label">Project Image</label>
                <input type="file" name="image" id="image" class="dropify @error('image') is-invalid @enderror"
                    data-default-file="{{ $project->image_url }}" data-max-file-size="2M"
                    data-allowed-file-extensions="jpg png jpeg gif webp">

                @error('image')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" name="heading" id="heading"
                    class="form-control @error('heading') is-invalid @enderror"
                    value="{{ old('heading', $project->heading) }}">
                @error('heading')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title"
                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="form-control editor @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="about_title" class="form-label">About Title</label>
                <input type="text" name="about_title" id="about_title"
                    class="form-control @error('about_title') is-invalid @enderror"
                    value="{{ old('about_title', $project->about_title) }}">
                @error('about_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="about_description" class="form-label">About Description</label>
                <textarea name="about_description" id="about_description" rows="4"
                    class="form-control editor @error('about_description') is-invalid @enderror">{{ old('about_description', $project->about_description) }}</textarea>
                @error('about_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="client_website" class="form-label">Client Website</label>
                <input type="url" name="client_website" id="client_website"
                    class="form-control @error('client_website') is-invalid @enderror"
                    value="{{ old('client_website', $project->client_website) }}">
                @error('client_website')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title"
                    class="form-control @error('meta_title') is-invalid @enderror"
                    value="{{ old('meta_title', $project->meta_title) }}">
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_keyword" class="form-label">Meta Keyword</label>
                <input type="text" name="meta_keyword" id="meta_keyword"
                    class="form-control @error('meta_keyword') is-invalid @enderror"
                    value="{{ old('meta_keyword', $project->tags->pluck('name')->implode(', ')) }}">
                @error('meta_keyword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="meta_description" class="form-label">Meta Description</label>
                <textarea name="meta_description" id="meta_description" rows="4"
                    class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description', $project->meta_description) }}</textarea>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <svg class="icon icon-xs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Update Project
            </button>
        </form>
    </div>
@endsection
