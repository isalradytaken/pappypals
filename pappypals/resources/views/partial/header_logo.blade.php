<header class="header_only_logo">
    <nav class="navbar navbar-inverse no_logo_header">
      <div class="container">
        <div class="navbar-header">
          @if(Auth::check())
            <a class="logo" >
                <img src="{{ URL::asset('img/Logo.jpg') }}" alt="/">
            </a>
            <a class="shortcuts" href="javascript:window.history.back();"><span class="fa fa-arrow-left" aria-hidden="true"></span> Back</a>
          @else
            <a class="logo" href="/subusers">
                <img src="{{ URL::asset('img/Logo.jpg') }}" alt="/">
            </a>
          <!-- <a class="shortcuts" href="#"> <span class="fa fa-arrow-left" aria-hidden="true"></span> Gå tillbaka</a>-->
          @endif
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
</header>
@include('partial.alert')