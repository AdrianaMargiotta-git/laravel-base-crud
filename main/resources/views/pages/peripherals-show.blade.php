@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home-peripherals')}}">Back</a>

  <h1>Peripherals name: {{$peripheral -> name}}</h1>

  <h3>Model code: {{$peripheral -> model}}</h3>

  <h3>Price: {{$peripheral -> price}}$</h3>

  <h3>Consumption: {{$peripheral -> consumption}} W</h3>

@endsection