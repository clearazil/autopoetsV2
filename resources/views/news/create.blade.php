@extends('templates.default')
@section('content')
<!-- Content -->
<section id="content">
    <div class="container_12">
    	<h1>Nieuw Nieuws... haha!</h1>
    	{!! Form::open(['route' => 'news.store', 'role' => 'form', 'class' => 'form-horizontal']) !!}
    		<div class="form-group">
    			{!! Form::label('title', 'Titel:', ['class' => 'control-label col-sm-3']) !!}
    			<div class="col-sm-7">
    				{!! Form::text('title', null, ['class' => 'form-control']) !!}
    			</div>
    			<div class="col-sm-offset-4">
    				<p class="text-danger">{{ $errors->first('title') }}</p>
    			</div>
    		</div>

    		<div class="form-group">
    			{!! Form::label('file', 'Afbeelding:', ['class' => 'control-label col-sm-3']) !!}


    			<div class="col-sm-7">
					<div class="input-group">
	                	<span class="input-group-btn">
	                    	<span class="btn btn-default btn-file">
	                        	Bestand&hellip; <input type="file" name="file" multiple>
	                    	</span>
	                	</span>
	                	<input type="text" class="form-control" readonly>
            		</div>
    			<div class="col-sm-offset-4">
    				<p class="text-danger">{{ $errors->first('file') }}</p>
    			</div>
    		</div>

    		<div class="form-group">
    			{!! Form::label('message', 'Bericht:', ['class' => 'control-label col-sm-3']) !!}
    			<div class="col-sm-7">
    				{!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    			</div>
    			<div class="col-sm-offset-4">
    				<p class="text-danger">{{ $errors->first('message') }}</p>
    			</div>
    		</div>

    		<div class="form-group">
                <div class="col-sm-offset-8">
                    {!! Form::submit('Verzenden', ['class' => 'btn btn-default']) !!}
                </div>
            </div>
    	{!! Form::close() !!}
    </div>
</section>
@stop
@section('javascript')
{!! HTML::script('js/bootstrap.file-input.js') !!}
@stop