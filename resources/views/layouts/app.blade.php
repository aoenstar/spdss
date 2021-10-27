<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPDSS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forms.css')}}" rel="stylesheet" >
    <link href="{{ asset('css/nav.css')}}" rel="stylesheet" >
</head>
<body>

    <div id="app">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <h2>Dashboard</h2>
            <a href="{{ url('/catalog')}}">Catalog</a>
            <a href="{{ route('catalog.create') }}">Add Catalog Item</a>
            <a class="nav-link" href="{{ route('catalog.show', 1) }}">View Catalog Item</a>
            <a class="nav-link" href="{{ route('catalog.edit', 1) }}">Edit Catalog Item</a>
            <a href="{{ url('/guide')}}">Guide</a>
            <a href="{{ url('/contacts')}}">Contacts</a>
            <a href="{{ url('/aboutus')}}">AboutUs</a>
            <a href="{{ url('/FAQ')}}">FAQ</a>
        </div>
        <nav style="height: 0;">
            <div class="logo">
                <button id="openHamBtn" class="openbtn" onclick="openNav()">☰</button>  
                <a href="{{ url('/home') }}" class="navbar toggler text-sm text-gray-700 underline">
                    <h1>Home</h1>
                </a>
            <div style="position:absolute;top:20px;left:45%; font-size:x-large;"><a href="">SPDSS</a></div>
            </div>
            <ul class="mainMenu">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a  class="nav" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav" href="{{ route('profile')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <div>
                            <a class="nav" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/sidebar.js')}}"></script>
</body>
</html>
