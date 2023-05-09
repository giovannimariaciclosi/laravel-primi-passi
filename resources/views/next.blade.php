<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Next.js</title>
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
  <h1>{{$next}}</h1>
  <a href="{{ route('home') }}">You seems lost, let's go home.</a>
  <hr>
  <footer>
    Copyright @ Boolean 88 gang
  </footer>
</body>
</html>