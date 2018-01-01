@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a new chef</a>
            {!! Form::open(['action' => 'ChefsController@update', 'method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Firstname') !!}
                {!! Form::text('name', $chef->Firstname, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('lastname', 'Lastname') !!}
                {!! Form::text('lastname', $chef->Lastname, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::textarea('title', $chef->Title, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mobile', 'Mobile') !!}
                {!! Form::textarea('mobile', $chef->Mobile, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('home_phone', 'Home_phone') !!}
                {!! Form::textarea('home_phone', $chef->Home_phone, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('fax', 'Fax') !!}
                {!! Form::textarea('fax', $chef->Fax, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address1', 'Address 1') !!}
                {!! Form::textarea('address1', $chef->Address1, ['class'=>'form-control', 'placeholder'=>'#,street,area']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address2', 'Address 2') !!}
                {!! Form::textarea('address2', $chef->Address2, ['class'=>'form-control', 'placeholder'=>'city,zip,country']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::submit('Make a new chef', ['class'=>'btn btn-primary btn-lg']) !!}
                {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@endsection