@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-info">back</a>
<h1>{{$post->title}}</h1>
<small>{{$post->created_at}} by: {{$post->user->name}}</small>
<h3>{!!$post->body!!}</h3>
<br><br>
<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
@endsection