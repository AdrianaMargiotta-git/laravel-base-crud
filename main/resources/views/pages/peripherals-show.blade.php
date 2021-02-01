@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home-peripherals')}}">Back</a>

  <h2>Nome periferica: {{$peripheral -> name}}</h2>

  <h2>Codice modello: {{$peripheral -> model}}</h2>

  <h2>Prezzo: {{$peripheral -> price}}</h2>

  <h2>Consumo: {{$peripheral -> consumption}} W</h2>

@endsection