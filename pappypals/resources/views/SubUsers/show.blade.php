@extends('share.default')
@section('title', 'user')
@section('id', 'User')
@section('content')
@include('partial.header_logo')

<div class="container-fluid" style="margin: 120px 0 0 0;">
 <div class="container currnt-users">
    <h2>Hello! <span>{{ Auth::user()->getNameOremail() }}</span></h2>
    @if (count($subusers) > 0)
      <h3>Please, choose profile.</h3>
      <p>Maybe it can be explained here, why we should go through additional verification?</p>
        @foreach ($subusers as $subuser)
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 user-identiti">
          <a href="{{ URL::to('dashboard/' . $subuser->id ) }}">
            <img src="{{ URL::asset('img/kid.jpg') }}" class="img-circle" width="50%" alt="kid">
            <h4 style="text-transform: uppercase;">{{ $subuser->username }} </h4>
          </a>
          <h6>Child's interface</h6>
        </div>
        @endforeach

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 user-identiti parent">
          <a class="register" href="{{ url('/account') }}">
            <img src="{{ URL::asset('img/icon-lock.png') }}"><br>
            <h4 style="text-transform: uppercase;">{{ Auth::user()->getNameOremail() }} </h4>
          </a>
          <h6>Parent's interface</h6>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 user-identiti add-more-child">
          <a href="{{ URL::to('/subusers/create') }}">
            <img src="{{ URL::asset('img/add-kid.png') }}">
            <h4 style="text-transform: uppercase;"> Add children </h4>
          </a>
        </div>
    @elseif (count($subusers) == 0)
        <h3>Du har ingen användare, var så god och skapa minst en användare!</h3>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 user-identiti add-more-child">
          <a href="{{ URL::to('/subusers/create') }}">
            <img src="{{ URL::asset('img/add-kid.png') }}">
            <h4 style="text-transform: uppercase;"> Add children </h4>
          </a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 user-identiti parent">
          <a class="register" href="{{ url('/account') }}">
            <img src="{{ URL::asset('img/icon-lock.png') }}"><br>
            <h4 style="text-transform: uppercase;">{{ Auth::user()->getNameOremail() }} </h4>
          </a>
          <h6>Parent's interface</h6>
        </div>
    @endif
  </div> 
</div>
@include('partial.footer')
@endsection
<style type="text/css">
#UserPage .currnt-users .user-identiti{
  text-align: center;
  margin-top: 20px;
}
#UserPage .currnt-users .user-identiti.parent img{
  background-color: #c3c3c3;
}
#UserPage .currnt-users .user-identiti.add-more-child img{
  background-color: #de116b;
}
#UserPage .currnt-users a h4{
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 25px;
    color: #4c5051;
}
#UserPage .currnt-users a:hover{
  text-decoration: none;
}

#UserPage .currnt-users img{
    border-radius: 50%;
    text-align: center;
    width: 130px;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0px 5px 10px 0px #ddd;
    height: 130px;
}
</style>


