@extends('Admin\header')
@section('body')
<div class="well" style="font-weight:500;">
    @if(empty($cake))
        <h2><a>Cake not found</a></h2>
    @else
    
        <h1><a>{{$cake->name}}</a></h1>
        <a>Type: {{$cake->base_type}}</a><br>
        <a>Price: {{$cake->price}}</a><br>
        <a>Storage: {{$cake->in_storage}}</a><br>
        <a>Description: {{$cake->description}}</a><br>
    @endif

    <a href="." class="btn btn-default">Back</a>
</div>
@endsection