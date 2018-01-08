

@extends('include/header')
@section('body')
    <div class="jumbotron">
        <h1 class="display-4">{{$cake->name}}</h1>
        <p class="card-text"style="font-weight:500;">
        @foreach($cake->categories()->get() as $cate)
            <span class="badge badge-secondary"style="font-size:12px;">{{$cate->tag}}</span>
        @endforeach
        </p>
        <p class="lead">{{$cake->description}}</p>
        <hr class="my-4">
        <p>Price: {{$cake->price}}</p>
        @if($cake->in_storage>0)
        <p>Status: <span class="badge badge-success">Available</span></p>
        @else
        <p>Status: <span class="badge badge-danger">Sold out</span></p>
        @endif
    </div>
    <ul class="list-unstyled la">
        @foreach($cake->comments()->orderBy('updated_at','desc')->get() as $comment)
        <li class="media"style="position: relative;">
            <img class="mr-3" src="http://via.placeholder.com/64x64" title="{{$comment->user()->get()[0]->name}}">
            <div class="media-body">
            <h5 class="mt-0 mb-1">{{$comment->title}}</h5>
            <p>{{$comment->body}}</p>
            <small>Created at:{{$comment->created_at}}</small>
            <small>Last update: {{$comment->updated_at}}</small>
            </div>
        </li>
        @endforeach
    </ul>
@endsection