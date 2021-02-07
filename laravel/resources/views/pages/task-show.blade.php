@extends('layouts.main-layout')

@section('content')
    <h1>Tasks:</h1>

    <ul>

        <li>TITLE: {{ $task -> title }}</li>
        <li>DESCRIPRION: {{ $task -> description }}</li>
        <li>PRIORITY: {{ $task -> priority }}</li>

        <h2>Dipendente:</h2>
        
            <li>FIRSTNAME: {{ $task -> employee -> name }}</li>
            <li>LASTNAME: {{ $task -> employee -> lastname}}</li>
            <li>DATE OF BIRTH: {{ $task -> employee -> date_of_birth }}</li>
        


    </ul>
@endsection