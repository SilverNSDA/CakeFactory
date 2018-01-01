@extends('Admin\header')
@section('body')
    <h2>Chefs list</h2>
    <div class="div-space"></div>
    <p class=""><a class="btn btn-primary btn-lg" role="button" href="chefs/create">New chef</a></p>
    @if(count($chefs)>0)
        <div class="col-12" style="position:relative; bottom: 20px;">
            {{$chefs->links()}}
        </div>
        <div class="kanban">
                @foreach($chefs as $chef)
                <div class="tag-border" style="width:300px; height:100px;">
                    <h2>{{$chef->title}} {{$chef->Firstname}} {{$chef->Middlename}} {{$chef->Lastname}}</h2>
                    <small>{{$chef->Mobile}}</small>
                    <a>{{$chef->Address1}}</a>
                    <a>{{$chef->Address2}}</a>
                    <p class="bottom"><a class="btn btn-secondary" role="button" href="chefs/{{$chef->id}}">View details »</a></p>
                </div>
                @endforeach
        </div>
        
    @else
        <span class="error"><i class="fa fa-exclamation-triangle"></i> NO chef created</span>
    @endif
@endsection

