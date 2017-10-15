@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($all_posts as $post)
            <div class="panel">
                <a href="{{route('cosmetics_post',['post' => $post->id])}}" >
                    <h1 class="title">{{$post->company_name}}</h1>
                    <h3 class="">{{$post->title}}</h3>
                    <h4 class="text-danger">{{$post->content}}</h4>
                </a>
                <div class="form-group">
                    <a href="{{route('cosmetics_post_edit',['id'=>$post->id])}}" class="btn btn-info text-uppercase">изменить</a>
                </div>
            </div>
        @endforeach

    </div>
@stop
