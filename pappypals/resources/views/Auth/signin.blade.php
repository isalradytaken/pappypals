<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>
@extends('share.default')
@section('title', 'Signin')
@section('id', 'Signin')
@section('content')
@include('partial.header_logo')
<div class="container-fluid slider_section mt-1 " style="min-height: 500px; margin: 120px 0 0 0;">
  <div class="centered-form pull-down">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Sign in to Peppy Pals</h3>
        </div>
        <div class="panel-body" id="signin">
          <form role="form" method="post" action="{{ url('/signin') }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error': ''}} email">
              <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('password') ? ' has-error': ''}} password">
                  <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                </div>
               
              </div>
            </div>
            <input type="submit" value="Sign in" class="btn btn-info btn-block input-lg">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
          Forgot your password?:  <a href="{{ url('ForgotPassword') }}"> Reset</a>   
        </div>
      <div class="panel-heading border_top">
        
        <h3 class="panel-title">Don't have an account? <a href="{{ url('/signup') }}"> <span> Sign Up</span>!</a></h3>
      </div>
      </div>
    </div>
  </div>
</div>
@include('partial.footer')
@endsection

