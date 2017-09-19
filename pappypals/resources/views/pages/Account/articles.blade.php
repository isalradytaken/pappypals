@extends('share.default')
@section('title', 'articles')
@section('id', 'articles')
@section('content')
@include('partial.header')
<style>
  
  .thumbnail {
    padding:0px;
  }
  .panel {
    position:relative;
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
    
  }
  .panel>.panel-heading:before{
    border-right-color:#ddd;
    border-width:8px;
  }
  .article{
  padding: 10px;
border: 1px solid #eee !important;
    height: 190px;
  }
  .article img {
    width:300px;
    float: left;
    margin-right: 20px;
  }
  .article button {
  float: right;
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
        <h1>Articles</h1><p>
        Welcome to our expert blog designed just for you. It’s a simple and effective guide providing you with quality time together with your kids; playing together, laughing and having fun while you both learn life-changing lessons. We provide short tips on how to integrate emotional intelligence into your everyday interaction – in 1 minute!

        The 1-minute Peppy Talks is written by Paulina Olsson and based on Bodil Wennberg’s knowledge and expertise. Bodil is a renown psychologist and author of Emotional Intelligence books in the Nordic, EQ for Parents.</p>
      </div>
    </div>
  </div>
</section>
<div class="container pull-down grownUps_body">
  <div class="row">
    <div class="col-md-12 card">
          <div class="col-md-4 card-image">
            <img src="img/1209904892908608360.jpg">
          </div>
          <div class="col-md-8 card_content">   
            <p>
              You’re taught about history, science, and math when you’re growing up. Most of us, however, 
              aren’t taught how to identify or deal with our own emotions, or the emotions of others. 
              These skills can be valuable, but you’ll never get them in a classroom.
            </p>
            <a target="_blank" href="http://lifehacker.com/emotional-intelligence-the-social-skills-you-werent-ta-1697704987">Mer..</a>          
          </div>
      </div>

  
 
    <div class="col-md-12 card">
          <div class="col-md-4 card-image">
            <img src="img/kgreading-a7c6bc0da50b02a4b1f0f21970033a0f6dda4040-s1100-c15.jpg">
          </div>
          <div class="col-md-8 card_content">   
            <p>
              Thomas O'Donnell's kindergarten kids are all hopped up to read about Twiggle the anthropomorphic Turtle.

"Who can tell me why Twiggle here is sad," O'Donnell asks his class at Matthew Henson Elementary School in Baltimore.

"Because he doesn't have no friends," a student pipes up.

And how do people look when they're sad?

"They look down!" the whole class screams out.

Yeah, Twiggle is lonely. But, eventually, he befriends a hedgehog, a duck and a dog. And along the way, he learns how to play, help and share.
            </p>
            <a target="_blank" href="http://www.npr.org/sections/ed/2014/12/31/356187871/why-emotional-literacy-may-be-as-important-as-learning-the-a-b-c-s">Mer..</a>          
          </div>
      </div>
  
  <div class="col-md-12 card">
          <div class="col-md-4 card-image">
            <img src="img/kindness-kid.jpg.size.custom.crop.1086x722.jpg">
          </div>
          <div class="col-md-8 card_content">   
            <p>
              Eric Wieder could teach a master class in kindness.

He’s been taking lessons since he was in diapers, when he was stump-height to a Christmas tree, and his parents trotted him out to the annual lighting at Queen’s Park.

Now in Grade 6, the 11-year-old has developed an app to help Syrian refugees find a safe and welcoming place to stay in Canada.
            <a target="_blank" href="https://www.thestar.com/news/gta/2016/01/01/cool-to-be-kind-forum-poll.html">Mer..</a>          
          </div>
      </div>
 
  <div class="col-md-12 card">
          <div class="col-md-4 card-image">
            <img src="img/dec14_31_186365786.jpg">
          </div>
          <div class="col-md-8 card_content">   
            <p>
              In my ten years as an executive coach, I have never had someone raise his hand and declare that he needs to work on his emotional intelligence. Yet I can’t count the number of times I’ve heard from people that the one thing their colleague needs to work on is emotional intelligence. This is the problem: those who most need to develop it are the ones who least realize it. 
            </p>
            <a target="_blank" href="https://hbr.org/2014/12/signs-that-you-lack-emotional-intelligence">Mer..</a>  
          </div>
      </div>
  </div>
</div>

@include('partial.footer')
@endsection