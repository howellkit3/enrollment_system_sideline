<?php $asset = URL::asset('/'); ?> 
@extends('layouts.app')

<style>
    .navbar-default{

        display:none;
    }

    .container{

        margin-top: 5%;
    }

    /* Source: http://tutorialzine.com/2013/02/animated-css3-photo-stack/ */

@charset "UTF-8";

/*-------------------------
    Simple reset
--------------------------*/


*{
    margin:0;
    padding:0;
}


/*-------------------------
    General Styles
--------------------------*/


html{
    background-color: white!important;
    
    background-image: -moz-radial-gradient(circle closest-corner, #f6f9fa 0%, #d6dee1 100%);
    background-image: -webkit-radial-gradient(circle closest-corner, #f6f9fa 0%, #d6dee1 100%);
    background-image: radial-gradient(circle closest-corner, #f6f9fa 0%, #d6dee1 100%);
}

body{
    font:14px/1.3 'Segoe UI',Arial, sans-serif;
    position:relative;
    min-height:500px;
}

a, a:visited {
    outline:none;
    color:#1c4f64;
}

a:hover{
    text-decoration:none;
}

section, footer, header{
    display: block;
}


/*----------------------------
    Photos
-----------------------------*/


#photos{
    margin:0 auto;
    padding-top:20px;
    width:450px;
    position:relative;
}

#photos li{
    position:absolute;
    width:450px;
    height:450px;
    overflow:hidden;
    background-color:#fff;
    box-shadow: 1px 1px 1px #ccc;
    z-index:10;
    
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
}

#photos li a{
    position:absolute;
    top:6px;
    left:6px;
    right:6px;
    bottom:6px;
    background-size: cover;
    text-indent:-9999px;
    overflow:hidden;
}


/*----------------------------
    Previous / Next arrows
-----------------------------*/


a.arrow{
    width:33px;
    height:33px;
    background:url('../img/arrows.png') no-repeat;
    position:absolute;
    top:340px;
    opacity:0.9;
}

a.arrow:hover{
    opacity:1;
}

a.arrow.previous{
    left:50%;
    background-position:0 0;
    margin-left:-340px;
}

a.arrow.next{
    right:50%;
    background-position:-33px 0;
    margin-right:-340px;
}


/*----------------------------
    The Demo Footer
-----------------------------*/


footer{
    background-color: #080808;
    bottom: 0;
    box-shadow: 0 -1px 2px rgba(0,0,0,0.4);
    height: 40px;
    left: 0;
    position: fixed;
    width: 100%;
    z-index: 100000;
}

footer h2{
    font-size: 14px;
    font-weight: normal;
    position: absolute;
    top:0;
    left: 50%;
    bottom:0;
    margin-left: -420px;
    padding:13px 20px 0;
    border:1px solid #000;
    border-width:0 1px;
    background-color:rgba(0,0,0,0.6);
    box-shadow:0 0 5px #000 inset;
    line-height: 1;
    margin-top: 0;
}

footer h2 a{
    color: #EEEEEE !important;
    text-decoration:none !important;
}

footer h2 i{
    font-style:normal;
    color:#888;
}

#tzine-download{
    opacity:0.9;
    background-color:#257691;
    font-size:11px;
    text-align:center;
    text-transform:uppercase;
    width:150px;
    height:28px;
    line-height:28px;
    text-decoration:none !important;

    display: inline-block;
    border-radius: 2px;
    color: #fff !Important;
    font-weight: bold;
    box-shadow: 0 -1px 2px #1e5e74 inset;

    border-top:1px solid #26849c;

    text-shadow:1px 1px 1px #1e6176;
    margin-top:6px;
}

#tzine-download:hover{
    opacity:1;
}

#tzine-actions{
    position:absolute;
    top:0;
    width:500px;
    right:50%;
    margin-right:-420px;
    text-align:right;
}

#tzine-actions iframe{
    display: inline-block;
    height: 21px;
    width: 95px;
    position: relative;
    float: left;
    margin-top: 11px;
}


/*!
Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2014 Daniel Eden
*/

.animated {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
}

@-webkit-keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
            transform: translate3d(0,-4px,0);
  }
}

@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
            transform: translate3d(0,-4px,0);
  }
}

.bounce {
  -webkit-animation-name: bounce;
          animation-name: bounce;
  -webkit-transform-origin: center bottom;
      -ms-transform-origin: center bottom;
          transform-origin: center bottom;
}

