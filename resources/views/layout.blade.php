<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Blog</title>
  <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
  <script src="{{ asset('/js/app.js') }}" defer></script>
</head>
<body>
  {{-- navigation --}}
  @include('navbar')

  <div  class="container py-4">
  {{-- flash message --}}
  @include('flash::message')

  {{-- main content --}}
  @yield('content')
  </div>
</body>
</html>
