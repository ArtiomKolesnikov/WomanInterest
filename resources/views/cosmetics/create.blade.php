@extends('layouts.app')

@section('content')
<div class="container flex-center">
    {!! Form::model(['method'=>'PUT','route'=>'cosmetics_post_create']) !!}
    <div class="form-group">
        {{Form::label('company_name','Название марки',['class'=>''])}}
        {{Form::text('company_name','',['class'=>'form-control', 'aria-describedby'=>"company_err",'required'=>'required'] )}}
    </div>

    <div class="form-group">
        {{Form::label('title','Название продукта',['class'=>''])}}
        {{Form::text('title','',['class'=>'form-control', 'aria-describedby'=>"product_err",'required'=>'required'] )}}
        <small id="product_err" class="form-text text-muted">название продукта</small>
    </div>

    <div class="form-group">
        {{Form::label('content','Описание',['class'=>''])}}
        {{Form::textarea('content','',['class'=>'form-control', 'aria-describedby'=>"product_err",'required'=>'required', 'style'=>'resize:none'] )}}
    </div>

    <div class="form-group">
        {{Form::submit('добавить',['class'=>'btn btn-submit text-uppercase'])}}
    </div>


    {!! Form::close() !!}
</div>
@stop
