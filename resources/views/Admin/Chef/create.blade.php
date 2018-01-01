@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a new chef</a>
            {!! Form::open(['action' => 'ChefsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('firstname', 'Firstname') !!}
                {!! Form::text('firstname', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lastname', 'Lastname') !!}
                {!! Form::text('lastname', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('middlename', 'Middlename') !!}
                {!! Form::text('middlename', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mobile', 'Mobile') !!}
                {!! Form::textarea('mobile', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('home_phone', 'Home_phone') !!}
                {!! Form::text('home_phone','', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('fax', 'Fax') !!}
                {!! Form::text('fax', '', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address1', 'Address 1') !!}
                {!! Form::text('address1', '', ['class'=>'form-control', 'placeholder'=>'#,street,area']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address2', 'Address 2') !!}
                {!! Form::text('address2', '', ['class'=>'form-control', 'placeholder'=>'city,zip,country']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::submit('Make a new chef', ['class'=>'btn btn-primary btn-lg']) !!}
                {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@endsection