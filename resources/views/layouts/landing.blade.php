<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
</head>

<body>
  @include('layouts._partials.header')
  {{-- @include('landing.suma') --}}
  
  <h2 class="text-secondary">@yield('title')</h2>
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="{{ asset('bootstrap.js') }}"></script>
</body>

</html>