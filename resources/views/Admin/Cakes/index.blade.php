@extends('Admin\header')
@section('body')
    <h2>Cakes list</h2>
    <div class="div-space"></div>
    @if(count($cakes)>0)
        <div class="col-12" style="position:relative; bottom: 20px;">
                <p class=""><a class="btn btn-primary" role="button" href="cakes/new">New cake</a></p>
            {{$cakes->links()}}
        </div>
        <div class="kanban">
                @foreach($cakes as $cake)
                <div class="tag-border" style="width:200px; height:100px;">
                    <h2>{{$cake->name}}</h2>
                    @if($cake->description)
                    <a>{{$cake->description}}</a>
                    @endif
                    <span class="description">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</span>
                    <p class="bottom"><a class="btn btn-secondary" role="button" href="cakes/{{$cake->id}}">View details »</a></p>
                </div>
                @endforeach
        </div>
        
    @else
        <span class="error"><i class="fa fa-exclamation-triangle"></i> NO cakes created</span>
    @endif
@endsection

