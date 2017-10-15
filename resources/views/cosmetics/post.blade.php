@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel">
                <h1 class="title center">{{$post->company_name}}</h1>
                <h3 class="">{{$post->title}}</h3>
                <h4 class="text-danger">{{$post->content}}</h4>
        </div>
    </div>
@stop
