@extends('share.default')
@section('title', 'playTogether')
@section('id', 'playTogether')
@section('content')
@include('partial.header')
<style>
  .thumbnail {
    padding:0px;
  }
  .panel {
    position:relative;
    min-height: 169px;
  }
  .padding-s {
    padding: 10px;
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
  .cards{
    min-height: 380px;
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
  .embed-responsive img {
    width:100%;
    border-radius: 5px;
    background-color: rgba(0,0,0, .5);
  }
  .embed-responsive{

   box-shadow: 0px 3px 3px #b1b2b3 !important;
  }
  .progress-bar {
    background-color: #D7005A;
    color:#000;
    line-height: 13px;
}
  .progress {
    margin-bottom: 0px!important;
    height: 14px!important;
    position: absolute;
    width: 92%;
    bottom: 13px;
  }
</style>

<script>
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var target = $(e.target).attr("href") // activated tab
    if ($(target).is(':empty')) {
      $.ajax({
        type: "GET",
        url: "/article/",
        error: function(data){
          alert("There was a problem");
        },
        success: function(data){
          $(target).html(data);
        }
      })
    }
  })
</script>
<section class="grownUps_dashbord">
  <div id="myTabContent" class="tab-content container" style="padding-top: 20px;">
    <div class="tab-pane fade active in" id="home">
      <div class="container">
        <h1>Modules</h1>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="pull-down">

    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4 cards">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/peppypals_ep_1_1_modul.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Reggy's Bad Luck</h4>
          <p>Problem solving | Emotions | Conflict managment | Consecuential thinking | Group dynamics | Teamwork | Communication | Bad luck</p>
            <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div>
        </div>
      </div>
    </a>


    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4 cards">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/peppypals_ep_1_6_modul.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Izzy's apple</h4>
          <p>Anger management | Misunderstanding | Communication | Teamwork | Problem solving | Forgiveness | Attentiveness</p>    
        <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div></div>
      </div>
    </a>


    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4 cards">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/peppypals_ep_1_8_modul.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Reggy has a go on the slide</h4>
          <p>Overcoming fear | Facing new challenges | Trust | Comfort zone | Encouraging others | Support | Courage</p>   
        <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div></div>
      </div>
    </a>


    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4 cards">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/peppypals_ep_1_11_modul.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Gabby gets a bump</h4>
          <p>Perspective taking | Social compeency | Misunderstanding | Stress management | Responsibility | Teamwork | Empathy | Perseverance | Patience</p>   
        <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div></div>
      </div>
    </a>



    <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4 cards">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ url('img/peppypals_ep_1_14_modul.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Sammy shares</h4>
          <p>Empathy | Sharing | Notice when others need help | Group dynamics | Teamwork | Communication</p> 
        <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div></div>
      
      </div>
    </a>
    <div class="col-sm-4 col-md-4 col-lg-4 cards">
      <div class="embed-responsive embed-responsive-16by9">

        <img src="{{ url('img/peppypals_ep_1_3_modul.png')}}">
      </div>
      <div class="panel padding-s">
        <h4>Sammy helps out</h4>
        <p>Challenges | Courage | Encouragement | Persuasion | Teamwork | Stress management | Problem solving | Humor | Creativity | Accepting encouragement</p>    
      <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div></div></div>
    </div>


    <div class="col-sm-4 col-md-4 col-lg-4 cards">
      <div class="embed-responsive embed-responsive-16by9">

        <img src="{{ url('img/peppypals_ep_1_9_modul.png')}}">
      </div>
      <div class="panel padding-s">
        <h4>Gabby doesn't like competing</h4>
        <p>Cooperation | Perseverance | Resilience | Failure | Limitations | Teamwork | Creativity | Disappointment | Overcoming limitaions | Learning from failure</p>   
      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
      <div class="embed-responsive embed-responsive-16by9">

        <img src="{{ url('img/peppypals_ep_1_16_modul.png')}}">
      </div>
      <div class="panel padding-s">
        <h4>Calm down, it'll be alright</h4>
        <p>Patience | Self-control | Adversity | Handling and overcoming negative emotions | Empathy | Anger | Comforting others</p>      </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 cards">
      <div class="embed-responsive embed-responsive-16by9">

        <img src="{{ url('img/peppypals_ep_1_4_modul.png')}}">
      </div>
      <div class="panel padding-s">
        <h4>One, two, three, jump!</h4>
        <p>Diversity | Openness | Differences | Tolerance | Equal value | Safety | Acceptance | Consideration </p>      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var current = 1;
		
		widget      = $(".step");
		btnnext     = $(".next");
		btnback     = $(".back"); 
		btnsubmit   = $(".submit");

		// Init buttons and UI
		widget.not(':eq(0)').hide();
		hideButtons(current);
		setProgress(current);

		// Next button click action
		btnnext.click(function(){
			if(current < widget.length){
				widget.show();
				widget.not(':eq('+(current++)+')').hide();
				setProgress(current);
			}
			hideButtons(current);
		})

		// Back button click action
		btnback.click(function(){
			if(current > 1){
				current = current - 2;
				btnnext.trigger('click');
			}
			hideButtons(current);
		})			
	});

	// Change progress bar action
	setProgress = function(currstep){
		var percent = parseFloat(100 / widget.length) * currstep;
		percent = percent.toFixed();
		$(".progress-bar").css("width",30+"%").html(percent+"%");		
	}

	// Hide buttons according to the current step
	hideButtons = function(current){
		var limit = parseInt(widget.length); 

		$(".action").hide();

		if(current < limit) btnnext.show();
		if(current > 1) btnback.show();
		if (current == limit) { btnnext.hide(); btnsubmit.show(); }
	}
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19096935-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
@include('partial.footer')
@endsection