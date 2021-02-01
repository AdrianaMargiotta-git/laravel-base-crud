@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home-peripherals')}}">Back</a>

  <h1>Insert a new peripheral:</h1>

  <form action="{{route('home-peripherals')}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Inserisci il nome</label>
    <input type="text" name="name" value="">
    <br>
    <label for="model">Inserisci il codice del modello</label>
    <input type="text" name="model" value="">
    <br>
    <label for="price">Inserisci il prezzo</label>
    <input type="text" name="price" value="">
    <br>
    <label for="consumption">Inserisci il consumo in Watt</label>
    <input type="text" name="consumption" value="">
    <br>
    <input type="submit" name="" value="Salva">

  </form>

@endsection