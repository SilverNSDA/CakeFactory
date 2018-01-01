@extends('Admin\header')
@section('body')
<a class="btn btn-secondary btn-lg" role="button" href=".">Back</a>
<a class="btn btn-primary btn-lg" role="button" href="./{{$cate->id}}/edit">Edit cate</a>
    @if(empty($cate))
        <h2><a>Cake not found</a></h2>
    @else
    
        <div class="table">
            
            <a class="name">{{$cate->name}}</a>
            <a><b class="tag">Type: </b><b class="context">{{$cate->base_type}}</b></a>
            <a><b class="tag">Price: </b><b class="context">{{$cate->tag}}$</b></a>
            <a class="text"><b class="tag">Description: </b><b class="context">{{$cate->description}}</b></a>
            {!! Form::open(['action'=>['CakesController@destroy',$cate->id],'method'=>'POST','class'=>'pull=right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-lg']) !!}
            {!! Form::close() !!}
        </div>
        
        
    @endif

    

@endsection