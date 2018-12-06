@extends('layouts.app')

@section('body')
    <h1> {{$heading}} </h1>
    <p>
    @if(count($para)>0)
        <ul class="list-group">
            @foreach ($para as $item)
                <li class="list-group-item">{{$item}}</li>    
            @endforeach
        </ul>
    @endif
    </p>
@endsection 