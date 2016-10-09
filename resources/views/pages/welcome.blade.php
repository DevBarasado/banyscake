@extends('main')

@section('title', '| Homepage')


<br>
@section('content')
<br>
        <h3>Mara River Crossings!</h3>
         <br>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                </div>
            </div>
        </div> <!-- end of header .row -->
        <br>

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary pull-left sm" >Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Hotels</h2>
                <div class="media">
                <a href="#">        
               <img class="img-responsive"  src="images/img/kempinski.jpg"  width="600" height="300"> 
        </a>
      </div>
    
                
    </div>
 </div>
@stop