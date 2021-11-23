@extends('layouts.app')

@section('content')
    <!-- Styles -->
    <style>
        .container
        {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }   
        
        .card
        {
            background: white;
            width: 270px;
            margin: 10px;
            border-radius: 15px;
            text-align: center;
        }

        .card-image
        {
            height: 150px;
            width: 270px;
            margin-bottom:15px;
            background-color: white;
            background-size:cover;
            border-radius: 5%;
        }

        .card-image img
        {
            height: 150px;
            width: 270px;
            border-radius: 5%;
        }

        .card h2
        {
            padding: 10px;
        }

        .card p
        {
            height: 110px;
            padding-bottom: 20px;
        }

        .card a
        {
            background-color: black;
            color: white;
            padding: 15px 20px;
            display: block;
            text-align: center;
            margin: 20px 50px;
            text-decoration: none;
        }
        .card:hover
        {
            background-color: rgb(62,62,62);
            color: white;
            cursor: pointer;
            transform: scale(1.03);
            transition: all 1s ease;
        }

        .con
        {
            font-size: 50px;
            text-align: center;
            color: black;
            -webkit-text-fill-color: white;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: black;
        }
    </style>

    <br>
    <br>
    <br>
    <h1 class="con">Contacts</h1>
    <section class="container">
        <div class="card">
            <div class = "card-image"><img src="https://www.innogenonline.com/wp-content/uploads/2018/04/Innogen-logo-new.png"></div>
            <h2>Innogen Solar Electricity</h2>

            <p>Phone: +1 246 228-2107 <br><br> Email: sales@innogenonline.com  <br><br> Address: Harold Hoyte and Fred Gollop Media Centre,Fontabelle, St. Michael,Bridgetown, Barbados</p>
            <a href="https://www.innogenonline.com/">Contact Now</a>
        </div>
        <div class="card">
            <div class = "card-image"><img src="https://seisolarinc.com/wp-content/uploads/2020/10/seisolarinclogo.jpg"></div>
            <h2>Solar Energy Innovations Inc</h2>
            <p>Phone: +1 246-271-1330 <br><br> Email: office@simmons.bb  <br><br> Address: Lot C 16 Emerald Park, St Philip, Barbados</p>
            <a href="https://seisolarinc.com/">Contact Now</a>
        </div>
        <div class="card">
            <div class = "card-image"><img src="https://solarwattsystems.com/wp-content/themes/solarwatt_systemsinc/assets/img/sw_logo%20copy.png"></div>
            <h2>Solar Watt <br> Systems Inc</h2>
            <p>Phone: +1 246-622-1450 <br><br> Email: info@solarwattsystems.com  <br><br> Address: Barracks Hill No.1, Oistins BB15071, Barbados</p>
            <a href="https://solarwattsystems.com/">Contact Now</a>
        </div>
    </section>
@endsection