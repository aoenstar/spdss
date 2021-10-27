        <div class="form-group row m-2">

            <div class="col-md-6">
                {!! Form::text('id', $catalog->id, ['placeholder' =>
                    'Catalog ID', 'disabled' => 'disabled'], ['class' => 'col-md-6 form-control'] ) !!}
            {!! Form::label('id', 'Catalog ID:', array('class' => 'input-cat-id')) !!}
            </div>
            
        </div>

        <div class="form-group row m-2">

            <div class="col-md-6">
                {!! Form::text('name', $catalog->name, ['placeholder' =>
                    'Enter the name of the solar system (e.g. 2kw System)'], ['class' => 'form-control']) !!}
            {!! Form::label('name', 'Name:') !!}
            </div>
        </div>

        <div class="form-group row m-2">

            <div class="col-md-6">
            {!! Form::text('description', $catalog->description, ['placeholder' =>
                'Enter the description of the solar system (e.g. )'] ) !!}
            {!! Form::label('description', 'Description:') !!}
            </div>
        </div>

        <div class="form-group row m-2">

            <div class="col-md-6">
            {!! Form::text('company', $catalog->company, ['placeholder' =>
                'Enter the company name (e.g. Innogen)'] ) !!}
            {!! Form::label('company', 'Company:') !!}
            </div>
        </div>

        <div class="form-group row m-2">

            <div class="col-md-6">
            {!! Form::text('price', $catalog->price, ['placeholder' =>
                'Enter the price of the solar system (e.g. 100000)'] ) !!}
            {!! Form::label('price', 'Price:') !!}
            </div>
        </div>