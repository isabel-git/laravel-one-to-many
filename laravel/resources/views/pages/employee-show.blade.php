@extends('layouts.main-layout')

@section('content')
    <h1>Dipendente:</h1>

    <ul>

        <li>FIRSTNAME: {{ $employee -> name }}</li>
        <li>LASTNAME: {{ $employee -> lastname }}</li>
        <li>DATE OF BIRTH: {{ $employee -> date_of_birth }}</li>

        
        <h2>Tasks:</h2>

        @foreach ($employee -> tasks as $task)

            <li>
                TITLE: {{ $task -> title }} <br>
                DESCRIPTION: {{ $task -> description}} <br>
                PRIORITY: {{ $task -> priority }} <br>
            </li>

        @endforeach


    </ul>
@endsection