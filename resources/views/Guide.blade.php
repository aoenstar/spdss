<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"  href="{{ asset('css/nav.css')}}">
</head>
<body>
    <div id="app">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <h2>Dashboard</h2>
            <a href="{{ url('/catalog')}}">Catalog</a>
            <a href="{{ url('/Guide')}}">Guide</a>
            <a href="{{ url('/FAQ')}}">FAQ</a>
        </div>

        <nav style="background-color: transparent">
            <div class="logo">
                <button id="openHamBtn" class="openbtn" onclick="openNav()">☰</button>  
            </div>
            <div style="position:absolute;top:20px;left:45%; font-size:x-large;"><a href="{{ url('/home') }}" style=" text-decoration: none; color: white;">SPDSS</a></div>
            <ul class="mainMenu">
                <!-- Authentication Links -->
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav" href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a class="nav" href="{{ route('login') }}">Login</a>
                    </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endif
                @endif
            </ul>
        </nav>

        <h1>User Guide</h1>

    </div>
    
    <script src="{{ asset('js/sidebar.js')}}"></script>

</body>
</html>