@extends('layouts.main-layout')

@section('section')
    <h1>PERIPHERALS</h1>  
    <a href="{{route('peripherals-create')}}">Insert a new peripherals</a>

    <ol>
        @foreach ($peripherals as $peripheral)
            <li>
                <a href="{{route('peripherals-show', $peripheral -> id)}}">
                {{$peripheral -> name}}
                </a>
            </li>
        @endforeach
    </ol>

@endsection