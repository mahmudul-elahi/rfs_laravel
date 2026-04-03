@props([
    'formId' => 'contactForm',
    'modalId' => 'contactPrivacyModal',
    'dir' => 'rtl',
    'title' => 'קבלו ייעוץ חינם!',
    'submitText' => 'שלח בקשת התקשרות',
    'fullNameLabel' => 'שם מלא',
    'fullNamePlaceholder' => 'למשל: ישראל ישראלי',
    'companyLabel' => 'שם החברה',
    'companyPlaceholder' => "למשל: טכנולוגיות בע''מ",
    'emailLabel' => 'אימייל',
    'emailPlaceholder' => 'name@example.com',
    'phoneLabel' => 'טלפון',
    'phonePlaceholder' => '050-0000000',
    'detailsLabel' => 'פרטים נוספים',
    'detailsPlaceholder' => 'ספרו לנו עוד על הצורך שלכם...',
])

<div class="contact-form-section" dir="{{ $dir }}">
    <h3>{{ $title }}</h3>

    @if (session('success'))
        <div class="alert alert-info mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form id="{{ $formId }}" class="js-contact-form" action="{{ route('contact.store') }}" method="post"
        data-privacy-modal="{{ $modalId }}" novalidate>
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="{{ $formId }}_full_name" class="form-label">{{ $fullNameLabel }}</label>
                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name"
                        id="{{ $formId }}_full_name" value="{{ old('full_name') }}"
                        placeholder="{{ $fullNamePlaceholder }}" required />
                    <div class="invalid-feedback">
                        @error('full_name')
                            {{ $message }}
                        @else
                            {{ $dir === 'rtl' ? 'נא להזין שם מלא' : 'Please enter your full name.' }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="{{ $formId }}_company_name" class="form-label">{{ $companyLabel }}</label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                        name="company_name" id="{{ $formId }}_company_name" value="{{ old('company_name') }}"
                        placeholder="{{ $companyPlaceholder }}" required />
                    <div class="invalid-feedback">
                        @error('company_name')
                            {{ $message }}
                        @else
                            {{ $dir === 'rtl' ? 'נא להזין שם חברה' : 'Please enter your company name.' }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="{{ $formId }}_email" class="form-label">{{ $emailLabel }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="{{ $formId }}_email" value="{{ old('email') }}"
                        placeholder="{{ $emailPlaceholder }}" required />
                    <div class="invalid-feedback">
                        @error('email')
                            {{ $message }}
                        @else
                            {{ $dir === 'rtl' ? 'נא להזין אימייל תקין' : 'Please enter a valid email address.' }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="{{ $formId }}_phone" class="form-label">{{ $phoneLabel }}</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        id="{{ $formId }}_phone" value="{{ old('phone') }}"
                        placeholder="{{ $phonePlaceholder }}" required />
                    <div class="invalid-feedback">
                        @error('phone')
                            {{ $message }}
                        @else
                            {{ $dir === 'rtl' ? 'נא להזין מספר טלפון תקין' : 'Please enter a valid phone number.' }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label for="{{ $formId }}_details" class="form-label">{{ $detailsLabel }}</label>
                    <textarea class="form-control @error('details') is-invalid @enderror" name="details" id="{{ $formId }}_details"
                        placeholder="{{ $detailsPlaceholder }}" rows="5" required>{{ old('details') }}</textarea>
                    <div class="invalid-feedback">
                        @error('details')
                            {{ $message }}
                        @else
                            {{ $dir === 'rtl' ? 'נא להזין פרטים נוספים' : 'Please enter some details.' }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mt-3">
                    <button type="submit" class="button button-primary w-100">
                        {{ $submitText }}
                        @if ($dir === 'rtl')
                            <i class="bi bi-send-fill ms-2"></i>
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade contact-popup-modal" id="{{ $modalId }}" tabindex="-1" data-bs-backdrop="static"
    data-bs-keyboard="false" role="dialog" aria-hidden="true" dir="{{ $dir }}">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-1">
                <h5 class="modal-title">
                    {{ $dir === 'rtl' ? 'הגנה על הפרטיות שלך חשובה לנו' : 'Your privacy matters to us' }}
                </h5>
                <button class="button-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                    style="{{ $dir === 'rtl' ? 'margin-right: auto; margin-left: 0;' : 'margin-left: auto; margin-right: 0;' }}">
                    <img src="{{ asset('frontend/icon/close.svg') }}" alt="Close">
                </button>
            </div>
            <div class="modal-body {{ $dir === 'rtl' ? 'text-end' : 'text-start' }}">
                @if ($dir === 'rtl')
                    <p class="fw-500">
                        אנו ב-RSF Israel AV מכבדים את הפרטיות שלך ופועלים בהתאם לחוק הגנת הפרטיות ותקנות הגנת
                        המידע. כדי להמשיך להשתמש באתר, לשלוח טפסים או לקבל שירות, עליך לאשר את מדיניות הפרטיות שלנו.
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

                    <p class="fw-bold mb-0">סימון חובה בטפסים:</p>
                    <p class="fw-normal mb-4">אני מסכים/ה למדיניות הפרטיות ולעיבוד המידע האישי שלי.</p>

                    <p class="fw-bold mb-0">הבהרה חשובה:</p>
                    <p class="fw-normal">ללא אישור מפורש של מדיניות הפרטיות, לא ניתן יהיה להמשיך לגלוש באתר, למלא
                        טפסים או לקבל שירות.</p>
                @else
                    <p class="fw-500">
                        At RSF Israel AV, we respect your privacy and process your information only for contact and
                        service purposes. To continue and send this form, please confirm that you accept our privacy
                        terms.
                    </p>

                    <p class="fw-bold mb-1">By clicking "Agree and Continue", I confirm that:</p>
                    <ul class="list-privarvy">
                        <li>I have read and understood the privacy policy.</li>
                        <li>I agree to the storage and processing of the information I submit for service and follow-up.
                        </li>
                        <li>I understand that I may request review, correction, restriction, or deletion of my data.
                        </li>
                        <li>I can contact <a href="mailto:udi@rsf-israel.com">udi@rsf-israel.com</a> regarding my data.
                        </li>
                    </ul>

                    <p class="fw-bold mb-0">Required confirmation:</p>
                    <p class="fw-normal mb-4">I agree to the privacy policy and to the processing of my personal data.
                    </p>

                    <p class="fw-bold mb-0">Important:</p>
                    <p class="fw-normal">Without explicit agreement, the form cannot be submitted.</p>
                @endif
            </div>
            <div class="modal-footer pb-0 pt-3">
                <div class="w-100">
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <button type="button" class="button button-outline-primary w-100"
                                data-bs-dismiss="modal">
                                {{ $dir === 'rtl' ? 'ביטול' : 'Cancel' }}
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="button button-primary w-100 js-contact-confirm"
                                data-contact-form="{{ $formId }}">
                                {{ $dir === 'rtl' ? 'אישור והמשך' : 'Agree and Continue' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
