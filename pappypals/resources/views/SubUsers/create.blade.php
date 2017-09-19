@extends('share.default')

@section('title', 'create-account')
@section('content')
@include('partial.header')
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
<section style="background-image: url('../img/bg-account.png'); color: #fff;">
  <div id="myTabContent" class="tab-content container" style="padding-top: 80px;">
    <div class="tab-pane fade active in" id="home">
      <p>
      <h1>Add a child</h1>
      </p>
  </div>
  </div>
</section>
<div class="container-fluid" style="margin: 120px 0 0 0;">
<div class="container">
<div class="col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-sm-4 col-md-4 col-lg-4" style="background-color: #fff; border-radius: 4px; margin:35px 0; box-shadow: 1px 1px 4px 0px #888888;">
  <div class="centered-form">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Skapa konto</h3>
        </div>
        <div class="panel-body">
          <form role="form" method="post" action="{{ url('/subusers/create') }}">

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('username') ? ' has-error': ''}}">
                  <label>Choose your username</label><br>
                  <input type="text" name="username" id="username" class="form-control input-sm floatlabel" placeholder="username ">
                  @if($errors->has('username'))
                  <span class="help-block">{{ $errors->first('username') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('birthdate') ? ' has-error': ''}} ">
                  <input type="text" name="age" id="age" class="form-control input-sm" placeholder="age" style="display:none;">
                  <label>Choose your Birthday</label><br>
                  <input class="form-control input-sm" type="text" id="birthdate" name="birthdate" placeholder="birthdatee" value="10/24/2017" />
                  @if($errors->has('age'))
                  <span class="help-block">{{ $errors->first('birthdate') }}</span>
                  @endif
                </div>
              </div>      
            </div>
            <input type="submit" value="Save" class="btn btn-info btn-block" style="border-radius:30px;">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
        </div>
      </div>
</div>
  </div>
</div>
</div>
@include('partial.footer')

@endsection