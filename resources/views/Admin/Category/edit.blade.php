@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a change ....</a>
            {!! Form::open(['action' => ['CategoryController@update',$cate->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Category name') !!}
                {!! Form::text('name', $cate->name, ['class'=>'form-control', 'placeholder'=>'What will you name our new category...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tag', 'Category tag') !!}
                {!! Form::text('tag', $cate->tag, ['class'=>'form-control', 'placeholder'=>'Add its short name...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', $cate->description, ['class'=>'form-control', 'placeholder'=>'Describe it a bit ...']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::submit('Update category', ['class'=>'btn btn-primary btn-lg']) !!}
                {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@endsection