@extends('layouts.master')


@section('content')

<div class="col-lg-8">
	<h3>Your Post Show Here</h3>

	<h1>{{$id->title}}</h1>

	<p>{{$id->body}}</p>
</div>

@endsection