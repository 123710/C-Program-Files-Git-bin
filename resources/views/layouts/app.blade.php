<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> {{ config('app.name', 'Laravel') }}</title>
 <link rel="stylesheet" href="css/app.css">

 <script src="{{ asset('js/app.js') }}" defer></script>
 </head>
 <body>





 <div class="container">

   <ul class="navbar-nav mr-auto">
 <li class="nav-item">
 <a class="nav-link" href="{{ route('contacts.index') }}"> Contacten</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="{{ route('companies.index') }}">Bedrijven</a>
 </li>
</ul>


 @yield('content')
 </div>





 <script src="{{ asset('js/app.js') }}" type="text/js"></script>
 </body>
</html>
