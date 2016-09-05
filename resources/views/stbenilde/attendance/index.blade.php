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


    .center{

      text-align: center;

    }

    .absent{
        font-size: 25px;
    }

    canvas{

        border-radius: 10px;
    }

    .legend{
        margin:5px;
        border: solid;
        padding: 12px;
    }

  </style>

@section('content')

<div class ="container">

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="x_content">
                
                <h3>Attendance</h3>

                <div class ="row legend" >
                    <div class="col-md-6 absent ">
                        <h2>Legend</h2>
                            <div class ="row ">
                            <div class="col-md-6">
                            <canvas id="myCanvas" width="20%" height="20%" ></canvas>  Absent 
                            </div>
                            <div class="col-md-6">
                            <canvas id="myCanvas2" width="20%" height="20%" ></canvas>  Present 
                            </div>
                        </div>
                    </div>
                
                    <div class="col-md-6 absent ">
                        <h2>Total</h2>
                            <div class ="row ">
                            <div class="col-md-6" style ="color:#FFABAB;">
                            Absent: {{$absentctr}}
                            </div>
                            <div class="col-md-6" style ="color:#6EB5FF;">
                            Present: {{$presentctr}}
                            </div>
                        </div>
                    </div>
                
                </div>

            <div class="x_panel">
                <div>
                   
                    <div id='calendar'></div> <br>

                    </div>
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

    .fc-event-container{

        text-align:center;

    }

    .fc-widget-header{

        background-color: rgb(100, 100, 100);
    }

    .fc-time{

        display:none !important;
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

        var data = {!!$arr!!};

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

    var canvas = document.getElementById('myCanvas');
    var context = canvas.getContext('2d');
    var centerX = canvas.width / 2;
    var centerY = canvas.height / 2;
    var radius = 70;

    context.beginPath();
    context.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
    context.fillStyle = '#FFABAB';
    context.fill();
    context.lineWidth = 5;
    context.strokeStyle = '#003300';
    context.stroke();

    var canvas2 = document.getElementById('myCanvas2');
    var context2 = canvas2.getContext('2d');
    var centerX2 = canvas2.width / 2;
    var centerY2 = canvas2.height / 2;
    var radius2 = 70;

    context2.beginPath();
    context2.arc(centerX, centerY2, radius2, 0, 2 * Math.PI, false);
    context2.fillStyle = '#6EB5FF';
    context2.fill();
    context2.lineWidth = 5;
    context2.strokeStyle = '#003300';
    context2.stroke();


</script>

@endsection

