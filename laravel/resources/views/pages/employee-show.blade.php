@extends('layouts.main-layout')

@section('content')
    <h1>Employee:</h1>

    <ul>

        <li>FIRSTNAME: {{ $employee -> name }}</li>
        <li>LASTNAME: {{ $employee -> lastname }}</li>
        <li>DATE OF BIRTH: {{ $employee -> date_of_birth }}</li>

        
        <h2>Task:</h2>

        @foreach ($employee -> tasks as $task)

            
            <li>TITLE: <a href="{{ route('task-show', $task -> id) }}">{{ $task -> title }}</a></li>
            <li>DESCRIPTION: {{ $task -> description}}</li>
            <li>PRIORITY: {{ $task -> priority }}</li>

            
            

            <h2>Typology:</h2>
            @foreach ($task -> typologies as $typology)
                    
                <li>NAME: <a href="{{ route('typology-show', $typology -> id) }}">{{ $typology -> name }}</a></li>
                <li>DESCRIPTION: {{ $typology -> description }}</li>
             @endforeach

            
   
        @endforeach


    </ul>
@endsection