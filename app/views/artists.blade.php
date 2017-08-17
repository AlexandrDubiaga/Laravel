@extends('layout')

@section('title')
    Artists
@stop


@section('artist')
    <p class="alert-info"> Artists: </p>
    @foreach($artist as $art)

        <a href="{{URL::to('artist/'.$art->ArtistId)}}">{{$art->ArtistId}}. {{$art->Name}}</a><br>

    @endforeach

    @stop