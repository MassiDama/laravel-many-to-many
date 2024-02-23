@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>PROJECTS: </h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <h5>Nome Progetto: {{$project -> title}} </h5>
                    <div>Descrizione: {{$project -> description}} </div>
                    <div>Autore: {{$project -> author}} </div>
                    <div>Tipo Progetto: {{$project -> type -> name}}</div>
            </li>
            <br><br><br>
        @endforeach
    </ul>
@endsection