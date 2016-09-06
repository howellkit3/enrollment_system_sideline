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
<br>
  <div class ="container">
    <div class="x_panel">
       <h3>Billing</h3>
      <div class="row">
         <br>
        <div class="col-md-10 col-md-offset-1">
          <div class="table-responsive">
               <table id="mytable" class="display" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th class="column-title">Billing Number</th>
                      <th class="column-title">Date</th>
                      <th class="column-title">Amount</th>
                      <th class="column-title">Current Balance</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($billing as $billing_list)
                    <?php $ctr++;?>

                
                  <tr class="even pointer">
                    <td id = "">{{$billing_list->BillingNo}}</td>
                    <td id = "">{{$billing_list->Date}}</td>
                    <td id = "">{{$billing_list->Amount}}</td>
                    <td id = "">{{$billing_list->CurrentBalance}}</td>
                    
                  
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

    // DataTable
    var table = $('#mytable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
    } );
} );
  </script>

@endsection