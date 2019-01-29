@extends('layouts.app')

@section('content')
	<a class="btn btn-default" href="/">Go back</a>
	<h1>{{ $todo->text }} <span class="label label-danger">{{ $todo->due }}</span></h1>

	<p>{{ $todo->body }}</p>

	<br><br>

	<a href="{{$todo->id}}/edit" class="btn btn-default">edit</a>

@endsection