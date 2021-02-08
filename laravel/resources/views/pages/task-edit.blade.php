@extends('layouts.main-layout')

@section('content')
    <h1>EDIT TASK</h1>

    <form action="{{ route('task-update', $task -> id) }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title:</label>
        <input name='title' type="text" value=" {{ $task -> title }}">

        <br>

        <label for="description">Description:</label>
        <input name='description' type="text" value=" {{ $task -> description }}">

        <br>

        <label for="priority">Priority:</label>
        <input name='priority' type="text" value=" {{ $task -> priority }}">

        <br>

        <label for="employee_id">Priority:</label>
        <select name="employee_id">

            @foreach ($employees as $employee)
                <option value="{{ $employee -> id }}"

                    @if ($task -> employee -> id == $employee -> id)
                        selected
                    @endif
                >
                    {{ $employee -> name }}
                    {{ $employee -> lastname }}
                </option> 
            @endforeach

        </select>
        
        <br>

        <label for="typologies[]">Typology</label> <br> {{-- nome dell'elemento da valorizzare + [] --}}
        @foreach ($typologies as $typology)

            <input name="typologies[]" type="checkbox" value="{{ $typology -> id }}"

                @foreach ($task -> typologies as $task_typology)
                    
                    @if ($task_typology -> id == $typology -> id)
                        checked
                    @endif
                @endforeach
            > 
                {{$typology -> name}} <br>
            
        @endforeach

        <input type="submit" value="SALVA">
    </form>

@endsection