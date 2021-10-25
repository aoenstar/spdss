        <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right">{!! Form::label('id', 'Catalog ID:') !!}</label>

            <div class="col-md-6">
                {!! Form::text('id', $catalog->id, ['placeholder' =>
                    'Catalog ID', 'disabled' => 'disabled'], ['class' => 'col-md-6 form-control'] ) !!}
            </div>
            
        </div>

        <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right">{!! Form::label('name', 'Name:') !!}</label>

            <div class="col-md-6">
                {!! Form::text('name', $catalog->name, ['placeholder' =>
                    'Enter the name of the solar system (e.g. 2kw System)'], ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right">{!! Form::label('description', 'Description:') !!}</label>

            <div class="col-md-6">
            {!! Form::text('description', $catalog->description, ['placeholder' =>
                'Enter the description of the solar system (e.g. )'] ) !!}
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right">{!! Form::label('company', 'Company:') !!}</label>

            <div class="col-md-6">
            {!! Form::text('company', $catalog->company, ['placeholder' =>
                'Enter the company name (e.g. Innogen)'] ) !!}
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-md-4 col-form-label text-md-right">{!! Form::label('price', 'Price:') !!}</label>

            <div class="col-md-6">
            {!! Form::text('price', $catalog->price, ['placeholder' =>
                'Enter the price of the solar system (e.g. 100000)'] ) !!}
            </div>
        </div>