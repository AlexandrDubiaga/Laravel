@extends('layout')

@section('title')
    Track
@stop


@section('track')
    <p class="alert-info"> Track: {{$track->Name}}</p>


       Composer: {{$track->Composer}};<br>
       Genre: {{$genre->Name}}<br>
       Album: {{$album}}
       <h2 class="alert-danger">{{$artist->Name}}</h2>


@stop