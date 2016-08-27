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
    <div class="right_col" role="main">
      <div class="row top_tiles">

        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon" style ="top:45;"><i class="fa fa-user"></i></div>
            <div class="count">{{substr($studfullname, 0, 20) }}..</div>
            <h3>{{$studid}}</h3>
            <p>Student Information</p>
          </div>
        </div>

        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon" style ="top:45;"><i class="fa fa-calendar"></i></div>
            <div class="count">{{date("Y-m-d")}}</div>
            <h3>{{date("h:i")}}</h3>
            <p>Data generated as of</p>
          </div>
        </div>
      </div>

      <br>

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

                <tfoot>
                    <tr>
                      <th class="column-title">Type</th>
                      <th class="column-title">Subject</th>
                      <th class="column-title">Score</th>
                      <th class="column-title">Total</th>
                      <th class="column-title">Average</th>
                      <th class="column-title">Date</th>
                    </tr>
                </tfoot>

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
            <div class="col-md-4"><h2>{{round($total/$ctr,2)}} %</h2>
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

    // Setup - add a text input to each footer cell
    $('#mytable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#mytable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
  </script>

@endsection