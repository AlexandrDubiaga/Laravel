@extends('layout')

@section('title')
    Album #{{$id}}
@stop

@section('album')

    <p class="alert-info">{{$genre}} Albums: </p>
    <?php $i=1; ?>
    @foreach($tracks as $track)
        <a href="{{URL::to('track/'.$track['TrackId'])}}"> {{$i}}. {{$track['Name']}} - {{$track['Composer']}} ({{$genre}})</a><br>


        <?php $i++ ?>
    @endforeach
    @foreach($artist as $art)
    <h2 class="alert-danger">{{$art->Name}}</h2>
    @endforeach
@stop