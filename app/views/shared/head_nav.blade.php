<div class="navbar navbar-fixed-top navbar-default" role="navigation">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"/>

        <span class="icon-bar"/>

        <span class="icon-bar"/>

      </button>

      <a href="#" class = "navbar-brand">
        @if(Session::has('username'))
          {{Session::get('username')}}
        @else
          Training Laravel
        @endif
      </a>

    </div>

    <div class="collapse navbar-collapse">

    <ul class="nav navbar-nav navbar-right">

      <li>{{link_to('/', 'Gallery')}}</li>

      <li>{{link_to('img/create', 'Upload Photo/Image')}}</li>

      <li><a href="#" class="articles_link">Articles</a></li>
      
      <li><a href="#" class="signup_link">Signup</a></li>

    @if (Auth::check())
     <li>
      {{ Form::open(array('route' => array('sessions.destroy'), 'method' => 'delete')) }}
       {{ Form::submit('Logout', array('class' => 'btn btn-normal')) }}
      {{ Form::close() }}
     </li>
    @else
     <li>{{link_to('sessions/create', 'Login')}}</li>
    @endif
    </div>

    </div>

  </div>

</div>