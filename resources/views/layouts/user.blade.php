
<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.includes.meta')
  @stack('before-style')
  @include('user.includes.styles')
  @stack('after-style')
  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
  {{-- <script type="module">
    import Turbo from 'https://cdn.skypack.dev/pin/@hotwired/turbo@v7.0.0-beta.2-ou6dW2bg0qdKgUED7QEB/min/@hotwired/turbo.js';
  </script> --}}
  @livewireStyles
</head>

<body>
  @include('user.includes.header')
  @yield('content')

  @include('user.includes.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @stack('before-script')
  @include('user.includes.scripts')
  @stack('after-script')
  @include('sweetalert::alert')
  @livewireScripts
</body>
</html>