@extends('Admin\header')
@section('body')
<a class="btn btn-secondary btn-lg" role="button" href=".">Back</a>
<a class="btn btn-primary btn-lg" role="button" href="./{{$chef->id}}/edit">Edit chef</a>
    @if(empty($chef))
        <h2><a>Cake not found</a></h2>
    @else
    <a href="#comfirm"class="del-button btn btn-danger btn-lg"> Delete </a>
    <div id='comfirm' class="del-comfirm">
        <a>Are you sure to delete?</a>
        <div>
            <a class="cancle-button btn btn-secondary pull-right btn-lg" href="#">Cancel</a>
            {!! Form::open(['action'=>['ChefsController@destroy',$chef->id],'method'=>'POST','class'=>'pull=right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-lg']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
        <div class="table">
            
            <a class="name">{{$chef->title}} {{$chef->Firstname}} {{$chef->Middlename}} {{$chef->Lastname}}</a>
            <a><b class="tag">Mobile: </b><b class="context">{{$chef->Mobile}}</b></a>
            <a><b class="tag">Home phone: </b><b class="context">{{$chef->Home_phone}}</b></a>
            <a><b class="tag">Fax: </b><b class="context">{{$chef->Fax}}</b></a>
            <a><b class="tag">Address: </b><b class="context">{{$chef->Address1}}, {{$chef->Address2}}</b></a>
            
        </div>
        
        
    @endif

    

@endsection