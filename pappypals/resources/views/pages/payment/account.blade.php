
@extends('share.default')
@section('title', 'account')
@section('id', 'account')
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
</style>


<section class="grownUps_dashbord">
  <div id="myTabContent" class="tab-content container" style="padding-top: 20px;">
    <div class="tab-pane fade active in" id="home">
      <h1>Hello! {{ Auth::user()->getNameOremail() }}</h1>
      @if (count($data['users']) > 0)
        <h3>Your registered children</h3>
        @foreach ($data['users'] as $subuser)
      <div class="col-md-1">    
        <a style="color: #fff;" href="{{ URL::to('dashboard/' . $subuser->id ) }}">
          <img style="border: 1px solid;
                      border-radius: 50%;
                      text-align: center;
                      width: 70px;
                      padding: 10px;
                      background-color: #fff;" src="{{ URL::asset('img/kid.jpg') }}" class="img-circle" width="50%" alt="kid">
          <h4 style="text-align: center;">{{ $subuser->username }} </h4></a></div>
        @endforeach
      @else
          <h3>You do not have any registered children</h3>
      @endif 
      <div class="col-md-1">
        <a href="{{ URL::to('/subusers/create' ) }}"><img src="{{ URL::asset('img/add-kid.png') }}" width="50px;"></a>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 extarn_buttons" style="padding: 20px 0;">
        <button class="btn btn-default"><i class="fa fa-heart" aria-hidden="true"></i> Your favorites</button> 
        <button onclick="window.location.href='/module'" class="btn btn-default"><i class="fa fa-tachometer" aria-hidden="true"></i> 3 modules completed</button> 
        <button class="btn btn-default"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download our APP!</button>
      </div>
  </div>
  </div>
</section>
<div class="container pull-down grownUps_body">
  <div class="row">
     <div class="col-md-12">
      <h2>Tip of the day</h2>
      <div class="col-md-12 card">
          <div class="col-md-4 card-image">
            <img src="{{ URL::asset('img/1209904892908608360.jpg') }}">
          </div>
          <div class="col-md-8 card_content">   
            <p>
              You’re taught about history, science, and math when you’re growing up. Most of us, however, 
              aren’t taught how to identify or deal with our own emotions, or the emotions of others. 
              These skills can be valuable, but you’ll never get them in a classroom.
            </p>
            <a href="">Mer..</a>          
          </div>
      </div>
      @if (count($data['users']) > 0)
      <h2>Your child progress</h2>
      @foreach ($data['users'] as $subuser)

      <div class="col-sm-9 col-md-4 col-lg-3 canvas_container">
        <div style="width:400px!important; min-height:327px!important;">
          <div id="canvas-holder" class="canvas-holder" style="width:75%">
            <a href="{{ URL::to('dashboard/' . $subuser->id ) }}">
              <img src="{{ URL::asset('img/kid.jpg') }}" class="img-circle" width="50%" alt="kid">
            </a>
            <h3 style="margin-left: 80px;">{{ $subuser->username }} </h3>
            <h5 style="margin-left: 80px;">Last activity: </h5>
            <!--<canvas id="chart-area"></canvas>-->
          </div>
          <script type="text/javascript" src="{{ URL::asset('/js/user-chart.js') }}"></script>
        </div>
      </div>
      @endforeach
      @endif


       <!--<div class="col-sm-12 col-md-12 col-lg-12">
          <div class="col-md-4">
            <h3> Dina kontouppgifter</h3>
            <h4>Användarnamn: {{$data['user']->getNameOremail()}}</h4>
            <h4>Kortnummer: xxxx xxxx xxxx {{$data['user']->last_four}}</h4>
            <h4>Kontotyp: {{$data['user']->stripe_plan}}</h4>
          </div>
          <div class="col-md-4">
            <h3> Invoices</h3>
            @foreach ($data['user']->invoices() as $invoice)

            <h4>Date: {{ $invoice->date()->toFormattedDateString() }}</h4>
            <h4>Total: {{ $invoice->total() }}</h4>
            <h4> <a href="user/invoice/{{ $invoice->id }}">Download</a></h4>
            @endforeach
          </div>
          <div id="users" class="col-md-4">
            <h3>Sub konto</h3>
            @if (count($data['users']) > 0)
            @foreach ($data['users'] as $subuser)
            <button type="button" class="btn btn-default btn-lg">
              <i class="fa fa-star" aria-hidden="true"></i> {{ $subuser->username }} 
            </button>
            <a class="" href="{{ URL::to('subusers/' . $subuser->id . '/edit') }}">ändra </a>/ <a class="" href="{{ URL::to('subusers/' . $subuser->id . '/delete') }}">radera</a>
            <br>
            <br>
            @endforeach
            @endif
            <label>
              <button onclick="location.href='{{ url('subusers/create') }}'" type="button" class="btn btn-success">Skapa konto</button>
            </label>
            <label>
              <button onclick="location.href='{{ url('Activity') }}'" type="button" class="btn btn-info">Account Activity</button>
          </div>
            <button onclick="location.href='{{ url('/ChangePassword') }}'" type="button" class="btn btn-info">Change Password</button>
            <button type="button" class="btn btn-success" onclick="location.href='{{ url('/upgrade') }}'">Upgrade</button>
            <button type="button" class="btn btn-danger" onclick="location.href='{{ url('/cancel') }}'">Cancel</button>
          </div>
        </div>-->

    </div>
  </div>
  <div><h2>Recommended for you</h2></div>
  <div class="row">
     <a href="{{ url('/module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ URL::asset('img/reggys-bad-luck.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Areas of learning</h4>
          <p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>
            
        </div>
      </div>
    </a>
    
      <a href="{{ url('module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ URL::asset('img/reggys-bad-luck.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Areas of learning</h4>
          <p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>
           
        </div>
      </div>
    </a>
    
      <a href="{{ url('module') }}">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="embed-responsive embed-responsive-16by9">
          <img src="{{ URL::asset('img/reggys-bad-luck.png')}}">
        </div>
        <div class="panel padding-s">
          <h4>Areas of learning</h4>
          <p>Problem solving | Recognize. Label and different emotions. | Conflict managment | Consecuential thinking | Group dynamisk | Teamwork | Communication</p>
           
        </div>
      </div>
    </a>
  </div>

</div>
@include('partial.footer')
@endsection