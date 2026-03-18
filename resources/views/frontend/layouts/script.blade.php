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
