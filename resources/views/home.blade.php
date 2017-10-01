@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <h1 class="title flex-center">Личный кабинет</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="row flex-center">
        <a href="{{route('cosmetics_create_post')}}" class="btn btn-primary">добавить пост</a>
    </div>
</div>
@endsection
