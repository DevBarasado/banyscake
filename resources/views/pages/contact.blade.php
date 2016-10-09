@extends('main')

@section('title', '| Contact')


<br>
@section('content')

<br>

<div class="container">
   <div class="row">
         <div class="col-md-12 ">
            <h3>Beaches</h3>
             <br>
             <P>Kenya has one of the best world presitine beaches with full of marine parks just a couple of miles a way for divers and sealife lovers.</P>
            <div class="media">
            <a href="#">        
            <img class="img-responsive" src="images/img/nyali-beach.jpg"  width="800" height="200"> 
        </a>
       </div>      
    </div>
  </div>
</div>

<br>

        <div class="row">
            <div class="col-md-12">
                <h3>Contact Me</h3>
                <hr>
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success pull-left">
                </form>
            </div>
</div>
@endsection