<?php $asset = URL::asset('/'); 
 ?> 

@extends('stbenilde.master')

@section('title', 'dashboard')

<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
  font-family: "Open Sans", Arial;
  background: #EDEDED;
}
main {
  width: 100%;
  margin: 10px auto;
  padding: 10px 20px 30px;
  background: #FFF;
  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
  text-align: center;
}
p {
  margin-top: 2rem;
  font-size: 13px;
}
#bar-chart {
  width: 100%;
  height: 300px;

}


#pie-chart {
  width: 100%;
  height: 250px;

}

</style>

@section('content')
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<main>
  <h2>Attendance and Grade Chart</h2>

  <br><br>

  <h4>Grades</h4>
  <div id="bar-chart"></div>

  <br><br><br><br>

  <h4>Attendance</h4>
  <div id="pie-chart"></div>
    
</main>

<?php 
    $data = '["Grade", "Subject"]';
   
    foreach ($grade as $key => $value) {
        //print_r($value->Subject); exit;
        $data .= ',["' . $value->Subject .'",'. $value->Grade .']';

    }
   //print_r($data); exit; 
 // $data = ("['Grade', 'Subject'],
 //    ['Sun',  1050],
 //    ['Mon',  1370],
 //    ['Tue',  660],
 //    ['Wed',  1030],
 //    ['Thu',  1000],
 //    ['Fri',  1170],
 //    ['Sat',  660] ");

?>
@endsection 

@section('header-scripts')


@endsection

@section('footer-scripts')

<script>

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);
function drawCharts() {
  
  var barData = google.visualization.arrayToDataTable([
    {!!$data!!}
  ]);

  // set bar chart options
  var barOptions = {
    focusTarget: 'category',
    backgroundColor: 'transparent',
    colors: ['cornflowerblue', 'tomato'],
    fontName: 'Open Sans',
    chartArea: {
      left: 50,
   
      width: '100%',
      height: '70%'
    },
    bar: {
      groupWidth: '80%'
    },
    hAxis: {
      textStyle: {
        fontSize: 11
      }
    },
    vAxis: {
      minValue: 0,
      maxValue: 100,
      baselineColor: '#DDD',
      gridlines: {
        color: '#DDD',
        count: 4
      },
      textStyle: {
        fontSize: 11
      }
    },
    legend: {
      position: 'bottom',
      textStyle: {
        fontSize: 12
      }
    },
    animation: {
      duration: 1200,
      easing: 'out',
            startup: true
    }
  };
  // draw bar chart twice so it animates
  var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
  //barChart.draw(barZeroData, barOptions);
  barChart.draw(barData, barOptions);
  
 
  
  // BEGIN PIE CHART
  
  // pie chart data
  var pieData = google.visualization.arrayToDataTable([
    ['Status', 'Count'],
    ['Excuse',     {!!$excusectr!!}],
    ['Present',   {!!$presentctr!!}],
    ['Absent',   {!!$absentctr!!}]
  ]);
  // pie chart options
  var pieOptions = {
    backgroundColor: 'transparent',
    pieHole: 0.4,
    colors: [ "cornflowerblue", 
              "olivedrab", 
              "orange", 
              "tomato", 
              "crimson", 
              "purple", 
              "turquoise", 
              "forestgreen", 
              "navy", 
              "gray"],
    pieSliceText: 'value',
    tooltip: {
      text: 'percentage'
    },
    fontName: 'Open Sans',
    chartArea: {
      width: '100%',
      height: '94%'
    },
    legend: {
      textStyle: {
        fontSize: 13
      }
    }
  };
  // draw pie chart
  var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
  pieChart.draw(pieData, pieOptions);
}


</script>

@endsection

