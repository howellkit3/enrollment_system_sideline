<?php $asset = URL::asset('/'); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Saint Benilde College | </title>

  <!-- Bootstrap core CSS -->

  <link href="{{$asset}}gentella/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/animate.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{$asset}}gentella/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="{{$asset}}gentella/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="{{$asset}}gentella/css/floatexamples.css" rel="stylesheet" type="text/css" />
  <script src="{{$asset}}gentella/js/jquery.min.js"></script>
  <script src="{{$asset}}gentella/js/nprogress.js"></script>
  @yield('header-scripts')
    <style type="text/css">

      table{

        color: black;
      }

      thead th{

        background-color: black;
        color:white;
      }

      body{

        background: black;
      }

      .nav_title {
        
         background: black;
      }

      tfoot input {
          width: 100%;
          padding: 3px;
          box-sizing: border-box;
      }

      table.dataTable thead .sorting:after ,
      table.dataTable thead .sorting_asc:after,
      table.dataTable thead .sorting_desc:after

       {

        display:none;

      }

      .danger, #danger{

        background-color:rgba(255,57,46,.3);
        color: black;

      }


    </style> 
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view"> 

          <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('stbenilde.dashboard.index')}}" class="site_title"><i class="fa fa-university"></i> <span>Saint Benilde College</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{$asset}}gentella/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{Auth::user()->name}}</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />


          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li class="active"><a><i class="fa fa-sticky-note"></i>Attendance<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a  href="{{route('stbenilde.dashboard.index')}}"><h3>Index</h3></a> 
                    <li><a ><h3>Subject</h3></a>
                      <ul class="nav child_menu" style="display: none">
                        @foreach ($subject as $subject_list)
                          <li> <a href ="{{route('stbenilde.dashboard.attn_subj',$subject_list)}}">{{ucfirst($subject_list)}}</a></li>

                        @endforeach

                      </ul>
                    </li> 

                    <li><a ><h3>Date</h3></a>
                      <ul class="nav child_menu" style="display: none">
                        @foreach ($date as $date_list)

                          <li><a href ="{{route('stbenilde.dashboard.attn_date',$date_list)}}">{{ucfirst($date_list)}}</a></li>

                        @endforeach
                      </ul>
                    </li> 
                  </ul>
                </li>
    
                <li class="active"><a><i class="fa fa-calculator"></i>Grades<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href ="{{route('stbenilde.grade.index')}}"><h3>Index</h3></a>
                    </li>                    
                  </ul>
                </li>

                <li class="active"><a><i class="fa fa-pencil"></i>Quizzes<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href ="{{route('stbenilde.quiz.index')}}"><h3>Index</h3></a>
                    </li>                    
                  </ul>
                </li>
              
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->


          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->name}}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
<!--                   <li><a href="{{route('stbenilde.dashboard.changestudnum')}}"><i class="fa fa-user pull-right"></i> Change Student Number</a>
                  </li> -->
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      @yield('content')


    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="{{$asset}}gentella/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="{{$asset}}gentella/js/gauge/gauge.min.js"></script>
  <!-- bootstrap progress js -->
  <script src="{{$asset}}gentella/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="{{$asset}}gentella/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="{{$asset}}gentella/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="{{$asset}}gentella/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="{{$asset}}gentella/js/chartjs/chart.min.js"></script>

  <script src="{{$asset}}gentella/js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/date.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/flot/jquery.flot.resize.js"></script>
  <!-- worldmap -->
  <script type="text/javascript" src="{{$asset}}gentella/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="{{$asset}}gentella/js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <script src="{{$asset}}gentella/js/pace/pace.min.js"></script>
  <script src="{{$asset}}gentella/js/skycons/skycons.min.js"></script>


  @yield('footer-scripts')
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
