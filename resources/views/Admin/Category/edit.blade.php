@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a new category</a>
            {!! Form::open(['action' => 'CategoryController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Category name') !!}
                {!! Form::text('name', $cate->name, ['class'=>'form-control', 'placeholder'=>'What will you name our new cake...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tag', 'Category tag') !!}
                {!! Form::text('tag', $cate->tag, ['class'=>'form-control', 'placeholder'=>'What is it alike...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', $cate->description, ['class'=>'form-control', 'placeholder'=>'Describe it a bit ...']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::submit('Make a new category', ['class'=>'btn btn-primary btn-lg']) !!}
                {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@endsection