<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="bs-example-navbar-collapse-1"  aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="img-responsive" src="images/img/magical.png"  width="50" height="50"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse collapse" >
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog"><i class="fa fa-blog" aria-hidden="true"></i>Blog</a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about"><i class="fa fa-about" aria-hidden="true"></i>About</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact"><i class="fa fa-contact" aria-hidden="true"></i>Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        @if (Auth::check())
        
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('tags.index') }}">Tags</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </li>
        
        @else
        
          <a href="{{ route('login') }}" class="btn btn-default pull-center">Admin</a>

        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>