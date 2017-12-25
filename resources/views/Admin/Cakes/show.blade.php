@extends('Admin\header')
@section('body')
    @if(empty($cake))
        <h2><a>Cake not found</a></h2>
    @else

    @endif

    <a href="." class="btn btn-default">Back</a>
@endsection