@extends('Admin\header')
@section('body')
    <h2>Cakes list</h2>
    @if(count($cakes)>0)
        <div  style="display:block;">
            @foreach($cakes as $cake)
                <div class="col-6 col-lg-4">
                    <h2>{{$cake->name}}</h2>
                    @if($cake->description)
                    <p>{{$cake->description}}</p>
                    @endif
                    <p><a class="btn btn-secondary" role="button" href="cakes/{{$cake->id}}">View details »</a></p>
                </div>
            @endforeach
        </div>
        
    @else
        <p> NO cakes created</p>
    @endif
@endsection