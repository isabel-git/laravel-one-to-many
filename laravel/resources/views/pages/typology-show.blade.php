@extends('layouts.main-layout')

@section('content')
    <h1>Typology:</h1>

    <ul>

        <li>NAME: {{ $typology -> name }}</li>
        <li>DESCRIPTION: {{ $typology -> description }}</li>

        
        <h2>Tasks:</h2>

        @foreach ($typology -> tasks as $task)

            
            <li>TITLE: {{ $task -> title }}</li>
            <li>DESCRIPTION: {{ $task -> description}}</li>
            <li>PRIORITY: {{ $task -> priority }}</li>
   
        @endforeach


    </ul>
@endsection