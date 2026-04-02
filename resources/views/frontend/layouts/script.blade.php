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
        $('.js-contact-form').on('submit', function(event) {
            event.preventDefault();

            const $form = $(this);
            let isValid = true;

            $form.find('input[required], textarea[required]').each(function() {
                const $field = $(this);
                const value = $field.val().trim();
                const fieldType = ($field.attr('type') || '').toLowerCase();
                let fieldValid = value !== '';

                if (fieldValid && fieldType === 'email') {
                    fieldValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
                }

                if (fieldValid && $field.attr('name') === 'phone') {
                    fieldValid = /^[0-9\-+ ]+$/.test(value);
                }

                $field.toggleClass('is-invalid', !fieldValid);
                isValid = isValid && fieldValid;
            });

            if (isValid) {
                const modalId = $form.data('privacy-modal');
                $('#' + modalId).modal('show');
            }
        });

        $('.js-contact-confirm').on('click', function() {
            const formId = $(this).data('contact-form');
            const form = document.getElementById(formId);

            if (form) {
                form.submit();
            }
        });

        $('.js-contact-form input, .js-contact-form textarea').on('input', function() {
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
