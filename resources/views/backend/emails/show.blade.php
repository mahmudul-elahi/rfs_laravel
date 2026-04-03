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
                    <li class="breadcrumb-item">
                        <a href="{{ route('emails.index') }}">Messages</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Message</li>
                </ol>
            </nav>
            <h2 class="h4 mb-1">{{ $email->full_name }}</h2>
            <div class="text-muted small">
                Received {{ $email->created_at->format('M d, Y h:i A') }}
            </div>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('emails.index') }}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                <i class="bi bi-arrow-left me-2"></i> Back to Inbox
            </a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h3 class="h5 mb-1">Send Reply</h3>
                    <p class="text-muted small mb-0">Reply directly to this sender from the dashboard.</p>
                </div>

                <div class="card-body">
                    <form action="{{ route('emails.reply', $email) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="reply_to" class="form-label">To</label>
                            <input type="email" name="recipient_email" id="reply_to"
                                class="form-control @error('recipient_email') is-invalid @enderror"
                                value="{{ old('recipient_email', $email->email) }}" required>
                            @error('recipient_email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" id="subject"
                                class="form-control @error('subject') is-invalid @enderror"
                                value="{{ old('subject', 'Re: Your contact inquiry') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" rows="10" class="form-control @error('message') is-invalid @enderror"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send me-2"></i> Send Reply
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card border-0 shadow h-100">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h3 class="h5 mb-1">Original Message</h3>
                    <p class="text-muted small mb-0">Sender details and full email text.</p>
                </div>

                <div class="card-body">
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100">
                                <div class="text-muted small text-uppercase mb-1">Full Name</div>
                                <div class="fw-semibold">{{ $email->full_name }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100">
                                <div class="text-muted small text-uppercase mb-1">Company</div>
                                <div class="fw-semibold">{{ $email->company_name }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100">
                                <div class="text-muted small text-uppercase mb-1">Email</div>
                                <div class="fw-semibold">{{ $email->email }}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100">
                                <div class="text-muted small text-uppercase mb-1">Phone</div>
                                <div class="fw-semibold">{{ $email->phone }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded p-4 bg-light">
                        <div class="text-muted small text-uppercase mb-2">Message</div>
                        <div style="white-space: pre-line;">{{ $email->details }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
