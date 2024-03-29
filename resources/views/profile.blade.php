@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <div class="usrForms-header" style="padding-bottom:1rem;">{{ __('User Information') }}</div>

                <div class="usrForms-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<div>Name: {{ Auth::user()->name }}</div>
					<div>Email: {{ Auth::user()->email }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection