@extends('main')

@section('title', '| Blog')


<br>
@section('content')

<div class="container">
   <div class="row">
        <div class="col-md-8 ">
            <h3>Landscape</h3>
            <br>
             <P>View of Mt Kilimanjaro from Kenya northern side. Tallest mountain in Africa. Perfect for mountain and rock climbers.</P>
            <div class="media">
            <a href="#">        
            <img class="img-responsive" src="images/img/kilimanjaro.jpg"  width="800" height="200"> 
        </a>
       </div>      
    </div>
  </div>
</div>

 
 <br>

	<div class="row">
		<div class="col-md-8 ">
			<h3> Posts</h3>
		</div>
	</div>
<br>

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-8 ">
			<h3>{{ $post->title }}</h3>
            <br>
			<h4 class="pull-right">Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h4>
            
            <br>

			<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

			<a href="{{ route('blog.single', $post->id) }}" ></a>
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