extends('welcome')
@section('content')
	<h1>Contact Us</h1>
	<p>Please Contact us by sending a messaging using the form below : </p>
	{{Form::open(array('url'=>'contact'))}}
	{{Form::label('Subject')}}
	{{Form::text('subject','Enter your message')}}
	<br/>
	{{Form::label('Message')}}
	{{Form::textarea('message','Enter your Message')}}
	<br />
	{{Form::submit()}}
	{{Form::close()}}

@stop