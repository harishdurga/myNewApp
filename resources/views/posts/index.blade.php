@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@foreach($posts as $post)
<div class="well">
<div class="row">
	<div class="col-sm-4 col-md-4">
		<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
	</div>
	<div class="col-sm-8 col-md-8">
		<h2><a href="/posts/{{$post->id}}">{{$post->title}}</h2></a><small>{{$post->created_at}} by: {{$post->user->name}}</small>
<p>{!!$post->body!!}</p>
	</div>
</div>

</div>
@endforeach
@endsection