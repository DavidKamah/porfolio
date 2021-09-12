@extends('visitors_page.master')

@section('content')


	<div class="container">
		@foreach($posts as $post)
		<div class="block ">
			<div class="blog_container bg-white home ">
				<div class="img-container">
					<img src="{{URL::asset('img/image.jpg')}}">
				</div>
				<div class="content-container">
					<!--<h2>Gaming</h2>-->
					<h1>{{$post -> title}}</h1>
					<p>{{$post -> body}}</p>
					<a href="#" class="btn">Read More</a>
					<p><br /></p>
				</div>
			
			</div>
		</div>
		@endforeach
		<div class="row justify-content-center">
			{{$posts->links()}}
		</div>-->
	</div>


@endsection