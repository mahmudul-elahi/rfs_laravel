@extends('frontend.master')

@section('title', 'צור קשר')

@section('hideEventContact', 'true')

@section('content')


    <section class="system-rantal" dir="rtl">
        <div class="container">
            <h2 class="text-start">צור קשר</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">צור קשר</li>
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-door-fill"></i></a></li>
                </ol>
            </nav>


            <div class="row g-5">
                <div class="col-md-6">

                    <div class="contact-form-section left h-100 text-end">
                        <h5 class="mb-5">
                            צרו איתנו קשר לקבלת ייעוץ חינם, או פנו אלינו כאן:
                        </h5>

                        <h6>לפניות:</h6>
                        <h4>udi@rsf-israel.com</h4>
                    </div>

                </div>

                <div class="col-md-6">
                    @include('frontend.includes.contact-form', [
                        'formId' => 'contactPageForm',
                        'modalId' => 'contactPagePrivacyModal',
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
                </div>
            </div>

        </div>
    </section>

    <div class="section-contact-bottom" dir="rtl">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="section-contact-bottom-left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="d-flex align-items-center gap-4">
                                <div class="c-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>

                                <div class="c-detail text-start">
                                    <h5>טלפון:</h5>
                                    <h6>054-4697447</h6>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex align-items-center gap-4">
                                <div class="c-icon">
                                    <i class="bi bi-printer"></i>
                                </div>

                                <div class="c-detail text-start">
                                    <h5>פקס:</h5>
                                    <h6>153-3-5162896</h6>
                                </div>
                            </div>
                        </li>


                        <li class="mb-0">
                            <div class="d-flex align-items-center gap-4">
                                <div class="c-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>

                                <div class="c-detail text-start">
                                    <h5>אימייל:</h5>
                                    <h6>udi@rsf-israel.com</h6>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-contact-bottom-right h-100 text-start">
                    <h5>הישארו מחוברים אלינו!</h5>


                    <div class="d-flex align-items-center gap-3 contact-secton-right">

                        <a href="https://wa.me/1234567890" target="_blank" class="c-icon rounded c-icon-lg">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a href="https://www.instagram.com/yourusername" target="_blank" class="c-icon rounded c-icon-lg">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="https://www.facebook.com/yourusername" target="_blank" class="c-icon rounded c-icon-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="https://twitter.com/yourusername" target="_blank" class="c-icon rounded c-icon-lg">
                            <i class="fab fa-x-twitter"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/yourusername" target="_blank" class="c-icon rounded c-icon-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
