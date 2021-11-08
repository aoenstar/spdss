<html>
    <head>
        <title>View</title>
    </head>
    @extends('layouts.app')
    
    @section ('page_title') 
    View a testimonial
    @stop 

    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="usrForms">
                        <h2 class = "usrForms-header text-center">testimonial Item: {{$feedback->testimonial}}</h2>

                            {!! Form::open(['method' => 'GET', 'url' => '/feedback/' .
                                $feedback->testimonial]) !!}
                                <p class="text-center">
                                    {!! Form::submit('get', ['class' => 'btn btn-danger']) !!}
                                </p>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    @endsection
</html>
