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

    <br>
    <br>
    <br>
    <div class="background1">
        <h1>About Us</h1>
    </div>    
    <section class="container">
        <div class="card">
            <h2>Decison Support System</h2>
            <div class = "card-image image1"></div>
            <p>A Decision Support System to help individuals and businesses make decisions about the type of Solar Power System that they can afford to install in their homes or offices.One goal of our website is to recommend an appropriate solar power system to suit your needs by working closely alongside Solar Power companies here in Barbados.</p>
        </div>

        <div class="card">
            <h2>Price Calculator</h2>
            <div class = "card-image image2"></div> 
            <p>Our price calculator accurately determines the cost of your desired Solar Power System including auxillary costs, individual cost of parts and insurance.</p>          
        </div>

        <div class="card">
            <h2>Catalog</h2>
            <div class = "card-image image3"></div>         
            <p>A database of all of our current available systems.</p>
        </div>
    </section>
    <h1 style="text-align: center">Get Your Solar System Today!</h1>
@endsection


