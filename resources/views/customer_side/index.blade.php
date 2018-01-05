<?php 
    use App\cakes;
?>
@extends('include/header')
@section('body')
<div class="space"></div>
<h1 style="left:5rem;position:relative;"> Your cart: </h1>
<div class="space"></div>
    <div class="container la">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Cake id</th>
                <th scope="col">Cake name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @php $total=0; @endphp
                @foreach($cart as $row)
                @php 
                $item=cakes::find($row->cakes_id);
                $total+=$item->price*$row->amount;
                @endphp
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$row->amount}}</td>
                <td>{{$item->price*$row->amount}} $</td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row" colspan="3"></th>
                    <td>Total:</td>
                    <td>{{$total}} $</td>
                </tr>
            </tbody>
        </table>
        <a role="button" class="btn btn-primary btn-lg" style="color:rgb(255,255,255);float:right;">Purchase</a> 
        <a role="button" class="btn btn-secondary btn-lg" style="color:rgb(255,255,255);float:right;">Clear cart</a>
    </div>
@endsection