@extends('layouts.app')

@section('content')
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

    <br>
    <br>
    <br>
    <div class="background1">
        <h1>Insurance Calculator</h1>
    </div>    
    <section class="container">
	<!-- hello--> 
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <h2 class = "usrForms-header text-center">Enter the estimated value of your home</h2>
                <div class="usrForms-body d-flex justify-content-center">
				<center>
					<h3>The approximate cost of insurance is based on rates from Consumer's Guarauntee Insurance.</h3>
						<script>

							var value = 0;
							var rate = 0.0035;
							var fee = 87.50;
							var total = value * rate + fee;
							
							function calculate()
							{
								let x = document.forms["homeValue"]["value"].value;
								if (x == "")
								{
									alert("Field cannot be empty or contain non-numeric data.");
									return false;
								}
								
								let input = document.getElementById("value").value;
								alert('The estimated cost of your insurance would be: $' + (input * rate + fee));
							}
						</script>
						
						<form name="homeValue" action="/insurance"  onsubmit="calculate()">
							Enter value: <input id="value" type="text" name="value">
							<br>
							<p> The formula used to calculate the insurance cost is: <br> Value of your home * 0.0035 (Constant Insurance Rate) + 87.50 (Government Stamp Duty Fee)</p>
							<input class="btn btn-primary" type="submit" name="submit" value="Submit"> 
						</form>
					

				
 
					</center>
                </div>
            </div>
        </div>
    </div>
</div>    
    </section>

@endsection


