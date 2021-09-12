@extends('visitors_page.master')

@section('content')
<div class="container">

    <h3>Create Post</h3>
        {!! Form::open(['action' => 'PagesController@store','method'=>'Post']) !!}

            <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::text('email','',['class' =>'form-control','placeholder' => 'Email'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body','',['class' =>'form-control','placeholder' => 'Body'])}}
            </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
            
</div>

@endsection