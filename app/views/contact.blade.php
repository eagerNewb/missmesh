
{{ Form::open(array('url'=>'subscribe', 'class'=>'form-signup', 'id'=>'contact')) }}
		{{ Form::text('name', null, 'placeholder'=>'Name')}}
	    {{ Form::text('email', null, array('class'=>'input-block-level email', 'placeholder'=>'Email Address')) }}
		{{ Form::textarea('textarea',null)}}
	    {{ Form::submit('Submit!', array('class'=>'subscribe'))}}
{{ Form::close() }}
