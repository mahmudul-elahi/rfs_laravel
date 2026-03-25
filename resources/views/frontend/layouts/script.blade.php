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

<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();

            let isValid = true;

            if ($('#full_name').val().trim() === '') {
                $('#full_name').addClass('is-invalid');
                isValid = false;
            } else {
                $('#full_name').removeClass('is-invalid');
            }

            if ($('#company_name').val().trim() === '') {
                $('#company_name').addClass('is-invalid');
                isValid = false;
            } else {
                $('#company_name').removeClass('is-invalid');
            }

            let email = $('#email').val();
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '' || !emailRegex.test(email)) {
                $('#email').addClass('is-invalid');
                isValid = false;
            } else {
                $('#email').removeClass('is-invalid');
            }

            let phone = $('#phone').val();
            let phoneRegex = /^[0-9\-+ ]+$/;
            if (phone === '' || !phoneRegex.test(phone)) {
                $('#phone').addClass('is-invalid');
                isValid = false;
            } else {
                $('#phone').removeClass('is-invalid');
            }

            let details = $('#details').val().trim();
            if (details === '') {
                $('#details').addClass('is-invalid');
                isValid = false;
            } else {
                $('#details').removeClass('is-invalid');
            }

            if (isValid) {
                $('#modalId').modal('show');
            }
        });

        $('#confirmAgree').on('click', function() {
            $('#contactForm')[0].submit();
        });

        $('input, textarea').on('input', function() {
            $(this).removeClass('is-invalid');
        });
    });



    $(document).ready(function() {
        if (!localStorage.getItem('cookie_consent_accepted')) {
            setTimeout(function() {
                $('#cookieConsent').fadeIn('slow');
            }, 1500);
        }

        $('#btnAcceptCookies').on('click', function() {
            localStorage.setItem('cookie_consent_accepted', 'true');

            $('#cookieConsent').fadeOut('fast');
        });
    });
</script>
