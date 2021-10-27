    <head>
        <title>Create</title>
       
    </head>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <h2 class = "usrForms-header text-center">Add an Item to the Catalog</h2>
                <div class="usrForms-body d-flex justify-content-center">
                    {!! Form::open(['url' => '/catalog']) !!}
                        @include('catalog.partials/catalog', $catalog)

                        <p class="text-center">
                            {!! Form::submit('Add Item', ['class' => 'btn btn-primary']) !!}
                        </p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection