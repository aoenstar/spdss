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

        .cardc
        {
            position: absolute;
            display: none;
            background: white;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
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

        .card h3
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
    
    .btn {
      
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

      .darken {
        position: fixed;
    background-color: rgba(0, 0, 0, 0.80);
    display: none;
    top:0;
    bottom: 0;
    right: 0;
    left: 0;
      }
    </style>

    <br>
    <br>
    <br>
    <div class="con">
        <h1>Feedback</h1>
    </div>    
    <section class="container">
	<div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0" style="--bg-opacity: 0;">
            <div style="background-color: white; padding-left: 20px; padding-right: 20px; padding-bottom: 10px;">
            <div class = "darken">
            
            </div>
                <h1 style="text-align: center;">RC Testimonials</h1>
                <br>
                

<table id="feedbackTable">
                    <thead>
                        <tr>
                            <th>List of all current Testimonials</th>
                            
                            @if (Auth::user()->role == 'SPDSSAdministrator')
                                <th></th>
                            @endif
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($feedback as $item)
                        <tr>
                            <td>{{$item->testimonial}}</td>
                            
                            @if (Auth::user()->role == 'SPDSSAdministrator')
                            
                            <td>
                                {!! Form::open(['method' =>'delete', 'action' =>
                                ['App\Http\Controllers\Feedback\FeedbackController@destroy',
                                $item->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'admin-btn', 'onclick' => 'ConfirmDelete()']) !!}
                                {!! Form::close() !!}
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        </div>
    </section>
    
@endsection



<script>
        $(document).ready(function () {
            $('#feedbackTable').DataTable();
        });


    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x){
            return true;
        }
        
        else
        {
            event.preventDefault();
            return false;
        }
        
    }
    </script>

