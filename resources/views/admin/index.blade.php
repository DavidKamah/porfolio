@extends('admin.adminmaster')

@section('content')
    <h1>Posts</h1>

    @if($posts->count() > 1)
        @foreach($posts as $post)
        <div class="container ">
            <div class="card">
                <h6><a href = "/posts/{{$post->id}}">{{$post -> title}}</a></h6>
                <small> Written on {{$post -> created_at}}</small>

            </div>
         </div>
        @endforeach
    @else

    @endif
@endsection
