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
    <link rel="stylesheet"  href="{{ asset('css/forms.css')}}">
    <link rel="stylesheet"  href="{{ asset('css/nav.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    </script>


    <script>
        $(document).ready(function () {
            $('#catalogTable').DataTable();
        });

    </script>
    <style>
        .hide{
            display:none;
        }
        .box{
            border: 1px black solid;
        }
        .boxb a{
            border: 1px blue solid;
        }
        </style>
</head>

<body class="antialiased">

    <div id="app">
        
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <h2>Dashboard</h2>
            <a href="{{ url('/catalog')}}">Catalog</a>
            <a href="{{ url('/insurance')}}">Insurance</a>
            <a href="{{ url('/Guide')}}">Guide</a>
            <a href="{{ url('/contacts')}}">Contacts</a>
            <a href="{{ url('/aboutus')}}">About us</a>
            <a href="{{ url('/FAQ')}}">FAQ</a>
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
                <h1 style="text-align: center;">Solar Panel System<br>Catalog</h1>
                @if (Auth::user()->role == 'SPDSSAdministrator')
                    <a class="btn" style="padding: 5px 10px;" href="{{ route('catalog.create') }}" style="position:absolute; right:30%;">Add Item</a>
                @endif
                <br>
                <br>
                <div>
                    <div>Filter by</div>
                    <a class="types box" style="cursor: pointer">Item Type</a>
                    <div class="types2 hide boxb">
                        <a href ="{{url('catalog/filter/type/Battery')}}">Battery</a>
                        <a href ="{{url('catalog/filter/type/Inverter')}}">Inverter</a>
                        <a href ="{{url('catalog/filter/type/System')}}">System</a>
                        <a href ="{{url('catalog/filter/type/Solar-Panel')}}">Solar Panel</a>
                    </div>

                    <a class="sale_type box" style="cursor: pointer">Sale Type</a>
                    <div class="stype hide boxb">
                        <a href ="{{url('catalog/filter/sale_type/Residential')}}">Residential</a>
                        <a href ="{{url('catalog/filter/sale_type/Commercial')}}">Commercial</a>
                    </div>

                    <a class="company box" style="cursor: pointer">Solar Panel System Company</a>
                    <div class="com2 hide boxb">
                        <a href ="{{url('catalog/filter/company/Williams Solar')}}">Williams Solar</a>
                        <a href ="{{url('catalog/filter/company/Solar Energy Innovations Inc')}}">Solar Energy Innovations Inc</a>
                        <a href ="{{url('catalog/filter/company/Innogen Solar Electricity')}}">Innogen Solar Electricity</a>
                        <a href ="{{url('catalog/filter/company/Solar Watt Systems Inc')}}">Solar Watt Systems Inc</a>
                    </div>

                    <div class="boxb"><a style="cursor: pointer" href ="{{url('catalog')}}">Clear</a></div>
                </div>
                @auth
                <table id="catalogTable">
                    <thead>
                        <tr>
                            <th>Solar Panel System Company</th>
                            <th>Solar Panel System Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            @if (Auth::user()->role == 'SPDSSAdministrator')
                                <th></th>
                            @endif
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                       
                        <tr class="entries">
                            <td>{{$item->company}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>${{$item->price}}</td>
                            
                            @if (Auth::user()->role == 'SPDSSAdministrator')
                                <td>
                                {!! Form::open(['method' =>'get', 'action' =>
                                ['App\Http\Controllers\Catalog\CatalogController@edit',
                                $item->id]]) !!}
                                {!! Form::submit('Edit', ['class' => 'admin-btn']) !!}
                                {!! Form::close() !!}
                                </td>
                            @endif
                            <td>
                                {!! Form::open(['method' =>'get', 'action' =>
                                ['App\Http\Controllers\Catalog\CatalogController@show',
                                $item->id]]) !!}
                                {!! Form::submit('Show', ['class' => 'admin-btn']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        <div class="end"></div>
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
    <script>
        let dropdown = document.querySelector(".types")
        let typesList = document.querySelector(".types2")
        dropdown.addEventListener('click', e =>{
            typesList.classList.toggle("hide")
        })
        let sale_type = document.querySelector(".sale_type")
        let catList = document.querySelector(".stype")
        sale_type.addEventListener('click', e =>{
            catList.classList.toggle("hide")
        })
        let company = document.querySelector(".company")
        let comList = document.querySelector(".com2")
        company.addEventListener('click', e =>{
            comList.classList.toggle("hide")
        })
    </script>
</body>

</html>