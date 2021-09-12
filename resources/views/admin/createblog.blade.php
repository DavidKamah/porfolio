@extends('admin.adminmaster')

@section('content')
    <div class="container">

        <h3>Create Post</h3>
        {!! Form::open(['action' => 'PostsController@store', 'method' =>'Post']) !!}
 
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title','',['class' =>'form-control','placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body','',['class' =>'form-control','placeholder' => 'Body'])}}
            </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
                
    </div>


@endsection