    <head>
        <title>Create</title>
       
    </head>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <h2 class = "usrForms-header text-center">Post a Report to SPDSS</h2>
                <div class="usrForms-body d-flex justify-content-center">
                    {!! Form::open((['method' => 'post', 'route' => 'feedback.store'])) !!}
                        @include('feedback.partials/feedback', $feedback)

                        {!! Form::hidden('type', "report") !!}
                        <p class="text-center">
                            {!! Form::submit('Post', ['class' => 'btn btn-primary']) !!}
                        </p>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection