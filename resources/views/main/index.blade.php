@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Личный кабинет</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Войти</a>--}}
                        {{--<a href="{{ route('register') }}">Зарегистрироваться</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            <div class="content">
                <div class="title m-b-md">
                    Womaninterests
                </div>

                <div class="links">
                    <a href="/cosmetics">косметика</a>
                </div>
            </div>
        </div>
 @stop
