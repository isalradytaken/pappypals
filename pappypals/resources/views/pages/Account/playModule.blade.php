@extends('share.default')
@section('title', 'Play Module')
@section('content')
@include('partial.header')

<section class="grownUps_dashbord">
  <div id="myTabContent" class="tab-content container">
    <div class="tab-pane fade active in" id="home">
      <p>
      <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    </p>
  </div>
</div>
</section>
<br>
<section>
  <div class="container pull models_slider">
    <div id="controls2" class="col-md-2"><button class="action back btn btn-info">Back</button></div>
    <div id="module" class="col-md-8">

      <div class="step well"><h1>Watch this movie together (5 min) </h1>
        <h5>Start by watching the movie  "Reggy's bad luck". After that, you'll move on to the next step with questions to discuss in relation to what you just saw.</h5>
        <div class="">
          <iframe width='100%' height="400px" class="embed-responsive-item" src="//www.youtube.com/embed/taNpck549EI"></iframe>

        </div>
      </div>

      <div class="step well"><h1>Questions to discuss together (5-15 min)</h1>
          <p>
            In relation to what you just saw, try and ask your child some or all of the questions below. Try not to judge what other people think or what they've done.
          <h4>Write down key words on a whiteboard/paper.</h4>
          <ul>
            <li>How do you think Reggy feel when he trips?</li>
            <li>What does Reggy think when the friends become angry, sad and dissapointed?</li>
            <li>How do you feel when you've made a mistake?</li>
            <li>How can you explain to your friends so that they understand that someone has made a mistake?</li>
            <li>How come something happens to Izzy and Sammy when Gabby gives Reggy a hug?</li>
            <li>Has someone ever conforted you? Explain! How did it feel?</li>
            <li>How does it feel to be angry or sad? How do you look? Act it out!</li>
            <li>Talk about alternative ways to deal with a mishap/misunderstanding? Make up a plan!</li>

          </ul>
    </div>
      <div class="step well">
      <h1>Bonus! Roleplay (10-15min)</h1>
      <p>
          This is an additional exercise where you'll practice what it feels like to be different persons (minimum 2 persons). You can also skip this and move on to final step. 
        </p>
        <br>
        <p>Assign each person with a character. If you're a group of 4, one person will be Reggy (the dog) who accidentally trips and ruin the pie, one person will be Gabby (the rabbit) who starts crying, another Izzy (the owl) who become really angry with and starts yelling at Reggy and lastly someone will play Sammy (the horse) who gets really dissapoited.<br><br>
        </p>
        <h4>This way, you will practice how to put yourself in the shoes of others and esperience their feelings and reactions.</h4>

        </div>

  <div class="step well">
  <h1>Reflection and homework (5min)</h1>
    <h5>In this module, we've talked about recognizing and labelling different emotions and how to deal with mishaps. Take a minute or two to reflect on the questions below: </h5>
    <ul>
      <li>Is there someone arround you that you have a conflict with?</li>
      <li>How does that feel? What emotions are you feeling?</li>
      <li>What emotions would you like to feel?</li>
      <li>How does it affect you?</li>
      <li>Is there another way that you could deal with the situation for a different result?</li>
      </ul>
   </div>
   <div class="step well">
    <h4>Until next time, here are a few thoughtful tips: </h4>
    
    <ul>
      <li>Try to deal with the next conflict with more openess and with and with the goal to understand each other.</li>
      <li>Dare to have and express different opinions than the group.</li>
      <li>Next time, try to paus, move away and not talk about the conflict until you've calmed down.</li>
    </ul></div>
</div>

<div id="controls moduleDone" class="col-md-2">
  <button id="next" class="action next btn btn-info">Next</button>
  <button class="action submit btn btn-success" id="moduleDone">Submit</button>
  </div>
</div>
<div class="container" id="congrats" style="text-align: center;">
  <h1><b>Congratulations!</b></h1>
  <h2>You finished the module:</h2>
  <h1><img style="width: 70px;" src="img/iconOK.png"><b>Reggy's bad luck</b></h1>
  <br>
  <p>
    <a href="{{ url('/module') }}">< Back to the plataform</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ url('/module') }}">Next module ></a>
  </p>
    <br>
    <h2>Did you liked this module?</h2>

    <h4><span class="glyphicon glyphicon-edit"></span> Share it with others</h4>
  <h4><span class="glyphicon glyphicon-share"></span> Send us your feedback</h4>
</div>
</section>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/progressBar.js') }}"></script>

@endsection