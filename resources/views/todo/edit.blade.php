@extends('layouts.app')

@section('content')
	<h1>Create Todo</h1>
	{!! Form::open(['action' => ['TodosController@update', $todo->id ], 'method'=>'POST']) !!} 
	{{ csrf_field() }}
    	<div class="form-group">
		    <div class="form-group">
		    	<label for="">Text</label>
		    	<input type="text" name="text" value="{{ $todo->text }}">
		    </div>
		    <div class="form-group">
		    	<label for="">Body</label>
		    	<textarea name="body" id="" cols="30" rows="10">{{ $todo->body }}</textarea>
		    </div>
		    <div class="form-group">
		    	<label for="">Due</label>
		    	<input type="text" name="due" value="{{ $todo->due }}">
		    </div>
		    <div class="form-group">
		    	
		    	<input type="submit" name="Submit" value="Update">
		    </div>

		    
		</div>
	{!! Form::close() !!}

@endsection