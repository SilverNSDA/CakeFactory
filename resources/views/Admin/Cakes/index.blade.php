@extends('Admin/header')
@section('body')
    <h2>Cakes list</h2>
    @if(count($cakes)>0)
        @foreach($cakes as $cake)
            <div class="well">
                <h4 href="{{$cake->id}}">{{$cake->name}}</h4>
                <p>{{$cake->in_storage}}</p>
                <p>{{$cake->price}}</p>
            </div>
        @endforeach

    @else
        <p> NO cakes created</p>
    @endif
@endsection