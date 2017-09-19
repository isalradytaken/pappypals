@extends('share.default')
@section('title', 'account')
@section('id', 'join')
@section('content')
@include('partial.header_logo')

<div class="container-fluid slider_section mt-1">
    <div class="container-fluid slider_section mt-1">
      <div class="centered-form pull-down">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-12">
                  {!! Form::open(['url' => route('order-post'), 'data-parsley-validate', 'id' => 'payment-form']) !!}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="form-group " id="product-group">
                        {!! Form::select('plane', ['small' => 'Small (99sek)', 'test' => 'Test (20sek)'], 'Book', [
                            'class'                         => 'form-control',
                            'required'                      => 'required',
                            'data-parsley-class-handler'    => '#product-group',
                            'placeholder'                   => 'Plan'
                            ]) !!}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group card-number" id="cc-group">
                                {!! Form::text(null, null, [
                                    'class'                         => 'form-control',
                                    'required'                      => 'required',
                                    'data-stripe'                   => 'number',
                                    'data-parsley-type'             => 'number',
                                    'maxlength'                     => '16',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-class-handler'    => '#cc-group',
                                    'placeholder'                   => 'Number'
                                    ]) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" id="coupon_code">
                                {!! Form::text('coupon', null, [
                                    'class'                         => 'form-control',
                                    'maxlength'                     => '16',
                                    'data-parsley-trigger'          => 'change focusout',
                                    'data-parsley-class-handler'    => '#product-group',
                                    'placeholder'                   => 'coupon'
                                    ]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="ccv-group">
                        {!! Form::text(null, null, [
                            'class'                         => 'form-control',
                            'required'                      => 'required',
                            'data-stripe'                   => 'cvc',
                            'data-parsley-type'             => 'number',
                            'data-parsley-trigger'          => 'change focusout',
                            'maxlength'                     => '4',
                            'data-parsley-class-handler'    => '#ccv-group',
                            'placeholder'                   => 'ccv'
                            ]) !!}
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group" id="exp-m-group">
                            {!! Form::selectMonth(null, null, [
                                'class'                 => 'form-control',
                                'required'              => 'required',
                                'data-stripe'           => 'exp-month',
                                'placeholder'           => 'exp-month'
                            ], '%m') !!}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group" id="exp-y-group">
                            {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, [
                                'class'             => 'form-control',
                                'required'          => 'required',
                                'data-stripe'       => 'exp-year',
                                'placeholder'       => 'exp-year'
                                ]) !!}
                        </div>
                      </div>
                    </div>
                      <div class="form-group">
                          {!! Form::submit('Start!', ['class' => 'btn btn-lg btn-block  btn-info btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;']) !!}
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                            <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                        </div>
                      </div>
                  {!! Form::close() !!}
                </div>
            </div>          
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('script')
    <!-- PARSLEY -->
    <script>
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>',
            errorClass: 'has-error',
            successClass: 'has-success'
        };
    </script>
    
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
    
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey('pk_test_aOkM5uOzaqdFKgjGxwbuYq2z');

        jQuery(function($) {
            $('#payment-form').submit(function(event) {
                var $form = $(this);
                $form.parsley().subscribe('parsley:form:validate', function(formInstance) {
                    formInstance.submitEvent.preventDefault();
                    alert();
                    return false;
                });
                $form.find('#submitBtn').prop('disabled', true);
                Stripe.card.createToken($form, stripeResponseHandler);
                return false;
            });
        });
        function stripeResponseHandler(status, response) {
            var $form = $('#payment-form');
            if (response.error) {
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').addClass('alert alert-danger');
                $form.find('#submitBtn').prop('disabled', false);
                $('#submitBtn').button('reset');
            } else {
                var token = response.id;
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                $form.get(0).submit();
            }
        };
    </script>
@include('partial.footer')

@endsection