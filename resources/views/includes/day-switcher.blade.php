<p>
    @if ($day > $min)
        <a href="{{ route('day', $day - 1) }}">previous day</a> -
    @endif
    <a href="{{ route('day', $day + 1) }}">next day</a>
</p>
