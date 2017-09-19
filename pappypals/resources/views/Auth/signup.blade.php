
<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');?>
@extends('share.default')
@section('title', 'Signup')
@section('id', 'Signup')
@section('content')
@include('partial.header_logo')

<div class="header-banner">
  <div class="container">
    <div class="topTitle col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-4">
        <h3>Start your free trial now!</h3>
        <ul>
         <li><span class="fa fa-check-square-o"></span> Hundreds of games, books and activities for you and your child.</li>
          <li><span class="fa fa-check-square-o"></span> Unlimited access to Peppy Pals platform</li>
          <li><span class="fa fa-check-square-o"></span> Available on computers, tablets and smart phones.</li>
        </ul>
    </div>
  </div>
</div>
<div class="container-fluid slider_section">
  <div class="centered-form pull-down mt-1">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading top_from_titl">
          <h3 class="panel-title">Register here:</h3>
        </div>
        <div class="panel-body">
          <form role="form" method="post" action="{{ url('/signup') }}">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('first_name') ? ' has-error': ''}}">
                  <input type="text" name="first_name" id="first_name" class="form-control input-lg floatlabel" placeholder="First Name ">
                  @if($errors->has('first_name'))
                  <span class="help-block">{{ $errors->first('first_name') }}</span>
                  @endif
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('last_name') ? ' has-error': ''}} ">
                  <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name">
                  @if($errors->has('last_name'))
                  <span class="help-block">{{ $errors->first('last_name') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error': ''}} ">
              <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
              @if($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>

            <div class="form-group{{ $errors->has('country') ? ' has-error': ''}} ">
              <select name="country" id="country" class="form-control input-lg" placeholder="Country"></select>
              @if($errors->has('country'))
              <span class="help-block">{{ $errors->first('country') }}</span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('state') ? ' has-error': ''}} ">
              <select name="state" id="state" class="form-control input-lg" placeholder="State"></select>
              @if($errors->has('state'))
              <span class="help-block">{{ $errors->first('state') }}</span>
              @endif
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{ $errors->has('password') ? ' has-error': ''}} ">
                  <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                  @if($errors->has('password'))
                  <span class="help-block">{{ $errors->first('password') }}</span>
                  @endif
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 argument">
                <div>
                  <label><input type="checkbox" name="vilkor" id="vilkor" class="checkthis" placeholder="Vilkor"> I have read and I accept the <a href="#" data-toggle="modal" data-target="#myModal"><span>Terms</span> & <span>privacy policy</span>.</a></label>
                  @if($errors->has('password'))
                  <span class="help-block">{{ $errors->first('password') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <input type="submit" value="Start free trial" class="btn btn-info btn-block signup input-lg">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
        </div>
        <div class="panel-heading border_top">
          <h3 class="panel-title">Already have account? <a href="{{ url('/signin') }}"> <span> Signin</span>!</a></h3>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">vilkor</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script language="javascript">
       populateCountries("country", "state");
       populateCountries("country2");
       
       $('.signup').prop("disabled",true);
       $('.checkthis').on('click', function() {
          $(this).toggleClass('checked')
         var checkbox = $(this).hasClass('checked');
         if(checkbox){
          $('.signup').prop("disabled",false);
        }else{
          $('.signup').prop("disabled",true);
        }
       });  

  </script>
</div>
@include('partial.footer')
@endsection