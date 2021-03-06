@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <!--Restricting Edit/Delete functionality to owner or admin-->
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id or Auth::user()->role === 'admin')
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection