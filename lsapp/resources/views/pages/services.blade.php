@extends('layouts.app')

@section('content')
    <div class="col-12">
        <h1>{{$title}}</h1>
    </div>
    <div class="col-12">
        @if (count($services) > 0)
            <ul>
                @foreach ($services as $service)
                    <li>{{$service}}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
