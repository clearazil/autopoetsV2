@extends('templates.default')
@section('content')
<section id="content">
    <div class="container_12">
    	<h1>Inloggen</h1>

    	{!! Form::open(['route' => 'login', 'role' => 'form', 'class' => 'form-horizontal']) !!}
    		<div class="form-group">
    			{!! Form::label('username', 'Gebruikersnaam:', ['class' => 'control-label col-sm-3']) !!}
    			<div class="col-sm-4">
    				{!! Form::text('username', null, ['class' => 'form-control']) !!}
    			</div>
    			<div class="col-sm-offset-4">
    				<p class="text-danger">{{ $errors->first('username') }}</p>
    			</div>
    		</div>

    		<div class="form-group">
    			{!! Form::label('password', 'Wachtwoord:', ['class' => 'control-label col-sm-3']) !!}
    			<div class="col-sm-4">
    				{!! Form::password('password', ['class' => 'form-control']) !!}
    			</div>
    			<div class="col-sm-offset-4">
    				<p class="text-danger">{{ $errors->first('password') }}</p>
    			</div>
    		</div>

    		<div class="form-group">
                <div class="col-sm-offset-6">
                    {!! Form::submit('Login', ['class' => 'btn btn-default']) !!}
                </div>
            </div>
    	{!! Form::close() !!}
    </div>
</section>
@stop