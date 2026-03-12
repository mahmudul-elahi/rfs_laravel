<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
<script src="{{ asset('backend/vendor/nouislider/dist/nouislider.min.js') }}"></script>
<script src="{{ asset('backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
<script src="{{ asset('backend/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script src="{{ asset('backend/vendor/notyf/notyf.min.js') }}"></script>
<script src="{{ asset('backend/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/vendor/dropify-master/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('backend/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('backend/js/volt.js') }}"></script>
<script>
    $('.dropify').dropify();
</script>

<script>
    document.querySelectorAll('.editor').forEach((el) => {
        ClassicEditor
            .create(el)
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle(
                        'min-height',
                        '200px',
                        editor.editing.view.document.getRoot()
                    );
                });
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
