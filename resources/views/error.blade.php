@extends('layouts.app')

@section('content')
    <div class="error">
        <h1>500</h1>
        @if ($error)
            <p>{{ $error }}</p>
            @include('includes.day-switcher', ['min' => 0])
        @else
            <p>you messed up, why are you still here?</p>
            <p><a href="{{ route('day', 1) }}">let's hope this works</a></p>
        @endif
    </div>
@endsection
