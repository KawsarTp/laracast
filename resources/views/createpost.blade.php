@extends('layouts.master')


@section('content')

<div class="col-lg-8">
	<h1>Create Your Post</h1>
	@include('layouts.error')
<form method="post" action="/post">
	
	{{csrf_field()}}

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control"></textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>

</form>
</div>


@endsection