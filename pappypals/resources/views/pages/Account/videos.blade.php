@extends('share.default')
@section('title', 'videos')
@section('id', 'videos')
@section('content')
@include('partial.header')
<style>
  .navbar-header a{ display: inline-block; padding: 10px; color: #fff;}
  .navbar-header button {border-radius: 50px;}
  .pull {margin-top:8px;}
  .navbar {border-radius: 0px; border-bottom: 1px solid #bbb; min-height: 48px; margin-bottom: -1px;}
  .nav-tabs {
    border-bottom: transparent;
  }
  .nav-tabs > li {
    float: left;
    margin-bottom: 0px;
    width: 20%;
    text-align: center;
    border: transparent;
    border-left: 1px solid #bbb;
  }
  .nav-tabs > li:last-child {border-right: 1px solid #bbb;}
  .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    border: transparent;
    border-bottom-color: transparent;
  }
  #custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    width: 90%;
  }


  #custom-search-input input{
    border: 0;
    box-shadow: none;

  }

  #custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
  }

  #custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
  }

  #custom-search-input .glyphicon-search{
    font-size: 23px;
  }
  .input-group {
    width: 270px;
    margin-left: 210px;
    margin-top: 5px;
  }
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
<section style="background-image: url('img/bg-account.png'); color: #fff;">
  <div id="myTabContent" class="tab-content container" style="padding-top: 20px;">
    <div class="tab-pane fade active in" id="home">
      <div class="container">
        <h1>Videos</h1><p>
        Welcome to our expert blog designed just for you. It’s a simple and effective guide providing you with quality time together with your kids; playing together, laughing and having fun while you both learn life-changing lessons. We provide short tips on how to integrate emotional intelligence into your everyday interaction – in 1 minute!

        The 1-minute Peppy Talks is written by Paulina Olsson and based on Bodil Wennberg’s knowledge and expertise. Bodil is a renown psychologist and author of Emotional Intelligence books in the Nordic, EQ for Parents.</p>
      </div>
    </div>
  </div>
</section>
<div class="container">

      <iframe width="100%" height="400px;" src="https://www.youtube.com/embed/v9oB5RmJXmA" frameborder="0" allowfullscreen></iframe>
      <br>
      <iframe width="100%" height="400px;" src="https://www.youtube.com/embed/zIND4r_5uJs" frameborder="0" allowfullscreen></iframe>

</div>
@include('partial.footer')

@endsection