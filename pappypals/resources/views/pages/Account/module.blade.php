@extends('share.default')

@section('title', 'module')

@section('content')
@include('partial.header')

<style>
  #sModulebtn {
    border-radius: 25px;
    margin-bottom: 20px;
  }
  #sModulebtn2 {
    border-radius: 25px;
  }
  .panel-group .panel {
    margin: 35px auto;
    border-radius: 4px;
    border: 1px solid #b1b2b3 !important;
    background-color: #fff !important;
    width: 710px;
    padding: 5px;
}

  .panel-default > .panel-heading {
    padding: 0;
    border-radius: 0;
    color: #212121;
    background-color: #FAFAFA;
    border-color: #EEEEEE;
  }

  .panel-title {
    font-size: 14px;
  }

  .panel-title > a {
    display: block;

    text-decoration: none;
  }
.panel {
    position:relative;
  }
  .padding-s {
  padding: 10px;
    box-shadow:0px 3px 3px #b1b2b3 !important;
  }
  .more-less {
    float: right;
    color: #212121;
  }
  .panel {
    background-color: #fff!important;
  }
  .panel-default > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #EEEEEE;
  }
  .btn-transparent {
    padding:6px 60px; 
    border: none; 
    border-radius: 30px; 
    background-color: rgba(255,255,255, .3);
    margin: 2px;
  }
  .embed-responsive .embed-responsive-item, .embed-responsive iframe, .embed-responsive embed, .embed-responsive object, .embed-responsive video {
    border-radius:5px 5px 0 0;
}
  .border{border: 1px solid;}
   a h4 {
  color: #000;
  }
</style>

<section class="grownUps_dashbord">
  <div id="myTabContent" class="tab-content container">
    <div class="tab-pane fade active in" id="home">
      <div class="col-md-8">
        <h2>Reggy's bad luck!</h2>
        <div>
          <button class="btn-transparent"><i class="glyphicon glyphicon-heart"></i> Add to favorites</button>
          <button class="btn-transparent" data-toggle="modal" data-target=".myshare"><i class="glyphicon glyphicon-share-alt"></i> Share this module</button>
        </div>
        <div>
          <h3>Quick description</h3>
          <p>To practice recognizing your own and others feelings, and be reminded to use kind and happy emotions <br> toward others. (15-30 minutes)</p>
        </div>
      </div>
      <div class="col-md-4" style="text-align: center;">
        <img style="margin-top: -38px;
                    margin-bottom: 11px;" src="{{ URL::asset('img/pappy-module.png') }}">
        <button id="sModulebtn" onclick="window.location.href='/playModule'" class="btn btn-info btn-block input-md">Start module</button>
      </div>

  </div>
  </div>
</section>


<div class="container demo">


  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="more-less glyphicon glyphicon-chevron-right"></span>
            Areas to develop in this unit
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <img src="{{ URL::asset('img/module-one.png') }}">
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="more-less glyphicon glyphicon-chevron-right"></span>
            About this unit
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          We've all experienced midunderstanding and mishaps where we've reacted in different ways. Some become really angry, others sad, disapointed or perhaps feel guilty. All emotions are allowed. It's the consequences of our actions that matters. <br> <br>This module is about how an act of kindness can be contagious to the rest of the group, and how it can help solve misunderstanding. It starts with a short video, followed by questions to discuss with your children.
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFive">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <span class="more-less glyphicon glyphicon-chevron-right"></span>
            Print resources
          </a>
        </h4>
      </div>
      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
        <div class="panel-body">
          Here you will be able to print today's lesson, questions to discuss and other resources to prepare the class.
        </div>
      </div>
    </div>

  </div><!-- panel-group -->
  <div class="center" style="text-align:center;">
    <div>
      <button id="sModulebtn2" onclick="window.location.href='/playModule'" class="btn btn-info input-lg">Start module &nbsp;&nbsp;<i class="glyphicon glyphicon-arrow-right"></i></button>
    </div>
    <br>
    <div>
      <button class="btn-transparent border"><i class="glyphicon glyphicon-heart"></i> Add to favorites</button>
      <button class="btn-transparent border"><i class="glyphicon glyphicon-arrow-down"></i> Download</button>
      <button class="btn-transparent border" data-toggle="modal" data-target="#myfeedback"><i class="glyphicon glyphicon-arrow-up"></i> Feedback</button>
       <button class="btn-transparent border" data-toggle="modal" data-target=".myshare"><i class="glyphicon glyphicon-share-alt"></i> Share</button>

  <!-- Modal -->
  <div class="modal fade myshare" id="myshare" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Share</h4>
        </div>
        <div class="modal-body">
          <p>share function here</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- modal feedback -->
      <div class="modal fade" id="myfeedback" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feedback</h4>
        </div>
        <div class="modal-body">
          <p>Your opinion is important!</p>
          <textarea>
          
          
          </textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </div>
  </div>
  <br>
  <div>
    <h2>Related modules</h2>
    <div class="col-sm-3 col-md-3 col-lg-3">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/taNpck549EI"></iframe>
      </div>
      <div class="panel padding-s">
         <h4>Areas of learning</h4>
<p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/taNpck549EI"></iframe>
      </div>
      <div class="panel padding-s">
         <h4>Areas of learning</h4>
<p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/taNpck549EI"></iframe>
      </div>
      <div class="panel padding-s">
         <h4>Areas of learning</h4>
<p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>      </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/taNpck549EI"></iframe>
      </div>
      <div class="panel padding-s">
         <h4>Areas of learning</h4>
<p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>      </div>
    </div>
  </div>
</div><!-- container -->

<script>
  function toggleIcon(e) {
    $(e.target)
      .prev('.panel-heading')
      .find(".more-less")
      .toggleClass('glyphicon-chevron-right glyphicon-minus');
  }
  $('.panel-group').on('hidden.bs.collapse', toggleIcon);
  $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
@endsection