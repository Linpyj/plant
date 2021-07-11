@extends('layouts.app')

@section('content')
<div class="container is-max-widescreen" style="width: 70%;">
    <img src="{{ asset('/assets/images/hiko.jpeg') }}">
    <p class="is-size-4">おすすめの写真</p>
    {{ Auth::user() }}

    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box">
                <p class="title">Hello World</p>
                <img src="{{ asset('/assets/images/hiko.jpeg') }}">
            </article>
            <article class="tile is-child box">
                <p class="title">Hello World</p>
                <img src="{{ asset('/assets/images/hiko.jpeg') }}">
            </article>
            <article class="tile is-child box">
                <p class="title">Hello World</p>
                <img src="{{ asset('/assets/images/hiko.jpeg') }}">
            </article>
        </div>
    </div>
    <a href="{{route('post.index')}}" class="button is-medium is-fullwidth">タイムライン</a>
</div>

@endsection
