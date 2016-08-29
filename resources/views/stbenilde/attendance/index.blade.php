<?php $asset = URL::asset('/'); 
 ?> 

@extends('stbenilde.master')

@section('title', 'dashboard')

  <link href="{{$asset}}gentella/js/datatables/jquery.dataTables.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/datatables/css/jquery10.dataTables.min.css" rel="stylesheet">

    <link href="{{$asset}}gentella/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{$asset}}gentella/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{$asset}}gentella/css/nprogress/nprogress.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="{{$asset}}gentella/css/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="{{$asset}}gentella/css/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

    <!-- Custom styling plus plugins -->
    <link href="{{$asset}}gentella/css/css/custom.min.css" rel="stylesheet">

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
         <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="x_content">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>

@endsection 

@section('header-scripts')

    <link href="{{$asset}}gentella/css/calendar/fullcalendar.css" rel="stylesheet">
    <link href="{{$asset}}gentella/css/calendar/fullcalendar.print.css" rel="stylesheet" media="print">
    <style type="text/css">
    .cchart{
        padding: 5px;
        background-color: #0F9D58; 
        border-radius: 1px;
        color: #fff;     
    }
    .fst{
        background-color: #ee8823;
    }
    .ptd{
        background-color: #589796;
    }
    #calendar{
        margin-top: 11px;
    }
    </style>
@endsection

@section('footer-scripts')

<script src="{{$asset}}gentella/js/moment/moment.min.js"></script>
<script src="{{$asset}}gentella/js/calendar/fullcalendar.min.js"></script>

         <script>
            $(window).load(function () {

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var data = 's';
        console.log(data);
        var started;
        var categoryClass;

        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: data,
            eventClick: function(event) {
                if (event.url) {
                    window.open(event.url);
                    return false;
                }
            }
        });
    });

</script>
@endsection


  
