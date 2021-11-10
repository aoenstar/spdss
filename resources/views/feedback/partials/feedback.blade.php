        <div class="form-group row m-2">

            <div class="col-md-6">
                {!! Form::text('id', $feedback->id, ['placeholder' =>
                    'Feedback ID', 'disabled' => 'disabled'], ['class' => 'col-md-6 form-control'] ) !!}
            {!! Form::label('id', 'Feedback ID:', array('class' => 'input-cat-id')) !!}
            </div>
        </div>

        <div class="form-group row m-2">

            <div class="col-md-6">
                {!! Form::text('testimonial', $feedback->testimonial, ['placeholder' =>
                    'Please enter Your testimonial here...'], ['class' => 'form-control']) !!}
            {!! Form::label('testimonial', 'Testimonial:') !!}
            </div>
            
            @error('testimonial')
                <div style="color: red">{{ $message }}</div>
            @enderror
        </div>