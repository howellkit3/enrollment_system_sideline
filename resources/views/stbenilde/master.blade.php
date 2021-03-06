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
  <link href="{{$asset}}gentella/css/icheck/flat/green.css" rel="stylesheet">
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

      .header{

        background: url('{{$asset}}gentella/images/stbenilde-header.jpg') no-repeat center;
        text-align: center;
        background-size: cover;
        border: solid;
        border: solid;
        height: 150px;

      }

      .logo{

        width: 90%;
        margin: 10px;
      }

      .header-mask{

        height: 100%;
        background-color: rgba(0,0,0,.3);
      }

     .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
      background-color: transparent;
      border-color: #337ab7;
  }


    </style> 
</head>


<body class="nav-md">

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view"> 

          <br>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
               <img class ="logo" alt="" border="0" src="{{$asset}}gentella/images/stbenilde.png" >
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
                    <li><a  href="{{route('stbenilde.attendance.index')}}"><h3>Index</h3></a> 
                    <li><a ><h3>Subject</h3></a>
                      <ul class="nav child_menu" style="display: none">
                        @foreach ($subject as $subject_list)
                          <li> <a href ="{{route('stbenilde.dashboard.attn_subj',$subject_list)}}">{{ucfirst($subject_list)}}</a></li>

                        @endforeach

                      </ul>
                    </li> 
                  </ul>
                </li>
    
                <li class="active"><a href ="{{route('stbenilde.grade.index')}}"><i class="fa fa-calculator"></i>Grades<span class="fa fa-chevron-down"></span></a>
                </li>

                <li class="active"><a href ="{{route('stbenilde.quiz.index')}}"><i class="fa fa-pencil"></i>Quizzes<span class="fa fa-chevron-down"></span></a>
                </li>

                <li class="active"><a href ="{{route('stbenilde.exam.index')}}"><i class="fa fa-pencil-square-o"></i>Exam<span class="fa fa-chevron-down"></span></a>
                </li>

                 <li class="active"><a href ="{{route('stbenilde.datapresentation.index')}}"><i class="fa fa-line-chart"></i>Data Presentation<span class="fa fa-chevron-down"></span></a>
                </li>

                <li class="active"><a href ="{{route('stbenilde.billing.index')}}"><i class="fa fa-money"></i>Billing<span class="fa fa-chevron-down"></span></a>
                </li>
              
              </ul>
            </div>

          </div>

        </div>
      </div>

      <!-- top navigation -->

      <div class="right_col" role="main">
<!--         <div class="nav_menu">
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
                  <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  <li><a href="{{route('stbenilde.dashboard.changestudnum')}}"><i class="fa fa-user pull-right"></i>Switch Account</a>
                  </li>

                  @if(Auth::user()->status == 'admin')
                  <li><a href="{{route('stbenilde.dashboard.admin')}}"><i class="fa fa-laptop pull-right"></i>Admin</a>
                  </li>
                  @endif

                </ul>
              </li>

            </ul>
          </nav>
        </div> -->

        <div class="row header">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars" style ="color:white;"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span style ="color:white;">
                  {{Auth::user()->name}} ({{$studid}})</span>
                  <span style ="color:white"class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  <li><a href="{{route('stbenilde.dashboard.changestudnum')}}"><i class="fa fa-user pull-right"></i>Switch Account</a>
                  </li>

                  @if(Auth::user()->status == 'admin')
                  <li><a href="{{route('stbenilde.dashboard.admin')}}"><i class="fa fa-laptop pull-right"></i>Admin</a>
                  </li>
                  @endif

                </ul>
              </li>

            </ul>
          </nav>
          <div class ="header-mask">
            <br>
            <div class="col-md-6 ">
              
              <img style ="width: 170px;" class ="logo" alt="" border="0" src="{{$asset}}gentella/images/educated.png" >
            </div>
            <div class="col-md-6 ">
                          
            </div>
             
          
            
          </div>
        </div>

<!--         <div class="row top_tiles">
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
        </div> -->


      
      <!-- /top navigation -->

      @yield('content')

    </div>
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
