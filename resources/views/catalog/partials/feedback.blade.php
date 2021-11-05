<p>
{!! Form::label('testimonial', 'Testimonial:') !!}
{!! Form::textarea('testimonial', $feedback->testimonial,
['placeholder' => 'Leave your written review and any suggestions here...'] ) !!}
</p>
@error('testimonial')
 <div>{{ $message }}</div>
@enderror