<?php $asset = URL::asset('/'); ?> 
@extends('layouts.app')

<style>
    .navbar-default{

        display:none;
    }

    .container{

        margin-top: 5%;
    }

</style>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div style ="text-align:center;" class="form-group">

                <img style =" width:25%;" alt="" border="0" src="{{$asset}}gentella/images/stbenilde.png" >

                <br>

                <h1>Saint Benilde College</h1>

                <h3>Sign in using student number to get started.</h3>

            </div>

            <br><br>

            <div class="form-group">

                <label for="studnum" class="col-md-4 control-label">Student Number</label>

                <div class="col-md-6">
                    <input  type="studnum" class="form-control" name="studnum" value="{{ old('studnum') }}">
       
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Login
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </div>
            </div>
            </form>
        </div>

        <div class="col-md-6 ">
            <img alt="" border="0" src="{{$asset}}gentella/images/seniorhigh.jpg" >
        </div>
    </div>
</div>

@endsection
