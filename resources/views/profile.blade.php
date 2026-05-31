<h1>Testing</h1>
<h2>Name: {{ $name }}</h2>
<h2>Major: {{ $major }}</h2>
@foreach ($subjects as $sub)
    <ul>
        <li>{{ $sub }}</li>
    </ul>
@endforeach

<h2>Skills</h2>
@foreach ($skills as $s)
    <ul>
        <li>{{ $s }}</li>
    </ul>
@endforeach

