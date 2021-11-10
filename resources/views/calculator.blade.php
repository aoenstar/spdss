@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
<!-- Styles -->
<style>
.error {color: #FF0000;}
        .container
        {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }   
        
        .card
        {
            background: white;
            width: 500px;
            margin: 10px;
            border-radius: 15px;
        }
        .card-image
        {
            
            height: 150px;
            width: 500px;
            margin-bottom:15px;
            background-size:cover;
            border-radius: 5%;
        }
        .image1
        {
            background-image: url('https://www.treehugger.com/thmb/1GDveahdHGkPO29NhBKuJPgniIw=/4368x2457/smart/filters:no_upscale()/house-with-solar-panels-174673282-ab883d486cb043a985efd2f5020381d0.jpg');
        }
        .image2
        {
            background-image: url('https://image.freepik.com/free-photo/tax-concept-1040-tax-form-with-calculator-desk-finance-time_359031-12451.jpg');
        }
        .image3
        {
            background-image: url('https://sunpower.maxeon.com/au/sites/default/files/styles/hero_image_1920_auto/public/2021-07/Sunpower-maxeon-common-problems-solar-panels-roof-issues_hero%20.jpg?itok=5Emei5i2');
        }
        .card h2
        {
           text-align: center;
        }
        .card p
        {
            height: 110px;
            padding-bottom: 20px;
            font-size :18px;
        }
        .background1
        {
            background-image: url('https://solarworksca.com/wp-content/uploads/2018/01/banner-finance-incentives.jpg');
            background-size: cover;
            background-position: center;
            height: 100px;
            font-size: 20px;
        }
        .background1 h1
        {
            padding-top: 30px;
            text-align: center;
            color: black;
            -webkit-text-fill-color: white;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: black;
        }
    </style>


    <body>
        <h1>Calculator</h1>

        <form method="POST" action="/calculator">
            <br />
            <div class=row>
                <img src="">
             <div class=row>
            First number:
            <input type="number" name="a" value="{{ $a ?? 0 }}" />
            <br />

            Second number:
            <input type="number" name="b" value="{{ $b ?? 0 }}" />
            <br />

            Third number:
            <input type="number" name="c" value="{{ $c ?? 0 }}" />
            <br />
             <p> Enter energy bills(kWh) for previous 3 months</p>
            <button type="submit">Calculate the result</button>
            
        </form>
         
         <p> Hi User <p>
            <br> <p> Thank you for submitting your information. <br> Our recommendation for solar system is as follows:</p>

        @if (isset($result))
            <p>Your Average Energy Usage:{{ $result }}</p>
            <br>
            <p>Recommended System Size:{{ $result2 }}</p>
        @endif
    </body>
</html>

@endsection