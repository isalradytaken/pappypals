<header>
  <nav class="navbar navbar-inverse" style="background-color: #1d6482;">
    <div class="container">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="navbar-header" style="width: 500px;" >
          @if(Auth::check())
          <a href= "{{url('/') }}" class="navbar-brand logo" style="padding: 0px 15px;">
            <img src="{{ URL::asset('img/Logo-account.png') }}">
          </a>
          <div class="pull service_menu">
            <a href="">Faq</a>
            <a href="">Contact & feedback</a>
            <button type="button" onclick="location.href='{{ url('/subusers') }}'" class="tokidsview button">Kids view</button>
          </div>
        </div>
      </div>
      @endif
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div id="navbar3" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li>
              <a class="short_cuts">
                <img style="width:20px;" src="{{URL::asset('img/icon-settings.png')}}">
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
                <li><a><b>{{ Auth::user()->getNameOremail() }}</b></a></li>
                <li><a class="register register-subuser" href="{{ url('/subusers') }}">Byt Användare</a></li>
                <li><a class="register payment" href="{{ url('/account') }}">Administrera mitt konto</a></li>
                <li><a href="#">Support och vanliga frågor</a></li>

                @if(Auth::user()->is_admin())
                <li><a class="login" href="{{ url('/Activity') }}">Admin Panel</a></li>
                @else
                <li><a class="login" href="{{ url('/Activity') }}">Activity</a></li>
                @endif
                <li role="separator" class="divider"></li>
                <li><a class="login" href="{{ url('/signout') }}">logga ut</a></li>
              </ul>
            </li>
            @else
            <li><a class="register" href="{{ url('/signup') }}">Starta provmånad</a></li>
            <li><a class="login" href="{{ url('/signin') }}">Mina sidor</a></li>
            @endif
          </ul>
        </div>
      </div>



      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
  <nav class="navbar bottom_main">
    <div class="container">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul id="myTab" class="nav nav-tabs">
          <li><a href="{{ url('/playTogether') }}"><i class="fa fa-users" aria-hidden="true"></i> Play Together</a></li>
          <li class=""><a href="{{ url('/activities') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i>
            Activities</a></li>
          <li class=""><a href="{{ url('/articles') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> Articles</a></li>
          <li class="disabled" ><a  class="disabled"><i class="fa fa-video-camera" aria-hidden="true"></i>
            Videos</a></li>
          <li class=""><a href="{{ url('/EQ') }}"><i class="fa fa-heart" aria-hidden="true"></i>
            About EQ</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<script type="text/javascript">
  $('.disabled').prop('disabled', true);
</script>
