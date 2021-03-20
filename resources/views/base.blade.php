<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD APP</title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
<footer>
    <p>@Copyright 2020 CRUD APP</p>
</footer>
</html>