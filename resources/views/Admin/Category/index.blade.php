@extends('Admin\header')
@section('body')
    <h2>Cakes list</h2>
    <div class="div-space"></div>
    @if(count($cates)>0)
        <div class="col-12" style="position:relative; bottom: 20px;">
                <p class=""><a class="btn btn-primary btn-lg" role="button" href="categories/create">New cate</a></p>
            {{$cates->links()}}
        </div>
        <div class="kanban">
                @foreach($cates as $cate)
                <div class="tag-border" style="width:200px; height:100px;">
                    <h2>{{$cate->name}}</h2>
                    <small>{{$cate->tag}}</small>
                    @if($cate->description)
                    <span class="description">{{$cate->description}}</span>
                    @endif
                    <p class="bottom"><a class="btn btn-secondary" role="button" href="categories/{{$cate->id}}">View details »</a></p>
                </div>
                @endforeach
        </div>
        
    @else
        <span class="error"><i class="fa fa-exclamation-triangle"></i> NO cates created</span>
    @endif
@endsection

