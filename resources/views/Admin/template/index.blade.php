@extends('Admin\header')
@section('body')
    <h2>{{$Type}} list</h2>
    <div class="div-space"></div>
    @if(count($objs)>0)
        <div class="col-12" style="position:relative; bottom: 20px;">
            {{$objs->links()}}
        </div>
        <div  style="min-height: 200px;">
            @yield('box')
         
            
        </div>
        
        
    @else
        <p> NO {{$type}} created</p>
    @endif
@endsection