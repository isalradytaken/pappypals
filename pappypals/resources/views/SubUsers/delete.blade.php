@extends('share.default')

@section('title', 'create-account')

@section('content')
@include('partial.header')

<section style="background-image: url('img/bg-account.png'); color: #fff;">
  <div id="myTabContent" class="tab-content container" style="padding-top: 80px;">
    <div class="tab-pane fade active in" id="home">
      <p>
      <h1>Delete a child</h1>
      </p>
  </div>
  </div>
</section>
<div class="container">
<div class="col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-sm-4 col-md-4 col-lg-4" style="background-color: #fff; border-radius: 4px; margin:35px 0; box-shadow: 1px 1px 4px 0px #888888;">
  <h1 style="color: red;">Are you sure you want to delete a child?</h1>
  <h4>All progress and completed games will be deleted as well.</h4>
<div class="centered-form">
  <div class="">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Delete account</h3>
      </div>
      <div class="panel-body">
        <form role="form" method="post" action="{{ url('/subusers/delete') }}">
              <input type="hidden" name="userid" value="{{$subuser->id}}">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group{{ $errors->has('username') ? ' has-error': ''}}">
                <input type="text" name="username" id="username" class="form-control input-sm floatlabel" placeholder="username" disabled value="{{$subuser->username}}">
                @if($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
                @endif
              </div>
            </div>
          </div>
          <input type="submit" value="Delete" class="btn btn-danger btn-block"><br>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
          <button class="btn btn-primary btn-block" onclick="goBack()">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
@include('partial.footer')

@endsection