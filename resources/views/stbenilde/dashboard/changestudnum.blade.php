<?php $asset = URL::asset('/'); 
$ctr = 0;?> 
@extends('stbenilde.master')

@section('title', 'dashboard')

  <link href="{{$asset}}gentella/js/datatables/jquery.dataTables.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/datatables/css/jquery10.dataTables.min.css" rel="stylesheet">

  <style>

    .right_col {
      height:100%;
    }

  </style>

@section('content')
  <div class ="container">
    <h3>Switch Account</h3>
    <div class="x_panel">
      <div class="row">
        
        <div class="col-md-10 col-md-offset-1">

            <div class="form-group">
              <label><I>Change Student Number to switch with another Student's Data</I></label>
            </div>

            <form class="form-horizontal form-label-left " method="post" action="{{route('stbenilde.dashboard.updatestudnum')}}">

              <input type="hidden" name="_method" value="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
              <input type="hidden" id = "notifval" value="{{$auth->notif}}"> 

              <input type="hidden" name="id" value="{{$auth->id}}">

              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input  class="form-control" value = "{{$auth->studnum}}" name = "email" aria-describedby="emailHelp" disabled>
                <small id="emailHelp" class="form-text text-muted">This serve as your username</small>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name = "password"  class="form-control" value = "{{$auth->password}}" disabled>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Student Number</label>
                <input  class="form-control" name = "studnum" value = "{{$auth->active_stud_num}}" aria-describedby="emailHelp" style ="background:white;">
                <small id="emailHelp" class="form-text text-muted">Change this to see another student acount.</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Date Registered</label>
                <input  class="form-control" name = "updated_at"  value = "{{$auth->created_at}}" aria-describedby="emailHelp" disabled>
              </div>

              <div class="checkbox">
              <label>
                <input name ="notif" id = "notif"  type="checkbox"> Check me out if you want to receive an notification.
              </label>
            </div>
              
              <br>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br><br><br><br>
        </div>
    </div>
  </div>


@endsection 


@section('header-scripts')
  
  <script src="{{$asset}}gentella/js/jquery-1.12.3.js"></script>
  <script src="{{$asset}}gentella/js/datatables/jquery-10.dataTables.min.js"></script>

  <script>

  $(document).ready(function() {

    notifval =  $('#notifval').val();

    if(notifval == 'on'){

      $('#notif').prop('checked', true);

    }

  });

   
  </script>

@endsection