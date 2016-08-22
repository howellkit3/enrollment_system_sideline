<?php $asset = URL::asset('/'); 
$ctr = 0;?> 
@extends('stbenilde.master')

@section('title', 'dashboard')

  <link href="{{$asset}}gentella/js/datatables/jquery.dataTables.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/datatables/css/jquery10.dataTables.min.css" rel="stylesheet">

  <style>

    .right_col {
      height:200%;
    }

    .center{

      text-align: center;

    }

    .alert-success{

      margin-top : 60px;
    }

  </style>

@section('content')
  <div class ="container">
    <div class="right_col" role="main">
      <div class="row top_tiles">
        @include('flash::message')
        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon" style ="top:45;"><i class="fa fa-user"></i></div>
            <div class="count">{{$studfullname}}</div>
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

        <h1 class = "center">Data Entered</h1>

        <br>
        <div class="col-md-10 col-md-offset-1">
          <div class="table-responsive">
               <table id="mytable" class="display" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="column-title" style ="width:10%;"># </th>
                    <th class="column-title">Date </th>
                    <th class="column-title">Subject </th>
                    <th class="column-title">Status </th>
                  </tr>
                </thead>

                <tfoot>
                    <tr>
                      <th class="column-title"># </th>
                      <th class="column-title">Date</th>
                      <th class="column-title">Subject</th>
                      <th class="column-title">Status</th>
                    </tr>
                </tfoot>

                <tbody>

                  @foreach ($attendance as $attendance_list)
                    <?php $ctr++;?>
                    @if($attendance_list->Status == 'yes')
                      <?php 
                        $attendance_list->Status = 'present';
                        $attd_status = " ";
                      ?>

                    @else
                      <?php
                        $attendance_list->Status = 'absent';
                        $attd_status = "danger";
                      ?>
                    @endif

                  <tr class="even pointer">
                    <td id = "{{$attd_status}}">{{$ctr}}</td>
                    <td id = "{{$attd_status}}">{{$attendance_list->Date}}</td>
                    <td class="{{$attd_status}}">{{ucfirst($attendance_list->Subject)}}</td>
                    <td class="{{$attd_status}}">
                      {{ucfirst($attendance_list->Status)}}
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