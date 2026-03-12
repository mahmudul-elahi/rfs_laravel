<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RSF</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/icon/bootstrap-icons/bootstrap-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/icon/fontawesome-free-7.2.0-web/css/all.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.17/dist/lenis.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>

    <!-- Navbar Section -->

    <nav class="navbar navbar-expand-md" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Systems Rental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessibility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link last-button" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="hero">
        <div class="bg">
            <div class="container d-flex align-items-center h-100">
                <div class="row">
                    <div class="col-md-7">
                        <h1>RSF</h1>
                        <p>The company specializes in providing <br>
                            technological solutions and content <br>
                            services to enrich the experience of
                            visiting museums and tourist sites <br> around the world globally</p>

                        <a class="button button-primary" href="#">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="nav-iteam-list">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="item item-1">
                        <a href="#" class="full-href">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <h4>Accessibility for people <br>
                                    with disabilities</h4>

                                <div class="button-rounded button-rounded-primary">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="d-flex flex-column justify-content-between h-100 w-100">
                        <div class="item item-2">
                            <a href="#" class="full-href">
                                <div class="d-flex align-items-end justify-content-between w-100">
                                    <h4>Products</h4>

                                    <div class="button-rounded button-rounded-sm button-rounded-primary">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item item-3">
                            <a href="#" class="full-href">
                                <div class="d-flex align-items-end justify-content-between w-100">
                                    <h4>Systems Rental</h4>

                                    <div class="button-rounded button-rounded-sm button-rounded-primary">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="products">
        <div class="container">
            <div class="product-heading">
                <h2>Products</h2>
                <a class="view-all-button" href="#">View All</a>
            </div>


            <div class="products-item">
                <div class="row g-5">
                    <div class="col-md-6">
                        <h2>Mini Tablet -LOOK</h2>
                        <p>LOOK's mini tablet allows for the presentation
                            of AR and VR videos, interactive activities, video
                            synchronization, location-based content, and special
                            adaptation of the systems for museums and tourist sites.</p>

                        <a href="#" class="product-button">
                            <div class="product-details">Product Details</div>
                            <div class="product-icon"><i class="bi bi-arrow-right-short"></i></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="product-image">
                            <img src="{{ asset('frontend/img/product-1.png') }}" alt="Product image">
                        </div>
                    </div>
                </div>
            </div>



            <div class="products-item">
                <div class="row g-5">
                    <div class="col-md-6">
                        <h2>Mini Tablet -LOOK</h2>
                        <p>LOOK's mini tablet allows for the presentation
                            of AR and VR videos, interactive activities, video
                            synchronization, location-based content, and special
                            adaptation of the systems for museums and tourist sites.</p>

                        <a href="#" class="product-button">
                            <div class="product-details">Product Details</div>
                            <div class="product-icon"><i class="bi bi-arrow-right-short"></i></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="product-image">
                            <img src="{{ asset('frontend/img/product-1.png') }}" alt="Product image">
                        </div>
                    </div>
                </div>
            </div>



            <div class="products-item">
                <div class="row g-5">
                    <div class="col-md-6">
                        <h2>Mini Tablet -LOOK</h2>
                        <p>LOOK's mini tablet allows for the presentation
                            of AR and VR videos, interactive activities, video
                            synchronization, location-based content, and special
                            adaptation of the systems for museums and tourist sites.</p>

                        <a href="#" class="product-button">
                            <div class="product-details">Product Details</div>
                            <div class="product-icon"><i class="bi bi-arrow-right-short"></i></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="product-image">
                            <img src="{{ asset('frontend/img/product-1.png') }}" alt="Product image">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="event-contact">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="event-heading">
                        <h2>Events</h2>
                        <a class="view-all-button" href="#">View All</a>
                    </div>

                    <a href="#" class="event-item">
                        <div class="event-item-heading">
                            <h3>Agnon House in Jerusalem</h3>
                            <div class="event-link-button"><i class="bi bi-arrow-right-short"></i></div>
                        </div>
                        <p>RSF Israel (E.V.) Ltd. is proud to launch an audio guide at the
                            Agnon House in Jerusalem. During the tour, visitors can listen to rare recordings of Agnon
                            and his family, as well as
                            hear explanatory excerpts and testimonies from experts from academia and the museum staff,
                            who talk about Agnon and read
                            excerpts from his selected works.</p>
                    </a>

                    <a href="#" class="event-item">
                        <div class="event-item-heading">
                            <h3>Agnon House in Jerusalem</h3>
                            <div class="event-link-button"><i class="bi bi-arrow-right-short"></i></div>
                        </div>
                        <p>RSF Israel (E.V.) Ltd. is proud to launch an audio guide at the
                            Agnon House in Jerusalem. During the tour, visitors can listen to rare recordings of Agnon
                            and his family, as well as
                            hear explanatory excerpts and testimonies from experts from academia and the museum staff,
                            who talk about Agnon and read
                            excerpts from his selected works.</p>
                    </a>

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
                                        <input type="text" class="form-control" name="company_name"
                                            id="company_name" placeholder="Ex. Al Arafa Technologies" />
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



    <section class="details">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-md-6">
                    <div class="logo-footer">
                        <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo" title="Logo">
                        <p>R.S.F. Israel (EV) Ltd. operates in the field of audio guidance and multimedia, and
                            specializes in providing
                            technological solutions and content services to enrich the visiting experience at museums,
                            tourist sites and heritage
                            sites. The company provides a wide range of fixed and mobile multimedia systems, including:
                            video and audio players,
                            audio guidance and multimedia systems for individual visitors or groups, in a variety of
                            languages ​​and for different
                            sectors.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Site Map</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Accessibility for <br>
                                People with disabilities</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Contacts</h4>


                    <ul class="list-unstyled">
                        <li>
                            <div class="d-flex align-items-center gap-3 contact-secton-right">
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
                            <div class="d-flex align-items-center gap-3 contact-secton-right">
                                <div class="c-icon">
                                    <i class="bi bi-printer"></i>
                                </div>

                                <div class="c-detail">
                                    <h5>Fax:</h5>
                                    <h6>153-3-5162896</h6>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class="d-flex align-items-center gap-3 contact-secton-right">
                                <div class="c-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>

                                <div class="c-detail">
                                    <h5>Email:</h5>
                                    <h6>udi@rsf-israel.com</h6>
                                </div>
                            </div>
                        </li>



                        <li>
                            <div class="d-flex align-items-center gap-3 contact-secton-right">

                                <a href="https://wa.me/1234567890" target="_blank" class="c-icon rounded">
                                    <i class="fab fa-whatsapp"></i>
                                </a>

                                <a href="https://www.instagram.com/yourusername" target="_blank"
                                    class="c-icon rounded">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a href="https://www.facebook.com/yourusername" target="_blank"
                                    class="c-icon rounded">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a href="https://twitter.com/yourusername" target="_blank" class="c-icon rounded">
                                    <i class="fab fa-x-twitter"></i>
                                </a>

                                <a href="https://www.linkedin.com/in/yourusername" target="_blank"
                                    class="c-icon rounded">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('frontend/lib/jquery/jquery-1.7.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>

    <script src="https://unpkg.com/lenis@1.3.17/dist/lenis.min.js"></script>

    <script>
        const lenis = new Lenis();

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    </script>


</body>

</html>