@-webkit-keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

@keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

.flash {
  -webkit-animation-name: flash;
          animation-name: flash;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.pulse {
  -webkit-animation-name: pulse;
          animation-name: pulse;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
          animation-name: rubberBand;
}

@-webkit-keyframes shake {
  0%, 100% {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
  }
}

@keyframes shake {
  0%, 100% {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
  }
}

.shake {
  -webkit-animation-name: shake;
          animation-name: shake;
}

@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
  }

  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg);
  }

  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
            transform: rotate3d(0, 0, 1, 0deg);
  }
}

.swing {
  -webkit-transform-origin: top center;
      -ms-transform-origin: top center;
          transform-origin: top center;
  -webkit-animation-name: swing;
          animation-name: swing;
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  100% {
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.tada {
  -webkit-animation-name: tada;
          animation-name: tada;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: none;
            transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: none;
            transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

.wobble {
  -webkit-animation-name: wobble;
          animation-name: wobble;
}

@-webkit-keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

@keyframes bounceIn {
  0%, 20%, 40%, 60%, 80%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
  }
}

.bounceIn {
  -webkit-animation-name: bounceIn;
          animation-name: bounceIn;
  -webkit-animation-duration: .75s;
          animation-duration: .75s;
}

@-webkit-keyframes bounceInDown {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes bounceInDown {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

.bounceInDown {
  -webkit-animation-name: bounceInDown;
          animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes bounceInLeft {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
          animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes bounceInRight {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0);
  }

  100% {
    -webkit-transform: none;
            transform: none;
  }
}

.bounceInRight {
  -webkit-animation-name: bounceInRight;
          animation-name: bounceInRight;
}

@-webkit-keyframes bounceInUp {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}

@keyframes bounceInUp {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}

.bounceInUp {
  -webkit-animation-name: bounceInUp;
          animation-name: bounceInUp;
}

@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }
}

@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }
}

.bounceOut {
  -webkit-animation-name: bounceOut;
          animation-name: bounceOut;
  -webkit-animation-duration: .75s;
          animation-duration: .75s;
}

@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
  }
}

@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
  }
}

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
          animation-name: bounceOutDown;
}

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
  }
}

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
  }
}

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
          animation-name: bounceOutLeft;
}

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
  }
}

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
  }
}

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
          animation-name: bounceOutRight;
}

@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
  }
}

@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
  }
}

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
          animation-name: bounceOutUp;
}

@-webkit-keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
}

@keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
}

.fadeIn {
  -webkit-animation-name: fadeIn;
          animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
          animation-name: fadeInDown;
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
          animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
          animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
          animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
          animation-name: fadeInRight;
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
          animation-name: fadeInRightBig;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
          animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeOut {
  0% {opacity: 1;}
  100% {opacity: 0;}
}

@keyframes fadeOut {
  0% {opacity: 1;}
  100% {opacity: 0;}
}

.fadeOut {
  -webkit-animation-name: fadeOut;
          animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
  }
}

@keyframes fadeOutDown {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
          animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0);
  }
}

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
          animation-name: fadeOutDownBig;
}

@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
}

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
          animation-name: fadeOutLeft;
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0);
  }
}

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
          animation-name: fadeOutLeftBig;
}

@-webkit-keyframes fadeOutRight {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
}

@keyframes fadeOutRight {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
}

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
          animation-name: fadeOutRight;
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0);
  }
}

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
          animation-name: fadeOutRightBig;
}

@-webkit-keyframes fadeOutUp {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
  }
}

@keyframes fadeOutUp {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
          animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
  }
}

@keyframes fadeOutUpBig {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0);
  }
}

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
          animation-name: fadeOutUpBig;
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
            transform: perspective(400px) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }

  100% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
            transform: perspective(400px) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }

  100% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }
}

.animated.flip {
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  -webkit-animation-name: flip;
          animation-name: flip;
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
          backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
          animation-name: flipInX;
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
            transition-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  100% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }
}

