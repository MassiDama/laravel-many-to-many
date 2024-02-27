@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')

    <h1 >Crea nuovo progetto:</h1>

    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">

    @csrf 
    @method('POST')

        <label for="title"> Title </label>
        <input type="text" name="title" id="title">
        <br><br>
        <label for="description"> Descrizione </label>
        <input type="text" name="description" id="description">
        <br><br>
        <label for="author"> Author </label>
        <input type="text" name="author" id="author">
        <br><br>
        <label for="image"> Image </label>
        <input type="file" name="image" id="image" accept="image/png">
        <br><br>

        <label for="type_id"> Select type: </label>
        <select name="type_id" id="type_id">

            @foreach ($types as $type)
                <option value="{{ $type -> id }}">
                    {{ $type -> name }}
                </option>
            @endforeach

        </select>

        <br><br><br>

        <span>TECHNOLOGIES:</span>

        <br><br>

        <div>
            @foreach($technologies as $technology)

                <input  type="checkbox" 
                        name="technology_id[]" 
                        id="{{ 'technology_id_' . $technology -> id }}" 
                        value=" {{ $technology -> id }} " >

                <label for="{{ 'technology_id_' . $technology -> id }}">
                    {{ $technology -> technology_name }}
                </label>
    
            @endforeach
        </div>

        <br><br>

        <input type="submit" value="EDIT">
    </form>
@endsection