@extends('layout')



@section('title')
    Artist #{{$id}} - {{$name}}
@stop

@section('artistId')
    <p class="alert-info">Albums: </p>
   <?php $i=1; ?>
    @foreach($albums as $album)
        <a href="{{URL::to('album/'.$album['AlbumId'])}}">{{$i}}. {{$album['Title']}}</a><br>
        <?php $i++; ?>
    @endforeach
    <h2 class="alert-danger">{{$name}}</h2>
    @stop