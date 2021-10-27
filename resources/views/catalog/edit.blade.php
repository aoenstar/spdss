@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <h2 class = "usrForms-header text-center">Edit an Item in the Catalog</h2>
                <div class="usrForms-body d-flex justify-content-center">
                    {!! Form::open(['method' => 'PUT', 'url' => '/catalog/' .
                                $catalog->id]) !!}
                        @include('catalog.partials/catalog', $catalog)

                        <p class="text-center">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                        </p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection