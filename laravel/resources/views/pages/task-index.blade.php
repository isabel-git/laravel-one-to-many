@extends('layouts.main-layout')

@section('content')
    <h1>Compiti:</h1>

    <ul>

        @foreach ($tasks as $task)

            <li>
                <a href="{{ route('task-show', $task -> id) }}">
                    {{ $task -> title }}
                </a>
            </li>
        @endforeach

    </ul>
@endsection