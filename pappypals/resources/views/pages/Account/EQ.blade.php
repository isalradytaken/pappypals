@extends('share.default')
@section('title', 'EQ')
@section('id', 'EQ')
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
          <h1>What is Social and Emotional Intelligence?</h1><p>
        Here we will explain the five components of the EQ-wheel; Self-management, self-awareness, relationship skills, social awareness and responsible decision-making. </p>
      </div>
    </div>
  </div>
</section>
<div class="container">

     <h1>EQ content here...</h1>

</div>
@include('partial.footer')
@endsection