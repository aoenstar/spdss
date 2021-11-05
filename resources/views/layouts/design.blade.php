<!doctype html>
<html>
<head>
 <title>@yield('page_title')</title>
</head>
<body>
<header>
 <h1>SPDSS Catalog</h1>
</header>
<nav>
 <a href="{{ url('/home') }}">Home</a>
 <a href="{{ url()->previous() }}">Back</a>
</nav>
<div>Welcome: {{ auth::user()->name }}<div>
<section>
 @yield('page_content')
</section>
<footer>
 &copy; 2021 COMP3370 CREW
</footer>
</body>
</html>
