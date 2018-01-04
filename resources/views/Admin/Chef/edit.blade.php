@extends('Admin\header')
@section('body')
<p class="big"><a class="btn btn-secondary" role="button" href=".">Back</a></p>
        <div class="table">
            <a class="name">Make a change ....</a>
            {!! Form::open(['action' => ['ChefsController@update',$chef->id], 'method' => 'POST']) !!}
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
                {!! Form::text('title', $chef->Title, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mobile', 'Mobile') !!}
                {!! Form::text('mobile', $chef->Mobile, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('home_phone', 'Home_phone') !!}
                {!! Form::text('home_phone', $chef->Home_phone, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('fax', 'Fax') !!}
                {!! Form::text('fax', $chef->Fax, ['class'=>'form-control', 'placeholder'=>'']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address1', 'Address 1') !!}
                {!! Form::text('address1', $chef->Address1, ['class'=>'form-control', 'placeholder'=>'#,street,area']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('address2', 'Address 2') !!}
                {!! Form::text('address2', $chef->Address2, ['class'=>'form-control', 'placeholder'=>'city,zip,country']) !!}
            </div>
            <div class="bottom-right">
                {!! Form::submit('Update chef', ['class'=>'btn btn-primary btn-lg']) !!}
                {!! Form::reset('Clear form',['class'=>'btn btn-sencondary btn-lg']) !!}
            </div>
            {!! Form::close() !!}
        </div>
@endsection