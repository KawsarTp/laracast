@extends('layouts.master')


@section('content')


  @foreach($posts as $post)

   @include('postarea')

  @endforeach


@endsection