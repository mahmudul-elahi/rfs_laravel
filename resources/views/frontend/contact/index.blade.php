@extends('frontend.master')

@section('title', 'Contact')

@section('content')


    <section class="system-rantal">
        <div class="container">
            <h2>Contact Us</h2>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-house-door-fill"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>


            <div class="row g-5">
                <div class="col-md-6">

                    <div class="contact-form-section left h-100">
                        <h5 class="mb-5">
                            Contact Us And Get A Free Consultation or reach us here -
                        </h5>

                        <h6>Inquires:</h6>
                        <h4>udi@rsf-israel.com</h4>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="contact-form-section">
                        <h3>Get a free consultation!</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Ex. Jane Cooper" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="company_name" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" id="company_name"
                                            placeholder="Ex. Al Arafa Technologies" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Ex. You@Example.com" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="920 006 748" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="details" class="form-label">Details</label>
                                        <textarea class="form-control" name="details" id="details" placeholder="Tell us more about your idea..."
                                            rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-4">
                                        <button class="button button-primary w-100">Submit Contact Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="section-contact-bottom">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="section-contact-bottom-left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="d-flex align-items-center gap-4">
                                <div class="c-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>

                                <div class="c-detail">
                                    <h5>Phone:</h5>
                                    <h6>054-4697447</h6>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex align-items-center gap-4">
                                <div class="c-icon">
                                    <i class="bi bi-printer"></i>
                                </div>

                                <div class="c-detail">
                                    <h5>Fax:</h5>
                                    <h6>153-3-5162896</h6>
                                </div>
                            </div>
                        </li>


                        <li class="mb-0">
                            <div class="d-flex align-items-center gap-4">
                                <div class="c-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>

                                <div class="c-detail">
                                    <h5>Email:</h5>
                                    <h6>udi@rsf-israel.com</h6>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-contact-bottom-right h-100">
                    <h5>Stay connected with us!</h5>


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

                        <a href="https://www.linkedin.com/in/yourusername" target="_blank"
                            class="c-icon rounded c-icon-lg">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
