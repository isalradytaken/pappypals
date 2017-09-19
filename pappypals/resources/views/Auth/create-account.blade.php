@extends('share.default')

@section('title', 'create-account')

@section('content')
<div class="container pull-down">
  <div class="center">
    <h1> Din gratismånad* startar här!</h1>
    <ul>
      <li> Obegränsat med lek, lär och skapande</li>
      <li>Över 1000 olika pedagogiska äventyr och böcker</li>
  <li>Nya äventyr varje vecka</li>
      <h4> 1. Skapa konto
        E-postadressen och lösenordet använder du sedan för att logga in i appen och på peppypals.se</h4>
</ul>
</div>
</div>
<div class="centered-form">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Skapa konto</h3>
      </div>
      <div class="panel-body">
        <form role="form" method="post" action="{{ url('/create-account') }}">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group{{ $errors->has('username') ? ' has-error': ''}}">
                <input type="text" name="username" id="username" class="form-control input-sm floatlabel" placeholder="username ">
                @if($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('age') ? ' has-error': ''}} ">
                <input type="text" name="age" id="age" class="form-control input-sm" placeholder="age">
                @if($errors->has('age'))
                <span class="help-block">{{ $errors->first('age') }}</span>
                @endif
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group{{ $errors->has('grade') ? ' has-error': ''}} ">
                <input type="text" name="grade" id="grade" class="form-control input-sm" placeholder="grade">
                @if($errors->has('grade'))
                <span class="help-block">{{ $errors->first('grade') }}</span>
                @endif
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group{{ $errors->has('password') ? ' has-error': ''}} ">
                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
              </div>
            </div>

          </div>

          <input type="submit" value="Register" class="btn btn-info btn-block">
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
      </div>
    </div>
  </div>
</div>
@include('partial.footer')
@endsection