<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            /*basic reset*/
        * {margin: 0; padding: 0;}

        html {
        height: 100%;
        /*Image only BG fallback*/
        background: #e9e9e9;
        }

        body {
        font-family: montserrat, arial, verdana;
            width: 100%;
        overflow-x: hidden;
        }
        /*form styles*/
        .steps {
            width: 675px;
        margin: 50px auto;
        position: relative;
        }

        .steps fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 17px 41px -21px rgb(0, 0, 0);
        padding: 20px 30px;
        border-top: 9px solid #7B1FA2;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;
        
        /*stacking fieldsets above each other*/
        position: absolute;
        }
        /*Hide all except first fieldset*/
        .steps fieldset:not(:first-of-type) {
        display: none;
        }
        /*inputs*/
        .steps label{
        color: #333333;
        text-align: left !important;
        font-size: 15px;
        font-weight: 200;
        padding-bottom: 7px;
        padding-top: 12px;
        display: inline-block;
        }


        .steps input, .steps textarea {
        outline: none;
        display: block;
        width: 100%;
        margin: 0 0 20px;
        padding: 10px 15px;
        border: 1px solid #d9d9d9;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color: #837E7E;
        font-family: "Roboto";
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 14px;
        font-wieght: 400;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
        }

        .steps input:focus, .steps textarea:focus{
        color: #333333;
        border: 1px solid #7B1FA2;
        }

        .error1{
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -moz-box-shadow: 0 0 0 transparent;
        -webkit-box-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        position: absolute;
        left: 525px;
        margin-top: -58px;
        padding: 0 10px;
        height: 39px;
        display: block;
        color: #ffffff;
        background: #e62163;
        border: 0;
        font: 14px Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;
        line-height: 39px;
        white-space: nowrap;

        }

        .error1:before{
            width: 0;
        height: 0;
        left: -8px;
        top: 14px;
        content: '';
        position: absolute;
        border-top: 6px solid transparent;
        border-right: 8px solid #e62163;
        border-bottom: 6px solid transparent;
        }

        .error-log{
            margin: 5px 5px 5px 0;
        font-size: 19px;
        position: relative;
        bottom: -2px;
        }

        .question-log {
        margin: 5px 1px 5px 0;
        font-size: 15px;
        position: relative;
        bottom: -2px;
        }

        /*buttons*/
        .steps .action-button, .action-button {
        width: 100px !important;
        background: #7B1FA2;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px auto;
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
        display: block;
        }

        .steps .next, .steps .submit{
            float: right;
        }

        .steps .previous{
        float:left;
        }

        .steps .action-button:hover, .steps .action-button:focus, .action-button:hover, .action-button:focus {
        background:#9F2AD0;;
        }

        .steps .explanation{
        display: block;
        clear: both;
        width: 540px;
        background: #f2f2f2;
        position: relative;
        margin-left: -30px;
        padding: 22px 0px;
        margin-bottom: -10px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        top: 10px;
        text-align: center;
        color: #333333;
        font-size: 12px;
        font-weight: 200;
        cursor:pointer;
        }


        /*headings*/
        .fs-title {
        text-transform: uppercase;
            margin: 0 0 5px;
            line-height: 1;
            color: #7B1FA2;
            font-size: 18px;
            font-weight: 400;
            text-align:center;
        }
        .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #837E7E;
        margin-bottom: 20px;
        text-align: center;
        }
        /*progressbar*/
        #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
        width:100%;
        text-align: center;
        }
        #progressbar li {
        list-style-type: none;
            color: rgb(51, 51, 51);
        text-transform: uppercase;
        font-size: 9px;
        width: 20%;
        float: left;
        position: relative;
        }
        #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
        }
        /*progressbar connectors*/
        #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1; /*put it behind the numbers*/
        }
        #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none; 
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before,  #progressbar li.active:after{
        background: #7B1FA2;
        color: white;
        }


        /* my modal */

        .modal p{
        font-size: 15px;
        font-weight: 100;
        font-family: sans-serif;
        color: #3C3B3B;
        line-height: 21px;
        }

        .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 50%;
        max-width: 630px;
        min-width: 320px;
        height: auto;
        z-index: 2000;
        visibility: hidden;
        -moz-backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
        .modal.modal-show {
        visibility: visible;
        }
        .lt-ie9 .modal {
        top: 0;
        margin-left: -315px;
        }

        .modal-content {
        background: #ffffff;
        position: relative;
        margin: 0 auto;
        padding: 40px;
        border-radius: 3px;
        }

        .modal-overlay {
        background: #000000;
        position: fixed;
        visibility: hidden;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        -moz-transition-property: visibility, opacity;
        -o-transition-property: visibility, opacity;
        -webkit-transition-property: visibility, opacity;
        transition-property: visibility, opacity;
        -moz-transition-delay: 0.5s, 0.1s;
        -o-transition-delay: 0.5s, 0.1s;
        -webkit-transition-delay: 0.5s, 0.1s;
        transition-delay: 0.5s, 0.1s;
        -moz-transition-duration: 0, 0.5s;
        -o-transition-duration: 0, 0.5s;
        -webkit-transition-duration: 0, 0.5s;
        transition-duration: 0, 0.5s;
        }
        .modal-show .modal-overlay {
        visibility: visible;
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
        opacity: 0.6;
        -moz-transition: opacity 0.5s;
        -o-transition: opacity 0.5s;
        -webkit-transition: opacity 0.5s;
        transition: opacity 0.5s;
        }

        /*slide*/
        .modal[data-modal-effect|=slide] .modal-content {
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        -moz-transition: all 0.5s 0;
        -o-transition: all 0.5s 0;
        -webkit-transition: all 0.5s 0;
        transition: all 0.5s 0;
        }
        .modal[data-modal-effect|=slide].modal-show .modal-content {
        filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
        opacity: 1;
        -moz-transition: all 0.5s 0.1s;
        -o-transition: all 0.5s 0.1s;
        -webkit-transition: all 0.5s;
        -webkit-transition-delay: 0.1s;
        transition: all 0.5s 0.1s;
        }
        .modal[data-modal-effect=slide-top] .modal-content {
        -moz-transform: translateY(-300%);
        -ms-transform: translateY(-300%);
        -webkit-transform: translateY(-300%);
        transform: translateY(-300%);
        }
        .modal[data-modal-effect=slide-top].modal-show .modal-content {
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
        }


        /* RESPONSIVE */

        /* moves error logs in tablet/smaller screens */

        @media (max-width:1000px){

        /*brings inputs down in size */
        .steps input, .steps textarea {
        outline: none;
        display: block;
        width: 100% !important;
        }

        /*brings errors in */
        .error1 {
        left: 345px;
        margin-top: -58px;
        }




        }


        @media (max-width:675px){
        /*mobile phone: uncollapse all fields: remove progress bar*/

        .steps {
        width: 100%;
        margin: 50px auto;
        position: relative;
        }

        #progressbar{
        display:none;
        }

        /*move error logs */
        .error1 {
        position: relative;
        left: 0 !important;
        margin-top: 24px;
        top: -11px;
        }

        .error1:before {
        width: 0;
        height: 0;
        left: 14px;
        top: -14px;
        content: '';
        position: absolute;
        border-left: 6px solid transparent;
        border-bottom: 8px solid #e62163;
        border-right: 6px solid transparent;
        }

        /*show hidden fieldsets */
        .steps fieldset:not(:first-of-type) {
        display: block;
        }

        .steps fieldset{
        position:relative;
        width: 100%;
        margin:0 auto;
        margin-top: 45px;
        }

        .steps .next, .steps .previous{
        display:none;
        }

        .steps .explanation{
        display:none;
        }

        .steps .submit {
        float: right;
        margin: 28px auto 10px;
        width: 100% !important;
        }

        }



        /* Info */
        .info {
        width: 300px;
        margin: 35px auto;
        text-align: center;
        font-family: 'roboto', sans-serif;
        }

        .info h1 {
        margin: 0;
        padding: 0;
        font-size: 28px;
        font-weight: 400;
        color: #333333;
        padding-bottom: 5px;

        }
        .info span {
        color:#666666;
        font-size: 13px;
        margin-top:20px;
        }
        .info span a {
        color: #666666;
        text-decoration: none;
        }
        .info span .fa {
        color: rgb(226, 168, 16);
        font-size: 19px;
        position: relative;
        left: -2px;
        }

        .info span .spoilers {
        color: #999999;
        margin-top: 5px;
        font-size: 10px;
        }

    </style>
    
      <style>
                @import 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300';

        $padding:30px;

        * { box-sizing: border-box; }

       
        .container {
        perspective: 800px;

        /* Styling */  
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        text-transform: uppercase;
        letter-spacing: 4px;

        /* Center it */
        position: absolute;
        top: 50%; 
        left: 50%;
        transform: translate(-50%, -50%);
        }
        .card {
        /* Styling */
        width: 500px;
        height: 300px;
        background: rgb(20,20,20);
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);  

        /* Card flipping effects */
        transform-style: preserve-3d;
        transition: 0.6s; 
        }
        .side {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        /* Fix Chrome rendering bug */
        transform: rotate(0deg) translateZ(1px);
        }

        /* Flip the card on hover */
        .container:hover .card,
        .back {
        transform: rotateY(-180deg) translateZ(1px);
        }

        /* Front styling */
        .front {
        /* Center the name + outline (almost) */
        line-height: 390px; /* Height - some (because visual center is a little higher than actual center) */
        text-align: center;
        }
        .logo {
        outline: 1px solid #19F6E8;
        display: inline-block;
        padding: 15px 40px;

        text-transform: uppercase;
        font-family: 'Roboto', sans-serif;
        font-size: 1.4em;
        font-weight: normal;
        line-height: 32px;
        letter-spacing: 8px;
        }

        /* Back styling */
        .back {
        background: #15CCC0;
        padding: $padding;
        }
        .name {
        color: #3B3B3B;
        margin-bottom: 0;
        }
        p {
        margin: 0.8em 0;
        }
        .info {
        position: absolute;
        bottom: $padding;
        left: $padding;
        color: #3b3b3b;
        }
        .property {
        color: #fff;
        }

        /* Make semi-responsive */
        @media (max-width:700px) {
        .card { transform: scale(.5); }
        .container:hover .card { transform: scale(.5) rotateY(-180deg) translateZ(1px); }
        }
      </style>
