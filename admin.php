<?php

  session_start();

  include 'database.php';

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
   
<style type="text/css">
    .write{
      font-family: 'Candara body copy';

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
<script type="text/javascript">
   $(document).ready(function() {
  $('#image').css({"background-image":"url('image/ch3..jpg')"})
        $('#ima').hide();
    setTimeout(function(){
      $('#image').css({"background-image":""})
       $('#ima').show();
    }, 3000)
  })

</script>
</head>
<body class="w3-card-4"  style=" position:absolute; margin: auto; left: 0; right: 0; top: 0px; height:auto;">
  <h3>DADI MONITOR, ADMINS ONLY</h3>
  <div class="w3-row">
    <div class="w3-col s6 m6 l6 w3-border">
      <div>Number of signups</div>
      <div>
        <?php
            $count = "SELECT COUNT(*) c FROM `join` ";
              $result = mysqli_query($conn, $count);
              $row = mysqli_fetch_assoc($result);
          if ($row > 0) {
           echo $row['c'];
          }

        ?>

      </div>
    </div>
    <!-- -->
    <div class="w3-col s6 m6 l6 w3-border">
      <div>Number of signups</div>
      <div></div>
    </div>
    
    
  </div>
<!-- finish row -->

  <div>
    <?php
       $check = mysqli_query($conn,"SELECT * FROM `join`  ");
              $checkc = mysqli_num_rows($check);
               if($checkc > 0){
                while ($row = mysqli_fetch_assoc($check)) {
                  echo '<div class="w3-container w3-border w3-red" style="margin: 10px;">
    <div class="w3-border w3-container w3-col s3 m4 l2" style="width: 20%; height: 50px;">', $row['u_token'], '</div>
    <div class="w3-border w3-container w3-col s3 m4 l2" style="width: 20%; height: 50px;">', $row['id'], '</div>
    <div class="w3-border w3-container w3-col s3 m4 l2" style="width: 20%; height: 50px;">', $row['email'], '</div>
    <div class="w3-border w3-container w3-col s3 m4 l2" style="width: 20%; height: 50px;">', $row['phone'], '</div>
    <div class="w3-border w3-container w3-col s3 m4 l2" style="width: 20%; height: 50px;">', $row['ref_token'], '</div>
    <div class="w3-border w3-container w3-col s3 m4 l2" style="width: 20%; height: 50px;">', $row['points'],  '</div>
 
    
  </div>';
           
                }
              }
      ?>
  </div>
<div class="w3-container w3-border w3-red" style="margin: 10px;">
  <p>lkolewkwe</p>
  <p>,wlkdpo3290</p>
  
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

     
      $.ajax({
          url: "do", 
          method: "POST",
          data: {email: email, phone: phone, submit: submit},
          beforeSend: function(){
           $('#load').html('<li class="fa fa-spinner fa-pulse fa-3x"></li>'); 
          },
          success: function(data)
          {
           alert('j');  
            $('#load').html(' '); 
            $('#mesg').html(data);
          }
         
      });
    });
    });
  </script>
      
       
         
  
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 14, 2020 24:00:00").getTime();

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
 <script >