.flipInY {
  -webkit-backface-visibility: visible !important;
          backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
          animation-name: flipInY;
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

.flipOutX {
  -webkit-animation-name: flipOutX;
          animation-name: flipOutX;
  -webkit-animation-duration: .75s;
          animation-duration: .75s;
  -webkit-backface-visibility: visible !important;
          backface-visibility: visible !important;
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
            transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

.flipOutY {
  -webkit-backface-visibility: visible !important;
          backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
          animation-name: flipOutY;
  -webkit-animation-duration: .75s;
          animation-duration: .75s;
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    -webkit-transform: skewX(20deg);
            transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: skewX(-5deg);
            transform: skewX(-5deg);
    opacity: 1;
  }

  100% {
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
          animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
}

@-webkit-keyframes lightSpeedOut {
  0% {
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  0% {
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
          animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in;
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

.rotateIn {
  -webkit-animation-name: rotateIn;
          animation-name: rotateIn;
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
          animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
          animation-name: rotateInDownRight;
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
          animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: none;
            transform: none;
    opacity: 1;
  }
}

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
          animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
            transform-origin: center;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
            transform-origin: center;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: center;
            transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

.rotateOut {
  -webkit-animation-name: rotateOut;
          animation-name: rotateOut;
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
          animation-name: rotateOutDownLeft;
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
          animation-name: rotateOutDownRight;
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
          animation-name: rotateOutUpLeft;
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    opacity: 1;
  }

  100% {
    -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
          animation-name: rotateOutUpRight;
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
            transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
  }

  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
            transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
  }

  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
            transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
            transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
  }

  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
            transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
  }

  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
            transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
    opacity: 1;
  }

  100% {
    -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

.hinge {
  -webkit-animation-name: hinge;
          animation-name: hinge;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

.rollIn {
  -webkit-animation-name: rollIn;
          animation-name: rollIn;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

@keyframes rollOut {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

.rollOut {
  -webkit-animation-name: rollOut;
          animation-name: rollOut;
}

@-webkit-keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

@keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
          animation-name: zoomIn;
}

@-webkit-keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInDown {
  -webkit-animation-name: zoomInDown;
          animation-name: zoomInDown;
}

@-webkit-keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
          animation-name: zoomInLeft;
}

@-webkit-keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInRight {
  -webkit-animation-name: zoomInRight;
          animation-name: zoomInRight;
}

@-webkit-keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInUp {
  -webkit-animation-name: zoomInUp;
          animation-name: zoomInUp;
}

@-webkit-keyframes zoomOut {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  100% {
    opacity: 0;
  }
}

@keyframes zoomOut {
  0% {
    opacity: 1;
  }

  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3);
  }

  100% {
    opacity: 0;
  }
}

.zoomOut {
  -webkit-animation-name: zoomOut;
          animation-name: zoomOut;
}

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
          animation-name: zoomOutDown;
}

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
            transform-origin: left center;
  }
}

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
            transform-origin: left center;
  }
}

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
          animation-name: zoomOutLeft;
}

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
            transform: scale(.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
            transform-origin: right center;
  }
}

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
            transform: scale(.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
            transform-origin: right center;
  }
}

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
          animation-name: zoomOutRight;
}

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
            animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
          animation-name: zoomOutUp;
}

