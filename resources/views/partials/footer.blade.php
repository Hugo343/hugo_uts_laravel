<!-- ***** All jQuery Plugins ***** -->
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Plugin & Active -->
<script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>
@push('js')
<script>
  window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.style.display = 'none';
    }
  });
</script>
@endpush
