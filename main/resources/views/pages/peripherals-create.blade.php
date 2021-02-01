@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home-peripherals')}}">Back</a>

  <h1>Insert a new peripheral:</h1>

  <form action="{{route('store-peripherals')}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Insert a name:</label>
    <input type="text" name="name" value="">
    <br>
    <label for="model">Insert the model:</label>
    <input type="text" name="model" value="">
    <br>
    <label for="price">Insert the price:</label>
    <input type="text" name="price" value="">
    <br>
    <label for="consumption">Insert the consumption:</label>
    <input type="text" name="consumption" value="">
    <br>
    <input type="submit" name="" value="Salva">

  </form>

@endsection