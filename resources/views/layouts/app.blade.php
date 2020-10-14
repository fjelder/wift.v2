<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
		<link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
      <body class="antialiased">
    <div class="page">
      
      @livewire('header')
      @livewire('navigation')
      <div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- <h2 class="page-title"> -->
                  {{ $header }}
                <!-- </h2> -->
              </div>
            </div>
          </div>
          <!-- Content here -->
          <main>
            {{ $slot }}
        </main>
        </div>
        @livewire('footer')
      </div>
    </div>
    @livewireScripts
    <!-- Libs JS -->
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>

    <script src="https://unpkg.com/imask"></script>
    <script>
      document.body.style.display = "block"
    </script>
    <script>
  (function () {
    /**
     * Input mask
     */
    var maskElementList = [].slice.call(document.querySelectorAll('[data-mask]'))
    maskElementList.map(function (maskEl) {
      return new IMask(maskEl, {
        mask: maskEl.dataset.mask,
        lazy: maskEl.dataset['mask-visible'] === 'true'
      })
    });
  })();
</script>
  </body>
</html>
