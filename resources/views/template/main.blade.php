<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rumah Jeans | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/logo-rivets.png') }}" rel="rivets-icon">
  <link href="{{ asset('img/logo-rivets.png') }}" rel="rivets-icon">

  <!-- Assets CSS Files -->
  <link href="{{ asset('assets/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap/css/bootstrap.min.cs') }}s" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  {{-- typed js --}}
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
</head>

<body>

    @include('partials.navbar')
      <main id="main">
        @yield('content')
      </main>
    @include('partials.footer')

<!-- Assets JS Files -->
<script src="{{ asset('assets/aos/aos.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/swiper/swiper-bundle.min.js') }}"></script>
{{-- <script src="{{ asset('assets/php-email-form/validate.js') }}"></script> --}}

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>

{{-- typed js --}}
<script>
  new Typed('#typed',{
  strings : ['"Whoever said money can\'t buy happiness cleary didn\'t know where to stop"'],
  typeSpeed : 100,
  delaySpeed : 100,
  loop : true
})
</script>
</body>

</html>