@extends('layouts.app')
    
<style>
    .well {
        border : 1px solid gray;
        border-radius: 5px;
        margin: 10px 0 10px;
        padding: 10px
    }
</style>

@section('content')
    <div class="col-12">
        <h1>Posts</h1>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection