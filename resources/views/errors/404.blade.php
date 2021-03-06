<?php 

	$asset = URL::asset('/'); 
	$error_type = http_response_code();
	$user = (Auth::user()?Auth::user()->id:0); //always use validation

?> 

<style>


    #preloader  {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #fefefe;
      z-index: 99;
      height: 100%;
   }

  #status  {
       width: 200px;
       height: 200px;
       padding:5%;
       position: absolute;
       left: 50%;
       top: 40%;
       background-image:url({{$asset}}gentella//images/preloader.gif);
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center;
       margin: -100px 0 0 -100px;
       padding: 10%
   }

    #loading-text  {
      padding:5%;
      position: absolute;
      left: 50%;
      top: 30%;
      margin: -100px 0 0 -100px;
      padding: 10%
      left: 44%;
      top: 65%;
   }

</style>

<script src="{{$asset}}gentella/js/jquery.min.js"></script>

<script>

	jQuery(window).load(function() {

    jQuery("#status").fadeOut();
    jQuery("#loading-text").fadeOut();
    jQuery("#preloader").delay(1000).fadeOut("slow");
    jQuery(".framewelcome").delay(3000).fadeIn("slow");
    jQuery(".page1bg").delay(2000).show(0);

      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: true
      });

  });

</script>



@extends('layouts.app')

@section('content')

  <div id="preloader">
      <div id="status">&nbsp;  </div>
      <h3 id="loading-text">Loading ...</h3>
  </div>

<div class="container">
    <div class="row"  >

	        <div class="col-xs-6">
	        	
	        	<center><h1><?php echo $error_type . " " . "- Http Error" ?></h1>  <br><br>

              <img src = "{{$asset}}gentella/images/ghost.png" style  = "margin-bottom: -20px; width:45%;" ></center>
	        </div>

	        <div class="col-xs-6">
	        <div style ="margin-top: 120px;">
	        	 @include('flash::message')
	        	<form method="POST" action = "/store">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">	        		
					<input class="form-control" type = "hidden" value = "{{$user}}" name ="user_id">
					<input class="form-control" type = "hidden" value = "{{ $error_type }}" name ="type">

          <br><br><br>

	        		<center>
	        		<h1>Something went wrong.<br> <br> 
	        		Please refresh your browser and Log in again.</h1><br><br> <center>


					  <br><br>


					</form>


	        </div>
	     </div>
            


        
    </div>
</div>
@endsection