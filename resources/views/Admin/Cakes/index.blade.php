<?php
    $objs = $cakes;
    $type ='cakes';
    $Type ='Cakes';
    
?>

@extends('Admin\template\index')
@section('box')

    @foreach($objs as $obj)
    <div class="col-4 col-lg-4 tag-border">
        <h2>{{$obj->name}}</h2>
        @if($obj->description)
        <p>{{$obj->description}}</p>
        @endif
        <p class="bottom"><a class="btn btn-secondary" role="button" href="{{$type}}/{{$obj->id}}">View details »</a></p>
    </div>
@endforeach

@endsection
