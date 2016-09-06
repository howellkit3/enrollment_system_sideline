<?php $asset = URL::asset('/'); 
$ctr = 0;
$grade = 0;
$average = 0;?> 
@extends('stbenilde.master')

@section('title', 'dashboard')

  <link href="{{$asset}}gentella/js/datatables/jquery.dataTables.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/datatables/css/jquery10.dataTables.min.css" rel="stylesheet">

  <style>

    .right_col {
      height:200%;
    }

  </style>

@section('content')
  <div class ="container">
    <h3>Attendance</h3>
    <div class="x_panel">
      <div class="row">
         <br>
        <div class="col-md-10 col-md-offset-1">
          <div class="table-responsive">
              <table id="mytable" class="display" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th class="column-title">Name</th>
                      <th class="column-title">Date</th>
                      <th class="column-title">Subject</th>
                  </tr>
                </thead>



                <tbody>
                  @foreach ($attendance as $attendance_list)

                  <tr class="even pointer">
                    <td >{{$attendance_list->Name}}</td>
                    <td >{{$attendance_list->Date}}</td>
                    <td >
                      {{ucfirst($attendance_list->Subject)}}
                    </td>
                  </tr>

                  @endforeach
                  
                </tbody>
              </table>
            <br>
          </div>    
        </div>
      </div>
  </div>


@endsection 


@section('header-scripts')
  
<!--   <script src="{{$asset}}gentella/js/datatables/jquery.min.js"></script> -->
  <script src="{{$asset}}gentella/js/jquery-1.12.3.js"></script>
  <script src="{{$asset}}gentella/js/datatables/jquery-10.dataTables.min.js"></script>


  <script>

    $(document).ready(function() {
    // Setup - add a text input to each footer cell

    // DataTable
    var table = $('#mytable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
    } );
} );

  </script>

@endsection