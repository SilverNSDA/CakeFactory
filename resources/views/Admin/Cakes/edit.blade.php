@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a change...</a>
            {!! Form::open(['action' => ['CakesController@update',$cake->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Cake name') !!}
                {!! Form::text('name', $cake->name, ['class'=>'form-control', 'placeholder'=>'What will you name our new cake...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('type', 'Cake type') !!}
                {!! Form::text('type', $cake->base_type, ['class'=>'form-control', 'placeholder'=>'What is it alike...']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', $cake->price, ['class'=>'form-control', 'placeholder'=>'How much....']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description',$cake->description, ['class'=>'form-control', 'placeholder'=>'Describe it a bit ...']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::hidden('_method', 'PUT') !!}
                {!! Form::submit('Edit this cake', ['class'=>'btn btn-primary btn-lg']) !!}
                {{--  {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}  --}}
            </div>
            {!! Form::close() !!}
        </div>
@endsection