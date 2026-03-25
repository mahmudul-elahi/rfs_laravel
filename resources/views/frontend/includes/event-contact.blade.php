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


<div class="modal fade contact-popup-modal" id="modalId" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true" dir="rtl">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-1">
                <h5 class="modal-title" id="modalTitleId">
                    הגנה על הפרטיות שלך חשובה לנו
                </h5>
                <button class="button-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                    style="margin-right: auto; margin-left: 0;">
                    <img src="{{ asset('frontend/icon/close.svg') }}" alt="סגור">
                </button>
            </div>
            <div class="modal-body text-end">
                <p class="fw-500">
                    אנו ב-RSF Israel AV מכבדים את הפרטיות שלך ופועלים בהתאם לחוק הגנת הפרטיות ותקנות הגנת המידע. כדי
                    להמשיך להשתמש באתר, לשלוח טפסים או לקבל שירות, עליך לאשר את מדיניות הפרטיות שלנו.
                </p>

                <p class="fw-bold mb-1">בלחיצה על "אישור והמשך", אני מצהיר/ה כי:</p>
                <ul class="list-privarvy">
                    <li>קראתי והבנתי את מדיניות הפרטיות.</li>
                    <li>אני מסכים/ה לשמירה ולעיבוד של המידע שנמסר על ידי למטרות הבאות:</li>
                    <ul class="ms-4">
                        <li>מענה על שאלותיי</li>
                        <li>יצירת קשר ומתן שירות</li>
                        <li>שיפור חוויית הגלישה</li>
                        <li>קבלת עדכונים והצעות רלוונטיות (בכפוף להסכמה מפורשת)</li>
                    </ul>
                    <li>ידוע לי כי אני רשאי/ת בכל עת לבקש לעיין, לתקן, להגביל או למחוק את המידע על ידי
                        <u>פנייה לכתובת <a href="mailto:udi@rsf-israel.com">udi@rsf-israel.com</a></u>
                    </li>
                </ul>

                <p class="fw-bold mb-0">סימון חובה בטפסים: </p>
                <p class="fw-normal mb-4">אני מסכים/ה למדיניות הפרטיות ולעיבוד המידע האישי שלי.</p>

                <p class="fw-bold mb-0">הבהרה חשובה: </p>
                <p class="fw-normal">ללא אישור מפורש של מדיניות הפרטיות, לא ניתן יהיה להמשיך לגלוש באתר, למלא טפסים או
                    לקבל שירות.</p>
            </div>
            <div class="modal-footer pb-0 pt-3">
                <div class="w-100">
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <button type="button" class="button button-outline-primary w-100"
                                data-bs-dismiss="modal">ביטול</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" id="confirmAgree" class="button button-primary w-100">אישור
                                והמשך</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
