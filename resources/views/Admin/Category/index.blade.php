@extends('Admin\header')
@section('body')
    <h2>Categories list</h2>
    <div class="div-space"></div>
    <p class=""><a class="btn btn-primary btn-lg" role="button" href="categories/create">New category</a></p>
    @if(count($cates)>0)
        <div class="col-12" style="position:relative; bottom: 20px;">
            {{$cates->links()}}
        </div>
        <div class="kanban">
                @foreach($cates as $cate)
                <div class="tag-border" style="width:200px; height:100px;">
                    <a style="font-size:18px;">{{$cate->name}}</a><br>
                    <a style="font-size:10px; font-weight:400;line-height:12px;">{{$cate->tag}}</a>
                    @if($cate->description)
                    <span class="description">{{$cate->description}}</span>
                    @endif
                    <p class="bottom"><a class="btn btn-secondary" role="button" href="categories/{{$cate->id}}">View details »</a></p>
                </div>
                @endforeach
        </div>
        
    @else
        <span class="error"><i class="fa fa-exclamation-triangle"></i> NO category created</span>
    @endif
@endsection

