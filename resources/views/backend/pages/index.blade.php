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
                    <li class="breadcrumb-item active" aria-current="page">Pages</li>
                </ol>
            </nav>
            <h2 class="h4">Custom Pages</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('pages.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <i class="bi bi-plus-lg me-2"></i>
                New Page
            </a>
        </div>
    </div>

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Title</th>
                    <th class="border-gray-200">Slug</th>
                    <th class="border-gray-200">Created At</th>
                    <th class="border-gray-200">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pages as $page)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ Str::limit($page->title, 70) }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>{{ $page->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="btn-group dropstart">
                                <button
                                    class="btn btn-outline-gray-500 dropdown-toggle dropdown-toggle-split m-0 rounded-circle"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm">
                                        <i class="bi bi-three-dots"></i>
                                    </span>
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item" href="{{ route('pages.edit', $page) }}">
                                        <i class="bi bi-pencil-square me-2"></i> Edit
                                    </a>
                                    <form action="{{ route('pages.destroy', $page) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger rounded-bottom"
                                            onclick="return confirm('Are you sure you want to delete this page?')">
                                            <i class="bi bi-trash me-2"></i> Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No pages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pt-4">
            {{ $pages->links() }}
        </div>
    </div>
@endsection
