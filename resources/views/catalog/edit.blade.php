<?php 
    $catalogList = $catalog->pluck('type')->toArray();
    $options = $catalogList;
    $options = [
        '0' => '-- Select One --',
        'Battery' => 'Battery',
        'System' => 'System',
        'Inverter' => 'Inverter',
        'Solar Panel' => 'Solar Panel'
    ];

    if ($catalogList[$catalog->id] == $options['Battery'] ||
        $catalogList[$catalog->id] == $options['System'] || 
        $catalogList[$catalog->id] == $options['Inverter'] ||
        $catalogList[$catalog->id] == $options['Solar Panel'])
    {
        $selected = $catalogList[$catalog->id];
    }
    else
    {
        $selected = 0;
    }
?>

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="usrForms">
                <h2 class = "usrForms-header text-center">Edit an Item in the Catalog</h2>
                <div class="usrForms-body d-flex justify-content-center">
                    {!! Form::open(['method' => 'put', 'route' => ['catalog.update', $catalog->id]]) !!}
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