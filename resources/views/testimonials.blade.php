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
      
      height: 280px;
      width: 500px;
      margin-bottom:5px;
      background-size:cover;
      border-radius: 5%;
  }

  .image1
  {
      background-image: url('https://www.boardeffect.com/wp-content/uploads/2018/03/Balancing-Board-Transparency-With-Privacy.jpg');
  }

  .image2
  {
      background-image: url('https://www.providesupport.com/blog/wp-content/uploads/2018/03/4-Dimensions-of-Customer-Trust.jpg');
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
    
    .test {
        text-align: center;
            color: black;
    }
</style>

<br>
<br>
<br>
<div class="con">
  <h1>Testimonials</h1>
</div>    
<section class="container">
<!-- hello--> 
  <div class="card">
      <h2>Why leave a testimonial?</h2>
      <div class = "card-image image2"></div>
      <p>An honest testimonial from you based on your expriance can help prove legitimacy to other potentail users.</p>
  </div>

  <div class="card">
      <h2>Which testimonials are shown?</h2>
      <div class = "card-image image1"></div>
      <p>All registered customer testimonials which are submitted are shown for full transparency.</p>          
  </div>

  <div class="card">
      <h2>Last customer testimonial posted</h2>
              
      @foreach ($entry as $entries)
      <div>
          {{ $entries->testimonial }}
      </div>
      @stop

     <!-- <p class = "test">{{ $entry->testimonial }}</p> -->
  </div>
</section>
@endsection