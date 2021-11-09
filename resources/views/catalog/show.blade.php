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
                        <div class="usrForms-body justify-content-center" style="text-align: center">
                            <p style="font-size: 20px"><strong>Price:</strong> ${{$item->price}} </p> 
                            <p style="font-size: 20px"><strong>Description:</strong> {{$item->description}}</p>
                            <p style="font-size: 20px"><strong>Type:</strong> {{$item->type}}</p>
                            <p style="font-size: 20px"><strong>Sold By:</strong> {{$item->company}}</p>
                            <p style="font-size: 20px"><strong>Sale Type:</strong> {{$item->sale_type}}</p>
                            

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
