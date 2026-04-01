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
                    <li class="breadcrumb-item"><a href="{{ route('accessibilities.index') }}">Accessibility</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <h2 class="h4">Edit Accessibility Item</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('accessibilities.index') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i>
                Back
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow">
        <form action="{{ route('accessibilities.update', $accessibility) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Position (1-3)</label>
                <select name="position" class="form-select @error('position') is-invalid @enderror">
                    @for ($i = 1; $i <= 3; $i++)
                        <option value="{{ $i }}" @selected((int) old('position', $accessibility->position) === $i)>
                            {{ $i }}
                        </option>
                    @endfor
                </select>
                @error('position')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Title</label>
                <textarea name="title" rows="4" class="form-control @error('title') is-invalid @enderror">{{ old('title', $accessibility->title) }}</textarea>
                <div class="form-text">Use a new line to break text (will display as line breaks).</div>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">URL (optional)</label>
                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror"
                    value="{{ old('url', $accessibility->url) }}" placeholder="/some-page or https://example.com or #">
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i>
                Update Item
            </button>
        </form>
    </div>
@endsection

