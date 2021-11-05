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
    
    .con
        {
            font-size: 40px;
            text-align: center;
            color: black;
            -webkit-text-fill-color: white;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: black;
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
    
    #spdssreview
  {
    margin-left: 15%;
  }
    
    .btn-block {
      margin-top: 20px;
      text-align: center;
        width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      font-size: 16px;
      cursor: pointer;
        margin: auto;
      }
    </style>

    <br>
    <br>
    <br>
    <div class="con">
        <h1>Feedback</h1>
    </div>    
    <section class="container">
	<!-- hello--> 
        <div class="card">
        <h1>Registered Customer Feedback Form</h1>
        <p>Please take a few minutes to give us feedback about our service by providing us with a testimonial of your experience. The infornation you provide would help us determaine if we where successful in the creation of a solar panel suggestion system. We thank you for your participation.</p>
            
            <br>
            <h2>Leave your testimonial here</h2>
            {!! Form::open(['method' => 'post', 'route' => 'feedback.store']) !!}
            @include('catalog.partials/feedback', $feedback)
            <p>
                {!! Form::submit('Add Item') !!}
            </p>
            {!! Form::close() !!}
        <!--<h2>Leave your testimonial here</h2>
              
      <textarea id="spdssreview" name="spdssreview" rows="4" cols="50">
        Leave your written review and any suggestions here...
        </textarea>
      <div class="btn-block">
          <button type="submit" href="/">Send</button> -->
            </div>
    </section>
    
@endsection


