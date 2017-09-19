<!DOCTYPE html>
<html >
  <head>
    <title>Pappypals | @yield('title')</title>
      <!--ajax field for crcf -->
      <meta name="_token" content="{{ csrf_token() }}"/>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script src="{{asset('js/countries.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" integrity="sha384-Nud2SriDt2fZ+u85IBC48Yn9p+l4AGlapnX1EGA2KrnZjYJx8sxKnw/CIxc1wU1B" crossorigin="anonymous"></script>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-8+rznmq/k0KZkJlZhnuPEVkbRD7tA0wcFEjY48dajGWn3Xc1MasJwS8/tJ7OEsKW" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

<script type="text/javascript" src="{{ URL::asset('js/bdate.js') }}"></script>
<script src="{{asset('js/countries.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('js/jquery.min.js')}}"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-8+rznmq/k0KZkJlZhnuPEVkbRD7tA0wcFEjY48dajGWn3Xc1MasJwS8/tJ7OEsKW" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" integrity="sha384-Nud2SriDt2fZ+u85IBC48Yn9p+l4AGlapnX1EGA2KrnZjYJx8sxKnw/CIxc1wU1B" crossorigin="anonymous"></script>
Include Required Prerequisites --
Include Date Range Picker 
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<<<<<<< HEAD
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>-->
  </head>
  <body id="@yield('id')Page">
    @yield('content')
    @yield('script')
    
  </body>
</html> 

