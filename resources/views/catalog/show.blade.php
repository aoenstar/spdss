<html>
    <head>
        <title>View</title>
    </head>
    @extends('layouts.app')

    @section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="usrForms">
                        <h2 class = "usrForms-header text-center">Viewing Catalog Item: {{$item->id}}</h2>
                        <div class="usrForms-body justify-content-center">
                            <p>Item Name: {{$item->name}}</p>
                            <p>Price: ${{$item->price}} </p> 
                            <p>Item: Description: {{$item->description}}</p>
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