<?php $asset = URL::asset('/'); 
$ctr = 0;?> 
@extends('stbenilde.master')

@section('title', 'dashboard')

  <link href="{{$asset}}gentella/js/datatables/jquery.dataTables.min.css" rel="stylesheet">
  <link href="{{$asset}}gentella/css/datatables/css/jquery10.dataTables.min.css" rel="stylesheet">

  <style>

    .right_col {
      height:100%;
    }

  </style>

@section('content')
  <div class ="container">
      <br>
      <div class="row">
        
        <div class="col-md-10 col-md-offset-1">

            <br>

            <h1>Change Student Number</h1>

            <br>

            <form class="form-horizontal form-label-left " method="post" action="{{route('stbenilde.dashboard.updatestudnum')}}">

              <input type="hidden" name="_method" value="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

              <input type="hidden" name="id" value="{{$auth->id}}">

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input  class="form-control" value = "{{$auth->email}}" name = "email" aria-describedby="emailHelp" disabled>
                <small id="emailHelp" class="form-text text-muted">This serve as your username</small>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name = "password"  class="form-control" value = "{{$auth->password}}" disabled>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Student Number</label>
                <input  class="form-control" name = "studnum" value = "{{$auth->studnum}}" aria-describedby="emailHelp" style ="background:white;">
                <small id="emailHelp" class="form-text text-muted">Please check your child's Student Number.</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Registration Date</label>
                <input  class="form-control" name = "updated_at"  value = "{{$auth->created_at}}" aria-describedby="emailHelp" disabled>
              </div>
              
              <br>

              <div class="form-group">
                <label><I>Change Student number can be used especially for those Guardians who have more than one student in our school. We are happy to serve you.</I></label>
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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