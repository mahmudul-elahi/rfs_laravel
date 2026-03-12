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
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
            <h2 class="h4">Website Settings</h2>
        </div>
    </div>

    <div class="card card-body border-0 shadow">
        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-5">
                <div class="col-md-6">
                    <h5 class="mb-3">Basic Settings</h5>

                    <div class="mb-3">
                        <label class="form-label">Site Name</label>
                        <input type="text" name="site_name" class="form-control"
                            value="{{ $settings['site_name'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Site Tagline</label>
                        <input type="text" name="site_tagline" class="form-control"
                            value="{{ $settings['site_tagline'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Site Description</label>
                        <textarea name="site_description" rows="3" class="form-control">{{ $settings['site_description'] ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Site Logo</label>
                        <input type="file" name="site_logo" class="dropify"
                            data-default-file="{{ isset($settings['site_logo']) ? asset('storage/' . $settings['site_logo']) : '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Favicon</label>
                        <input type="file" name="site_favicon" class="dropify"
                            data-default-file="{{ isset($settings['site_favicon']) ? asset('storage/' . $settings['site_favicon']) : '' }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <h5 class="mb-3">Contact Settings</h5>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="contact_phone" class="form-control"
                            value="{{ $settings['contact_phone'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fax</label>
                        <input type="text" name="contact_fax" class="form-control"
                            value="{{ $settings['contact_fax'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="contact_email" class="form-control"
                            value="{{ $settings['contact_email'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="contact_address" rows="3" class="form-control">{{ $settings['contact_address'] ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Google Map Embed</label>
                        <textarea name="google_map_embed" rows="3" class="form-control">{{ $settings['google_map_embed'] ?? '' }}</textarea>
                    </div>

                </div>

                <div class="col-md-6">

                    <h5 class="mb-3">Social Media</h5>

                    <div class="mb-3">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" name="whatsapp_number" class="form-control"
                            value="{{ $settings['whatsapp_number'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Facebook URL</label>
                        <input type="text" name="facebook_url" class="form-control"
                            value="{{ $settings['facebook_url'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Instagram URL</label>
                        <input type="text" name="instagram_url" class="form-control"
                            value="{{ $settings['instagram_url'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Twitter URL</label>
                        <input type="text" name="twitter_url" class="form-control"
                            value="{{ $settings['twitter_url'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">LinkedIn URL</label>
                        <input type="text" name="linkedin_url" class="form-control"
                            value="{{ $settings['linkedin_url'] ?? '' }}">
                    </div>
                </div>

                <div class="col-md-6">

                    <h5 class="mb-3">SEO Settings</h5>

                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="seo_title" class="form-control"
                            value="{{ $settings['seo_title'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" name="seo_keywords" class="form-control"
                            value="{{ $settings['seo_keywords'] ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Meta Description</label>
                        <textarea name="seo_description" rows="3" class="form-control">{{ $settings['seo_description'] ?? '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Open Graph Image (OG Image)</label>
                        <input type="file" name="og_image" class="dropify"
                            data-default-file="{{ isset($settings['og_image']) ? asset('storage/' . $settings['og_image']) : '' }}">
                    </div>
                </div>

                <div class="col-md-6">

                    <h5 class="mb-3">System Settings</h5>

                    <input type="hidden" name="maintenance_mode" value="false">

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="maintenance_mode" value="true"
                            {{ ($settings['maintenance_mode'] ?? 'false') === 'true' ? 'checked' : '' }}>
                        <label class="form-check-label">Enable Maintenance Mode</label>
                    </div>
                </div>

            </div>



            <button type="submit" class="btn btn-primary mt-4">
                <i class="bi bi-save me-1"></i>
                Update Settings
            </button>

        </form>
    </div>
@endsection