@-webkit-keyframes slideInDown {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes slideInDown {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

.slideInDown {
  -webkit-animation-name: slideInDown;
          animation-name: slideInDown;
}

@-webkit-keyframes slideInLeft {
  0% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

@keyframes slideInLeft {
  0% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

.slideInLeft {
  -webkit-animation-name: slideInLeft;
          animation-name: slideInLeft;
}

@-webkit-keyframes slideInRight {
  0% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

@keyframes slideInRight {
  0% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
          animation-name: slideInRight;
}

@-webkit-keyframes slideInUp {
  0% {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes slideInUp {
  0% {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

.slideInUp {
  -webkit-animation-name: slideInUp;
          animation-name: slideInUp;
}

@-webkit-keyframes slideOutDown {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
}

@keyframes slideOutDown {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
}

.slideOutDown {
  -webkit-animation-name: slideOutDown;
          animation-name: slideOutDown;
}

@-webkit-keyframes slideOutLeft {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}

@keyframes slideOutLeft {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}

.slideOutLeft {
  -webkit-animation-name: slideOutLeft;
          animation-name: slideOutLeft;
}

@-webkit-keyframes slideOutRight {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
}

@keyframes slideOutRight {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
}

.slideOutRight {
  -webkit-animation-name: slideOutRight;
          animation-name: slideOutRight;
}

@-webkit-keyframes slideOutUp {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
}

@keyframes slideOutUp {
  0% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }

  100% {
    visibility: hidden;
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
}

.slideOutUp {
  -webkit-animation-name: slideOutUp;
          animation-name: slideOutUp;
}


</style>

@section('content')

<div class="container">
<br><br>
    <div class="row">
        <div class="col-md-6 ">
            
            <ul id="photos">
                <li><a href="http://www.flickr.com/photos/brockwhittaker/8500935165/" style="background-image:url({{$asset}}gentella/images/slide1.jpg)">Landscape 5</a></li>
                <li><a href="http://www.flickr.com/photos/31538238@N07/8412935103/" style="background-image:url({{$asset}}gentella/images/slide2.jpg)">Landscape 4</a></li>
                <li><a href="http://www.flickr.com/photos/zanthia/8461978995/" style="background-image:url({{$asset}}gentella/images/slide3.jpg)">Landscape 3</a></li>
                <li><a href="http://www.flickr.com/photos/zanthia/8461978995/" style="background-image:url({{$asset}}gentella/images/slide4.jpg)">Landscape 1</a></li>
                <li><a href="http://www.flickr.com/photos/zanthia/8461978995/" style="background-image:url({{$asset}}gentella/images/slide5.jpg)">Landscape 2</a></li>
                <li><a href="http://www.flickr.com/photos/zanthia/8461978995/" style="background-image:url({{$asset}}gentella/images/slide6.jpg)">Landscape 6</a></li>
                <li><a href="http://www.flickr.com/photos/zanthia/8461978995/" style="background-image:url({{$asset}}gentella/images/slide7.jpg)">Landscape 7</a></li>
            </ul>
            
    
            <a href="#" class="arrow previous"></a>
            <a href="#" class="arrow next"></a>

            <!-- Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        </div>

        <div class="col-md-6 ">
            
        <div class ="x-panel">
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
        </div>
    </div>
    <br><br>
</div>

<script>

    $(function() {

    var exits = ['fadeOut', 'fadeOutDown', 'fadeOutUpBig', 'bounceOut', 'bounceOutDown', 'hinge',
                'bounceOutUp', 'bounceOutLeft', 'rotateOut', 'rotateOutUpLeft', 'lightSpeedOut', 'rollOut'];

    var entrances = ['fadeIn', 'fadeInDown', 'fadeInRight', 'bounceIn', 'bounceInRight', 'rotateIn',
                     'rotateInDownLeft', 'lightSpeedIn', 'rollIn', 'bounceInDown' ]; 
    
    var photos = $('#photos'),
        ignoreClicks = false;

    $('.arrow').click(function(e, simulated){
        if(ignoreClicks){
            
            // If clicks on the arrows should be ignored,
            // stop the event from triggering the rest 
            // of the handlers
            
            e.stopImmediatePropagation();
            return false;
        }
        
        // Otherwise allo this click to proceed,
        // but raise the ignoreClicks flag
        
        ignoreClicks = true;
        
        if(!simulated){
            // Once the user clicks on the arrows,
            // stop the automatic slideshow
            clearInterval(slideshow);
        }
    });

    // Listen for clicks on the next arrow
    $('.arrow.next').click(function(e){
        
        e.preventDefault();
        
        // The topmost element
        var elem = $('#photos li:last');
        
        // Apply a random exit animation
        elem.addClass('animated')
            .addClass( exits[Math.floor(exits.length*Math.random())] );
        
        setTimeout(function(){
            
            // Reset the classes
            elem.attr('class','').prependTo(photos);
            
            // The animation is complate!
            // Allow clicks again:
            ignoreClicks = false;
            
        },1000);
    });

    // Listen for clicks on the previous arrow
    $('.arrow.previous').click(function(e){
        
        e.preventDefault();
        
        // The bottom-most element
        var elem = $('#photos li:first');
        
        // Move the photo to the top, and 
        // apply a random entrance animation
        
        elem.appendTo(photos)
            .addClass('animated')
            .addClass( entrances[Math.floor(entrances.length*Math.random())] );
        
        setTimeout(function(){
            
            // Remove the classess
            elem.attr('class','');
            
            // The animation is complate!
            // Allow clicks again:
            ignoreClicks = false;
            
        },1000);
    });


    // Start an automatic slideshow
    var slideshow = setInterval(function(){
        
        // Simulate a click every 1.5 seconds
        $('.arrow.next').trigger('click',[true]);
        
    }, 1500);
    
});


</script>


@endsection

