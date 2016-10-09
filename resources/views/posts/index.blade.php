@extends('main')

@section('title', '| Blog')

@section('content')

<br>

	<div class="row">
		<div class="col-md-8 ">
			<h3>Posts</h3>
		</div>
	</div>

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-8 ">
			<h3>{{ $post->title }}</h3>
			<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

			<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

            <p><a href="{{ route('blog.single', $post->id) }}"></a></p>
			<hr>
		</div>
	</div>
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>


@endsection