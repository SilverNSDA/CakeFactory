@extends('Admin\header')
@section('body')
    <h2>Cakes list</h2>
    <div class="div-space"></div>
    @if(count($cakes)>0)
        <div class="col-12" style="position:relative; bottom: 20px;">
                <p class=""><a class="btn btn-primary btn-lg" role="button" href="cakes/create">New cake</a></p>
            {{$cakes->links()}}
        </div>
        <div class="kanban">
                @foreach($cakes as $cake)
                <div class="tag-border" style="width:200px; height:100px;">
                    <h2>{{$cake->name}}</h2>
                    <small>{{$cake->base_type}}</small>
                    @if($cake->description)
                    <span class="description">{{$cake->description}}</span>
                    @endif
                    <p class="bottom"><a class="btn btn-secondary" role="button" href="cakes/{{$cake->id}}">View details »</a></p>
                </div>
                @endforeach
        </div>
        
    @else
        <span class="error"><i class="fa fa-exclamation-triangle"></i> NO cakes created</span>
    @endif
@endsection

