@extends('share.default')
@section('title', 'Activites')
@section('id', 'Activites')
@section('content')
@include('partial.header')
<style>

  .thumbnail {
    padding:0px;
  }
  .panel {
    position:relative;
  }
  .padding-s {
    padding: 10px;
    min-height: 208px;
    box-shadow:0px 3px 3px #b1b2b3 !important;
  }
  .panel-body{
    color: #000;
  }
  .panel>.panel-heading:after,.panel>.panel-heading:before{
    position:absolute;
    top:11px;left:-16px;
    right:100%;
    width:0;
    height:0;
    display:block;
    content:" ";
    border-color:transparent;
    border-style:solid solid outset;
    pointer-events:none;
  }
  .panel>.panel-heading:after{
    border-width:7px;
    border-right-color:#f7f7f7;
    margin-top:1px;
    margin-left:2px;
  }
  .panel {
    background-color: #fff!important;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .panel>.panel-heading:before{
    border-right-color:#ddd;
    border-width:8px;
  }
  .pull-down {margin-top: 14px;}
  a h4 {
    color: #000;
  }
  a {color: black;}
  .embed-responsive-16by9 img {
    width:100%;
    border-radius: 5px;
    background-color: rgba(0,0,0, .5);
   
  }
   .embed-responsive-16by9 {
   box-shadow: 0px 3px 3px #b1b2b3 !important;
   }
    .cards{
    min-height: 380px;
  }
</style>


<section class="grownUps_dashbord">
  <div id="myTabContent" class="tab-content container" style="padding-top: 20px;">
    <div class="tab-pane fade active in" id="home">
      <div class="container">
        <h1>Activites</h1>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="pull-down">
    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/The-map-of-emotions-728x1024.jpg')}}">
        </div>
        <div class="panel padding-s">
          <h4>Helping kids overcome their childhood fears</h4>
          <p>Fear only exist in our own mind, still something that feels so real. For kids this is often more prevalent than for adults, and it’s a phase they go through. A first step for kids to overcome their childhood fears is to practice labelling the emotion.</p>
        </div>
      </div>
    </a>

    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/Calm_down_emotional_intelligence_kids-1024x685.jpeg')}}">
        </div>
        <div class="panel padding-s">
          <h4>Teaching kids not to be selfish</h4>
          <p>As toddlers go from being more self-centered individuals to learning the concept of empathy and seeing things from different perspectives, there are multiple fights and disputes we as adults will encounter. Remember that it’s a phase we all go through, still a behavior that you need to show that you do not tolerate.</p>      </div>
      </div>
    </a>
  </div>
</div>
@include('partial.footer')
@endsection