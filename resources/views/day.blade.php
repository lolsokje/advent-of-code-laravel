@extends('layouts.app')

@section('content')
    <h1>day {{ $day }} solutions</h1>
    <p>part 1: {{ $partOne }}</p>
    <p>part 2: {{ $partTwo }}</p>

    @include('includes.day-switcher', ['min' => 1])
@endsection
