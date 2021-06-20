<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- Owl Stylesheets -->
    {{-- <link rel="stylesheet" href="{{ asset('css/docs.theme.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <style>

    </style>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    {{ $styles ?? '' }}
  </head>

  <body>


  {{ $slot }}

  <x-footer />
  </body>
</html>
