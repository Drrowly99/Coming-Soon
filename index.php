<?php

  ini_set('session.cookie_lifetime', 86400 * 7);
  ini_set('session.gc_maxlifetime', 86400 * 7);
  ini_set('session.save_path', 'c:/wamp/www/coming/sessions');
  session_start();
if (isset($_GET['ref'])) {
  $_SESSION['referral'] = $_GET['ref'];
}else{
   $_SESSION['referral'] = '99188jh';
}
if (isset($_SESSION['id'])) {
  echo$_SESSION['id'];
  echo $_SESSION['id'];
  echo $_SESSION['email'];
  echo $_SESSION['token'];
  echo $_SESSION['ref'];
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Dadi.com.ng-Find Electricians-programmers and eventPlanner Nigeria</title>
<meta name="viewport"  content="width=device-width, initial-scale=1">
<meta name="description" content=" FIND / GET a programmer, electrician, graphic designer, painter, Advertise your service for free in Nigeria,portharcourt ">
<meta name="keywords" content=" programmer portharcourt Nigeria, graphic designer portharcourt Nigeria,painter portharcourt Nigeria, phoneLaptop Repairs Portharcourt Nigeria, ">
<meta name="viewport"  content="width=device-width, initial-scale=1">
<meta name="viewport"  content="width=device-width, initial-scale=1">
<meta name="viewport"  content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css"/>
<link rel="stylesheet" href="css1/bootstrap.css"/>
<script src="script/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Inria+Serif|Open+Sans+Condensed:300|Playfair+Display|Quicksand|Titillium+Web&display=swap" rel="stylesheet">
    <script type="text/javascript">
$(document).ready(function() {
        $('#image').css({"background-image":"url('image/ch3..jpg')"})
})
    setTimeout(function(){
       $('#image').css({"background-image":"url('image/ch1.jpg')"})
    }, 100)

    </script>
<style type="text/css">
    .write{
      font-family: 'Candara body copy';
      font-size: 15px;
    }
    #im{
      text-align: center;
    }
    #r{
      font-family:'Inria Serif', serif;
    }
    #ra{
      font-family:'Playfair Display', serif;
    }
    #rai{
      font-family:'Titillium Web', sans-serif;
    }

</style> 

</head>
<body class="w3-card-4"  style=" position:absolute; max-width: 900px; margin: auto; left: 0; right: 0; top: 0px; height:600px;">
    <div id="image" class="im" style=" height:600px;width: inherit;background-repeat: no-repeat; background-position: center; background-size: cover;">
      <div class="" style="background-color: rgba(0, 0, 0, 0.65); height: 600px; width: 100%;">
        <div class="w3-display-middle w3-text-white" style="width:auto; margin-top: 80px;">
        <div id="r" class="w3-center" style="letter-spacing: 0.4em; font-size:27px;">DADI</div>
        <p id="r" class="write w3-text-white w3-center" style="font-size: 18px;text-transform:capitalize; ">get jobs in nigeria without a resume or CV </p>
        <p id="r" class="w3-center" style="font-size: 16px;text-transform:capitalize; margin-top: -25px"> all you need is your skills and experience </p>
        <p id="rai" class="w3-center " style="font-size: 9px;">LAUNCH BEGINS IN</p>
        <div class="w3-center" id="demo" style="font-size: 20px"></div>
        <div id="mesg" style="font-size: 20px"></div>
        <form action="" method="post" id="form" class="w3-container w3-card-4" style="margin-top: 10px; ">
          <div>
            <label></label>
            <input class="w3-input w3-text-white" id="email" style="border:2px white solid;background-color: rgb(0, 0, 0, 0.05); font-weight: bolder;" type="text" name="email" placeholder="Email">
          </div>
          <div>
            <label></label>
            <input class="w3-input w3-text-white " id="phone" style="border:2px white solid;background-color: rgb(0, 0, 0, 0.05); margin-top: 10px; font-weight: bolder;" type="tel" name="phone" placeholder="Phone Number">
            </div>
            <div><button class="w3-btn w3-card-4 w3-small w3-round w3-text-black " type='submit' id="submit" style="position:relative; background-color: rgb(255, 255, 255)!important;border:2px white solid;  margin-top: 10px;">Get Early Access</button></div>
        </div>
      </form>
   <div class="w3-bar w3-block w3-border w3-text-white" style=" max-width: 300px; margin: auto; left: 0; right: 0; top: 0px; ">
  <a class="w3-right  w3-white w2-card w3-round" style="padding:5px 8px; margin-right: 10%;">whatsapp</a>
  <a class="w3-left  w3-white w2-card w3-round" style="padding:5px 8px; margin-left: 10%;">twitter</a>
</div>
</body>
</html>

 <script type="text/javascript">

    $(document).ready(function() {

      
    $("#form").submit(function(event){

      event.preventDefault();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var submit = $("#submit").val();

    
      $("#mesg").load("do", {

        email: email,
        phone: phone,
        submit: submit
         
      });
    });
    });
  </script>
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 20, 2020 24:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "D " + hours + "Hrs "
  + minutes + "Min " + seconds + "Sec ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<body>
    <div id="body" style="background-color: white;">

<div id="intro" class="w3-white " style="position: relative;z-index: 2; top:-10%; max-width: 800px; margin:auto; height:500px;left:;">
  <div class="w3-center " style="position:relative; top:45%; left:50%;transform:translate(-50%,-50%);">
    <div id="text"></div><div id="cursor"></div>
  </div>
 </div>
    <!--INTRO-->
<div  style="max-width:800px;" class="w3-top w3-bar w3-white w3-special-2 w3-padding">
  <div class="w3-center" >
    <img src="asset/image/Graphic1.png" style="height: 30px; width:80px; margin-top: 2px; text-align:center;">
  </div>
</div>
<!--HEADER-->
 <div class="" style="position: relative; height: 100vh;">
 <div id="color" class="w3-top w3- w3-text-white w3-display-container " style="">
   <div id="img" style="" class="w3-container">
      <h4 id="one" class="w3-animate-" style="font-weight:bold;text-align:left;margin-top: 10px;line-height: 1.9;"> We call on everyone with a skill or service to offer, Professional servicemen: Electricians, Painters, Plumbers, Video Editors, Programmers, Graphic Designers, Content Writer etc.</h4>
          <h5 id="two" class="w3-center w3-margin-top w3-display-bottommiddle w3-animate-" style="width:80%;margin-left:-5%;margin-bottom:10%;font-weight: 50;"> To Sign Up and work with DADI</h5>
      </div>    
 </div>
    <!--FIRST SET-->

       <div class="  w3-top" style="position:absolute;height: 40%; max-width:800px; top:50vh;">
          
        <h5 id="three" class="w3-center w3-animate-zoom  w3-text-grey" style="font-size:0.9em;position:relative;top:25%;color:rgb(217, 191, 239);margin-bottom:80px;z-index: 4;">If you have a skill ? Someone needs your service,they just dont know how to reach you, let DADI connect you, </h5>  
          <div id="four"  class=" w3-btn w3-round-xlarge w3-display-bottommiddle"  style=" "><small> GET STARTED</small></div>  
          
        </div> <!--message 1-->

    </div>
</div>
</body>