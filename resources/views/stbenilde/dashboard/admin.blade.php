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
    <h3>List of Account</h3>
    <div class="x_panel">
      <div class="row">
        
        <div class="col-md-10 col-md-offset-1">

            <div class="form-group">
              <label><I>Change Student Number to switch with another Student's Data</I></label>
            </div>

            <table class="table table-striped">
              <tr>
                <th>Name</th>
                <th>Student Number</th>
                <th>Status</th>
                <th>Action</th>
              </tr>

              @foreach($studdetails as $value)

                <tr>
                  <td>{{$value['name']}}</td>
                  <td>{{$value['studid']}}</td>
                  <td>{{$value['status']}}</td>
                  <td>

                    @if($value['status'] == 'active')
                      <?php $link = "" ; 
                        $disable = "disabled"; ?>

                        <a href="{{$link}}" class="btn btn-success fa fa-check"; disabled></a>

                    @else
                      <?php $link = "route('stbenilde.dashboard.status',{{$value['id']}})" ; 
                      $disable = ""; ?>

                      <a href="{{$link}}" class="btn btn-success fa fa-check";> Approve</a>



                    @endif

                  
                  </td>
                </tr>

              @endforeach

            </table>

          
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