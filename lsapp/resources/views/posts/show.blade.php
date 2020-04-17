@extends('layouts.app')

<style>
    .btn {
        border: 1px solid gray !important;
    }
</style>

@section('content')
    <div class="col-12">
        <a href="/posts" class="btn" style="margin-bottom: 20px">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
    </div>
@endsection