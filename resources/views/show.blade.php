@extends('layout.adminmaster')

@section('content')

<div class="container">
    <h3>{{$post->title}}</h3>

    <p>{{$post->body}}</p>
</div>
@endsection