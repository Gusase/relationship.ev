<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('component.partials.head')
</head>

<body class="{{ isset($class) ? $class : '' }} min-h-screen antialiased">
  @if (!isset($hideNavbar))
    @auth
      @include('component.nav')
      <header class="hidden">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          @yield('header')
        </div>
      </header>
    @endauth
  @endif

  <div class="container relative mx-auto min-h-full max-w-7xl px-6 py-12 lg:px-8">

    @yield('container')

  </div>

  <footer>
    @include('component.partials.footer')
  </footer>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/flowbite.js') }}" defer></script>
  {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const avatarButton = document.getElementById('avatarButton');
      const userDropdown = document.getElementById('userDropdown');

      avatarButton.addEventListener('click', function() {
        userDropdown.classList.toggle('hidden');
      });

      // Menutup dropdown saat mengklik di luar dropdown
      window.addEventListener('click', function(event) {
        if (!userDropdown.contains(event.target) && !avatarButton.contains(event.target)) {
          userDropdown.classList.add('hidden');
        }
      });
    });
  </script>
</body>

</html>
