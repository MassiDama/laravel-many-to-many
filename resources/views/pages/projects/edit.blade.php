@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>MODIFICA PROGETTO</h1>
    <form action="{{ route('project.update', $project -> id) }}"
    method="POST">

    @csrf 
    @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $project -> title }}">
        <br>
        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description" value="{{ $project -> description }}">
        <br>
        <label for="type_id">Seleziona il tipo:</label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
            <option value="{{ $type -> id }}"                
                @if ($project -> type -> id == $type -> id)
                selected
                @endif
            >
                {{ $type -> type_name}}
            </option>
            @endforeach
        </select>


        <h5>Technology:</h5>

        <div class="check-container">
            @foreach($technologies as $technology)
                <input  type="checkbox"
                        name="technology_id[]"
                        id="{{ 'technology_id_' . $technology -> id }}"
                        value="{{ $technology -> id }}"
                        class="d-inline"

                @foreach ($project -> technologies as $project_technology )
                    @if ( $project_technology -> id == $technology -> id )
                        checked
                    @endif
                @endforeach>

                <label for="{{ 'technology_id_' . $technology -> id }}">
                    {{ $technology -> technology_name }}
                </label>
            @endforeach
        </div>
        <input type="submit" value="MODIFICA">
    </form>
@endsection