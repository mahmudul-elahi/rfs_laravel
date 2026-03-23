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
                <div class="contact-form-section">
                    <h3>קבלו ייעוץ חינם!</h3>
                    <form id="contactForm" action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">שם מלא</label>
                                    <input type="text" class="form-control" name="full_name" id="full_name"
                                        placeholder="למשל: ישראל ישראלי" />
                                    <div class="invalid-feedback">נא להזין שם מלא</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="company_name" class="form-label">שם החברה</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name"
                                        placeholder="למשל: טכנולוגיות בע''מ" />
                                    <div class="invalid-feedback">נא להזין שם חברה</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">אימייל</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="name@example.com" />
                                    <div class="invalid-feedback">נא להזין אימייל תקין</div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">טלפון</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="050-0000000" />
                                    <div class="invalid-feedback">נא להזין מספר טלפון תקין</div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="details" class="form-label">פרטים נוספים</label>
                                    <textarea class="form-control" name="details" id="details" placeholder="ספרו לנו עוד על הצורך שלכם..." rows="5"></textarea>
                                    <div class="invalid-feedback">נא להזין פרטים נוספים</div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mt-3">
                                    <button type="submit" class="button button-primary w-100">
                                        שלח בקשת התקשרות <i class="bi bi-send-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
