<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Homepage</title>

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
  <header>
    <ul style="display:flex; gap: 10px; list-style-type: none;">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('next') }}">Next.js</a></li>
      <li><a href="{{ route('vue') }}">Vue.js</a></li>
      <li><a href="{{ route('laravel') }}">Laravel</a></li>
    </ul>
  </header>
  <hr>
  <h1>{{ $helloWorld }}</h1>
  <h2>My favourite Frameworks:</h2>
  <ul>
    @foreach ($frameworks as $framework)
      <li>{{$framework}}</li>
    @endforeach
  </ul>
  <hr>
  <footer>
    Copyright @ Boolean 88 gang
  </footer>
</body>
</html>