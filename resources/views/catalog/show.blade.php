<html>
    <head>
        <title>View</title>
    </head>
    @extends('layouts.app')
    
    @section ('page_title') 
    View an Item in the Catalog 
    @stop 

    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="usrForms">
                        <h2 class = "usrForms-header text-center">Catalog Item: {{$item->name}}</h2>
                        <div class="usrForms-body justify-content-center">
                            <p>Price: ${{$item->price}} </p> 
                            <p>Item: Description: {{$item->description}}</p>
                            <p>Item Type: {{$item->type}}</p>
                            <p>Item sold by: {{$item->company}}</p>
                            

                            {!! Form::open(['method' => 'DELETE', 'url' => '/catalog/' .
                                $item->id]) !!}
                                <p class="text-center">
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                </p>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    @endsection
</html>
