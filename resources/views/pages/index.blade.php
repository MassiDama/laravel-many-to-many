@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <h1> PROJECTS </h1>
    <ul>
        @foreach ($types as $type)
        <li>
            <h3>Tipo progetto: {{$type -> name}}</h3>
            <ul>
                @foreach ($type -> projects as $project)
                    <li>
                        <h5>Nome Progetto: {{$project -> title}} </h5>
                        <div>Descrizione: {{$project -> description}} </div>
                        <div>Autore: {{$project -> author}} </div>
                    </li>
                @endforeach
            </ul>
        </li>
        <br><br>
        @endforeach
    </ul>
@endsection
