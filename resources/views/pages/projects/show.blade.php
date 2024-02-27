@extends('layouts.main-layout')
@section('head')
    <title>Projects</title>
@endsection
@section('content')

    <h1>Project:</h1>
    <div> Name project: {{ $project -> title}} </div>
    <div>Description: {{ $project -> description }}</div>
    <div>{{$project -> date}}</div>

    @foreach($project -> technologies as $technology)
        <div>Technology: {{$technology -> technology_name}}</div>
    @endforeach

    <div>Type: {{ $project -> type -> name }}</div>
    <img width="300px" src="{{ asset('storage/' . $project -> image)}}" alt="img">
@endsection 