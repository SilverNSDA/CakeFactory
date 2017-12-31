@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a change...</a>
            {!! Form::open(['action' => 'CakesController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Cake name') !!}
                {!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'What will you name our new cake...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('type', 'Cake type') !!}
                {!! Form::text('type', '', ['class'=>'form-control', 'placeholder'=>'What is it alike...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', '', ['class'=>'form-control', 'placeholder'=>'How much....']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'Describe it a bit ...']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::submit('Make a new cake', ['class'=>'btn btn-primary btn-lg']) !!}
                {{--  {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}  --}}
            </div>
            {!! Form::close() !!}
        </div>
@endsection