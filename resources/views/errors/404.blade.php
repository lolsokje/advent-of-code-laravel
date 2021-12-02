@extends('layouts.app')

@section('content')
    <div class="error">
        <h1>404</h1>
        <p>you messed up, why are you still here?</p>
        <p><a href="{{ route('day', 1) }}">let's hope this works</a></p>
    </div>
@endsection
