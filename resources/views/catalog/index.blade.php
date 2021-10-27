<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPDSS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('catalog.css')}}">
    <link rel="stylesheet"  href="{{ asset('css/nav.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    </script>


    <script>
        $(document).ready(function () {
            $('#catalogTable').DataTable();
        });

    </script>
</head>

<body class="antialiased">

    <div id="app">
        
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <h2>Dashboard</h2>
            <a href="{{ url('catalog')}}">Catalog</a>
            <a href="{{ route('guide')}}">Guide</a>
            <a href="{{ url('contacts')}}">Contacts</a>
            <a href="{{ url('aboutus')}}">AboutUs</a>
            <a href="{{ url('FAQ')}}">FAQ</a>
        </div>

        <nav style="background-color: transparent">
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

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0" style="--bg-opacity: 0;">
            <div style="background-color: white; padding-left: 20px; padding-right: 20px; padding-bottom: 10px;">
                <h1 style="text-align: center;">Catalog</h1>
                <a href="{{ route('catalog.create') }}">Add Item</a>
                @auth
                <table id="catalogTable">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1; ?>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->company}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>${{$item->price}}</td>
                            <td><a href="/catalog/<?php echo $id; ?>/edit">Edit</a></td>
                            <td><a href="/catalog/<?php echo $id; ?>">Details</a></td>
                        </tr>
                        <?php $id++; ?>
                        @endforeach
                    </tbody>
                </table>

                @endif

                @guest
                <div>Please login to view catalog.</div>
                @endif
            </div>
        </div>
    </div>

    <script src="{{ asset('js/sidebar.js')}}"></script>
</body>

</html>