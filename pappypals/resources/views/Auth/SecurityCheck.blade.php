@extends('share.default')

@section('title', 'Signin')
@section('id', 'Signin')
@include('partial.header_logo')
@section('content')
<div class="container-fluid" style="margin: 120px 0 0 0;">
  <div class="centered-form pull-down">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Security Check <small>Please enter account password</small></h3>
            
            </div>
            <div class="registrationFormAlert" id="divCheckPasswordMatch">
        </div>
        </div>
        <div class="panel-body">
          <form role="form" method="post" action="{{ url('/SecurityCheck') }}">
            <div class="form-group{{ $errors->has('password') ? ' has-error': ''}} password">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
            </div>
            <input type="submit" value="Check" class="btn btn-info btn-block input-lg" id="submit">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
                <h3 class="panel-title">{{ $messages['1']}}</h3>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

