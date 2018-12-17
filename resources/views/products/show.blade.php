<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h1>Show Product</h1><br>
    <div class="row mb-4 text-uppercase font-weight-bold" style="font-size: 2rem;">
        <div class="col-md-1"></div>
        <div class="col-md-2">Name:</div>
        <div class="col-md-4">{{$product->name}}</div>
    </div>
    <div class="row mb-4 text-uppercase font-weight-bold" style="font-size: 2rem;">
        <div class="col-md-1"></div>
        <div class="col-md-2">Price:</div>
        <div class="col-md-4">{{$product->price}}</div>
    </div>
    <div class="row">
        <div class="col-1">
            <a href="{{action('ProductController@edit',$id)}}" class="btn btn-warning btn-lg">Edit</a>
        </div>
        <div class="col-1">
            <form action="{{action('ProductController@destroy',$id)}}" method="post">
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger btn-lg">Delete</button>
            </form>
        </div>
    </div>
</div>