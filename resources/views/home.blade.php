@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <div class="usrForms-header">{{ __('Dashboard') }}</div>

                <div class="usrForms-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul style="display: flex; flex-direction: column;">
                    {{ __('You are logged in!') }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection