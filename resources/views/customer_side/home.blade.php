@extends('include/header')
@section('body')
    <div class='container'>
        <h2>Our offer</h2>
        {{$cakes->links()}}
        <div class="home-kanban">
        @foreach($cakes as $cake)
            <div class="card" style="width:30rem; display:inline-block;">
                <img class="card-img-top" src="http://via.placeholder.com/300x180"/>
                <div class="card-body">
                    <h5>{{$cake->name}}</h5>
                    <p class="card-text"style="font-weight:500;">
                    @foreach($cake->categories()->get() as $cate)
                    <span class="badge badge-secondary"style="font-size:12px;">{{$cate->tag}}</span>
                    @endforeach
                    </p>
                    <p class="card-text" style="font-weight:500;">Price:{{$cake->price}}$</p>
                    @auth
                    {!! Form::open(['action'=>'CartController@store','method'=>'POST']) !!}                    
                    {!! Form::text('user_id', Auth::user()->get()->id, ['style'=>'display:none;']) !!}
                    {!! Form::text('cakes_id', $cake->id, ['style'=>'display:none;']) !!}
                    {!! Form::submit('Add to cart', ['class'=>'btn btn-primary btn-lg','style'=>'float:right;']) !!}                    
                    {!! Form::close() !!}
                    @endauth
                    @guest
                        <a href="/cart" class="btn btn-primary btn-lg" style="float:right;">Add to cart</a>
                    @endguest
                    <a href="" class="btn btn-secondary btn-lg"style="float:right;">Read more</a>
                </div>
            </div>
            {{--  <div class="kanban-content">
                <img width="360px;" height="480px" src="http://via.placeholder.com/360x480"/>
            </div>  --}}
        @endforeach
        
        </div>
    </div>
@endsection