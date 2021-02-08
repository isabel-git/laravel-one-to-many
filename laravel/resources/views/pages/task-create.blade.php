@extends('layouts.main-layout')

@section('content')
    <h1>NEW TASK</h1>

    <form action="{{ route('task-store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title:</label>
        <input name='title' type="text">

        <br>

        <label for="description">Description:</label>
        <input name='description' type="text">

        <br>

        <label for="priority">Priority:</label>
        <input name='priority' type="number">

        <br>

        <label for="employee_id">Priority:</label>
        <select name="employee_id">

            @foreach ($employees as $employee)
            <option value="{{ $employee -> id }}">
                {{ $employee -> name }}
                {{ $employee -> lastname }}
            </option> 
            @endforeach

        </select>
        
        <br>

        
        <label for="typologies[]">Typology</label> <br> {{-- nome dell'elemento da valorizzare + [] --}}
        @foreach ($typologies as $typology)

            <input name="typologies[]" type="checkbox" value="{{ $typology -> id }}"> {{$typology -> name}} <br>
            
        @endforeach

        <input type="submit" value="SALVA">
    </form>

@endsection