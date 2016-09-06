<?php $asset = URL::asset('/'); 
$ctr = 0;
$total = 0;?> 
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
    <div class="x_panel">
       <h3>Exams</h3>
      <div class="row">
         <br>
        <div class="col-md-10 col-md-offset-1">
          <div class="table-responsive">
               <table id="mytable" class="display" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th class="column-title">Type</th>
                      <th class="column-title">Subject</th>
                      <th class="column-title">Score</th>
                      <th class="column-title">Total</th>
                      <th class="column-title">Average</th>
                      <th class="column-title">Date</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($quiz as $quiz_list)
                    <?php $ctr++;?>

                
                  <tr class="even pointer">
                    <td id = "">{{$quiz_list->type}}</td>
                    <td id = "">{{$quiz_list->Subject}}</td>
                    <td id = "">{{$quiz_list->score}}</td>
                    <td id = "">{{$quiz_list->Total}}</td>
                    <td>
                    <?php
                      $ave = ($quiz_list->score / $quiz_list->Total) * 100 ; 
                      $total = $total + $ave;
                    ?>
                    {{round($ave,2)}} %
                    </td>
                    <td id = "">{{$quiz_list->Date}}</td>
                  
                  </tr>

                  @endforeach
                  
                </tbody>
              </table> 
              <br>
          </div>    
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="row" style = "color:black; text-align:right;">
            <div class="col-md-4">
            </div>
            <div class="col-md-4"><h2>Total</h2>
            </div>
            <div class="col-md-4"><h2>{{($ctr != 0) ? round($total/$ctr,2) : 0 }} %</h2>
            </div>
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

    // DataTable
    var table = $('#mytable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
    } );
} );
  </script>

@endsection