</head>
<body>

    <form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
        <ul id="progressbar">
         
            @foreach ($steps as $step)
              <li class=" @if( $step->order <= $project->step->order) active @endif" >{{$step->name}}</li>
            @endforeach 
     
          
        </ul>
    </form>

    <div class="container">
        @foreach ($links as $link)
        <div class="card">
          
          <div class="front side">
            <h1 class="logo">{{$link->role}}</h1>
          </div>
          
          <div class="back side">
            <h3 class="name">{{$link->name}}</h3>
            {{-- <div>Front-end developer</div>       --}}
            <div class="info">
              <p><span class="property">Email: </span>{{$link->email}}</p>
              <p><span class="property">password: </span>{{$link->password}}</p>
              <p><span  class="property">Website: </span> <a href="{{$link->url}}">{{$link->name}}</a></p>
            </div>
          </div>
      
        </div>
        @endforeach 
      </div>
<script>
        
    $(document).ready(function() {
        var current_fs, next_fs, previous_fs;
        var left, opacity, scale;
        var animating;
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        $(".next").click(function() {
            $(".steps").validate({
                errorClass: 'invalid',
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.insertAfter(element.next('span').children());
                },
                highlight: function(element) {
                    $(element).next('span').show();
                },
                unhighlight: function(element) {
                    $(element).next('span').hide();
                }
            });
            if ((!$('.steps').valid())) {
                return true;
            }
            if (animating) return false;
            animating = true;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutExpo'
            });
        });
        $(".submit").click(function() {
            $(".steps").validate({
                errorClass: 'invalid',
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.insertAfter(element.next('span').children());
                },
                highlight: function(element) {
                    $(element).next('span').show();
                },
                unhighlight: function(element) {
                    $(element).next('span').hide();
                }
            });
            if ((!$('.steps').valid())) {
                return false;
            }
            if (animating) return false;
            animating = true;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutExpo'
            });
        });
        $(".previous").click(function() {
            if (animating) return false;
            animating = true;
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            previous_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 0.8 + (1 - now) * 0.2;
                    left = ((1 - now) * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutExpo'
            });
        });
    });
</script>
</body>
</html>

  
  
  