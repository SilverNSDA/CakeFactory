@extends('Admin\header')
@section('body')
<a class="btn btn-secondary btn-lg" role="button" href=".">Back</a>
<a class="btn btn-primary btn-lg" role="button" href="./{{$cake->id}}/edit">Edit cake</a>
    @if(empty($cake))
        <h2><a>Cake not found</a></h2>
    @else
        <div class="table">
            <a class="name">{{$cake->name}}</a>
            <a><b class="tag">Type: </b><b class="context">{{$cake->base_type}}</b></a>
            <a><b class="tag">Price: </b><b class="context">{{$cake->price}}$</b></a>
            <a><b class="tag">Storage: </b><b class="context">{{$cake->in_storage}}</b></a>
            <a class="text"><b class="tag">Description: </b><b class="context">{{$cake->description}}</b></a>
        </div>
    @endif

    

@endsection