@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

    <h1>PROJECTS: </h1>

    <br>
    <a href="{{ route('project.create') }}">CREATE</a>
    <br><br><br>

    <ul>
        @foreach ($projects as $project)
            <li>
                <h5>Nome Progetto: {{$project -> title}} </h5>
                    <div>Descrizione: {{$project -> description}} </div>
                    <div>Autore: {{$project -> author}} </div>
                    <div>Tipo Progetto: {{$project -> type -> name}}</div>
                    
                    <ul>
                        @foreach($project -> technologies as $technology)
                            <li> Technology: {{ $technology -> technology_name }} </li>
                        @endforeach

                    </ul>
            </li>
            <br><br><br>
        @endforeach

       

       
    </ul>
@endsection