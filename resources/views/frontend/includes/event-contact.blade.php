@php
    $projects = App\Models\Project::latest()->take(2)->get();
@endphp

<section class="event-contact" dir="rtl">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6">
                <div class="event-heading">
                    <h2>אירועים</h2>
                    <a class="view-all-button" href="{{ route('projects.all') }}">צפה בהכל</a>
                </div>

                @forelse ($projects as $project)
                    <a href="{{ route('projects.show_detail', $project) }}" class="event-item">
                        <div class="event-item-heading">
                            <h3>{{ Str::limit($project->title, 35, '') }}</h3>
                            <div class="event-link-button"><i class="bi bi-arrow-left-short"></i></div>
                        </div>
                        <p>{!! Str::limit($project->description, 250, '') !!}</p>
                    </a>
                @empty
                    <p>אין אירועים זמינים כרגע. אנא בדקו מאוחר יותר.</p>
                @endforelse



            </div>

            <div class="col-md-6">
                @include('frontend.includes.contact-form', [
                    'formId' => 'eventContactForm',
                    'modalId' => 'eventContactPrivacyModal',
                    'dir' => 'rtl',
                ])
            </div>

        </div>
    </div>
</section>
