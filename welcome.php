<?php 

  session_start();

 include 'database.php';
if (!isset($_SESSION['token'])) {
echo '<script> window.location.href="index"</script>';
}
?>

<!DOCTYPE html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
      font-size: 15px;
    }
    .w3-leftbar{border-left:6px solid  linear-gradient(to right, #610ebb 0%, #3a60d2 51%, #86b2e8 100%);}.w3-rightbar{border-right:6px solid #ccc!important}
    .f{
      margin-top:-20px;
      text-align: center;
      color:#2e0444;
    }.h{
      margin-top:-0px;
      text-align: center;
      color:#2e0444;
    }
    .w2-card-4{
      box-shadow: 0 4px 10px 0 rgba(237, 215, 251, 0.37), 0 4px 20px 0 rgba(2, 2, 2, 0.19)
    }
      .w2-card{
      box-shadow: 0 4px 10px 0 rgba(237, 215, 251, 0.37), 0 4px 20px 0 rgba(2, 2, 2, 0.19)
    }
    .w2-btn,.w2-button{border:none;display:inline-block;vertical-align:middle;padding:5px;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}

    
</style>
<div>
  
</div>
</head>
<body class="w2-card-4 w3-border w3-display-container"  style=" position:absolute; max-width: 900px; margin: auto; left: 0; right: 0; top: 0px; height:auto;">
  <div class="w2-card w3-white w3-container w3-display-container" style="position: relative; z-index:2; height:50px; max-width: 900px; margin-top: -1px;">
    <img src="image/dadi3.jpg" class=" w3-display-leftmiddle" style="font-weight:bold; height: 26px;width:6em; margin-top:10px;">
     <div class=" w3-display-right w3-round-xlarge w3-padding w3-text-red logout" style="margin-right: 40%; background-color: rgba(208, 207, 208, 0.32);font-size:13px;">logout</div>
    <div class=" w3-round-xlarge w3-padding w3-tiny w3-display-right " style="color: #2e0444; font-weight: bold; background-color: rgba(208, 207, 208, 0.32);" > <span id="stash" style="font-size:13px"> 1,000 (stash) </span>  <span class="fa fa-money w3-text-green"></span></div>
  </div>
<div class=" w3-container w3-display-topmiddle " style="position:relative; line-height:;background-color: rgba(208, 207, 208, 0.32); height:150px; width:95%;margin-top: 8px; ">
  <p class="g w3-center" style="color: #2e0444;font-size:15px;"><b>Thank You..!</b></p>
  <p class="f" style="font-size:14px;">You are now on our VIP list </p>
  <p class="f" style="line-height: px;font-size:14px;">we have added your email address to the signup queue </p>
  <p class="f" style="height: px; margin-top: 2px; font-size:12px ; color: #2e0444;">This is your Email <b><?php echo $_SESSION['email']; ?></b> if this is not you <b class="w3-text-blue" id="click">Cick here</b></p>
</div>

<div class="w3-white w3-row w3-text-black w3-round-large w3-display-topmiddle w3-margin-top w2-card-4" style="position:relative; font-size: 12px; height: 160px; width:85%;background-image: linear-gradient(to right, #b17e06 , #391573);">
  
</div>



<div class="w3-white w3-container w3-text-black w3-round-large w3-display-topmiddle  w3-border-green " style="position:relative; font-size: 14px; margin-top: -110px; height: 170px; width:85%;">
  <span><img src="image/br.png" class="w3-display-topmiddle" style="height: 40px; margin-top: 5px; width:30px;"></span><p class="fa fa-medal w3-text-green"></p>
  <p class=" w3-center" style="color: #2e0444;margin-top: 7px; "><b>you have a bronze medal badge</b></p>
  <p class=" w3-center" style="margin-top: -10px; font-size: 13px;">you get 1,000 (stash) <span class="fa fa-money w3-text-green "></span> to bid for all the jobs on our platform</p>
  <p class=" w3-center " style="color: #2e0444; font-size: 12px;">With a GOLD badge, you get 100,000 (stash) <span class="fa fa-money w3-text-green" style="font-size: 14px"></span> to bid for as much jobs as you want </p>
  <p class="w3-center" style="font-size: 14px;">refrral link: dadi.com.ng?ref=<?php echo $_SESSION['id']?></p>
</div>

<div class="w3-white w3-container w3-text-black w3-round-large w3-display-topmiddle  w3-border-green " style="position:relative; font-size: 14px; margin-top: -110px; height: 170px; width:85%;">
  <span><img src="image/go.png" class="w3-display-topmiddle" style="height: 40px; margin-top: 5px; width:30px;"></span><p class="fa fa-medal w3-text-green"></p>
  <p class=" w3-center" style="color: #2e0444;margin-top: 7px; "><b>congrats...!</b></p>
  <p class=" w3-center" style="margin-top: -10px; font-size: 13px;">you now have 100,000 (stash) <span class="fa fa-money w3-text-green "></span> to bid for all the jobs on our platform</p>
    <p class=" w3-center" style="color: #2e0444;margin-top: 7px; "><b>you now have a gold medal, Sit tight and wait  for the Launch</b></p>
  <p class=" w3-center " style="color: #2e0444; font-size: 12px;">each job will require a over 50 stash. so the more stash you get, the greter your bidding power <span class="fa fa-money w3-text-green" style="font-size: 14px"></span> </p>
  <p class="w3-center" style="font-size: 14px;">refrral link: dadi.com.ng?ref=<?php echo $_SESSION['id']?></p>
</div>

<div class="w3-row w3-text-black w3-display-topmiddle w3-margin-top " style="background-color: rgba(208, 207, 208, 0.32); position:relative; font-size: 15px; height: 180px; width:96%;">
  <div class="w3-col  w3-white  w3-round-large " style="height: 150px; width:47%; margin-right: 1%;margin-left: 1.5%; margin-top:15px;">
   <img src="image/sil.png" class="" style="height: 40px;position: relative; left:50%;margin-left: -20px; margin-top: 5px; width:30px;">
   <p  class="w3-center" style="font-size:13px; color: #2e0444; "> Get <b class="" style="">10,000 (stash)</b> <span class="fa fa-money w3-text-green "></span></p>
   <p onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-text-white w3-center w3-round" style="font-size: 13px; width:80%; background-color: #cacacc; margin-left: 10%; color: #2e0444;">GET NOW..!</p>
   <p></p>
  </div>
  <div class="w3-col  w3-white w3-round-large" style="height: 150px; width:47%; margin-left: 1%; margin-right: 1.5%; margin-top:15px;">
    <img src="image/go.png" class="" style="height: 40px;position: relative; left:50%; margin-top: 5px;margin-left: -20px;  width:30px;">
    <p class="w3-center" style="font-size:13px;color: #2e0444;">Get <b class=""> 100,000 (stash)</b>  <span class="fa fa-money w3-text-green "></span></p>
   <p onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-center w3-round w3-text-white" style="font-size: 13px; width: 80%; background-color: #e7af2b; margin-left: 10%;">GET NOW..!</p>
   <p></p>
  </div>
 <div id="bl" class="w3-text-white w3-round " onclick="document.getElementById('bl').style.display='none'"  style="display:none; background-color: rgba(0, 0, 0, 0.53); position: absolute; height: 50px; width: 100%; margin-top: 10px;">
    <span  class="w3-red w3-round-xxlarge w3-small" style=" position: relative;top:13px; left:5px;padding: 2px 7px 3px 7px;">x</span>
    <div id="echo" class=" w3-round-xxlarge w3-small w3-center" style=" position: relative; top:-20px;"> </div>
<div id="email" class=" w3-round-xxlarge w3-small w3-center" style=" position: relative; top:-13px; font-size:11px;"></div>
  </div>
</div>



<div class="w3-container">
  <div id="id01" class="w3-modal" >
    <div class="w3-modal-content w3-container w3-card-4 w3-animate-zoom" style="max-width:600px ;margin-top:-10px; height: 450px;">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-hide w3-btn w3-small w3-hover-text-red w3-display-topright" title="Close Modal">&times;</span>
        <p class="w3-small" style="color: #2e0444;font-size:14px; font-weight: bold; ">Get a GOLD badge by Referring 2 friends </p>
      </div>
        <div class="" style="height: 70px; max-width: 100%; background-color: rgba(242, 233, 249, 0.32); ">
          <div class="w3-center w3-container " style="font-size:12px;color: #2e0444;"> This is your referral link, copy and send it to your friends </div>
            <p class="w3-small w3-center w3-text-blue"> dadi.com.ng?ref=<?php echo $_SESSION['id']?></p>
        </div>
        <div class="w3-center"> OR </div>
        <div class="w3-center" style="font-size:11px;"> Simply share this message on WHATSAPP Or TWITTER </div>
        <div class="w3-dispay-container w3-white w3-container w3-leftbar w3-border-green w3-margin-top  w3-round" style="width:100%; height:105px; margin-top: -20px;background-color:rgb(251, 248, 253)!important; ">
          <p class="w3-white w3-center w3-card w3-round w3-border-grey" style=" font-size:10px; width:100%;" >Do Jobs Daily Without A resume OR CV on DADI join our vip list now..!dadi.com.ng/?ref=<?php echo $_SESSION['id'] ?></p>

            <div class="w3-bar w3-block w3-text-black share1" style=" max-width: 350px; margin: auto; left: 0; right: 0; top: 0px; ">
   <a href="https://api.whatsapp.com/send?text=Do Jobs Daily Without A resume OR CV on DADI join our vip list now..! dadi.com.ng/?ref=<?php echo $_SESSION['id']?>" data-action="share/whatsapp/share"><span class="w3-right w2-card w3-green w3-round share1" style="padding:5px 8px;margin-right: 5%;"><li  class="w3-text-white fa fa-whatsapp" style="font-size: 16px;"></li> whatsapp</span></a>
  <a id="sh" href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
             class="twitter-share-button share1"
             data-text="Do Jobs Daily Without A resume OR CV on DADI join our vip list now..! dadi.com.ng/?ref=<?php echo $_SESSION['id']?>" 
             data-via="QuotedReplies @Techpointdotng @microtraction @henryshield @Cc_HUB"  
             data-url="dadi.com.ng/?ref=<?php echo $_SESSION['id']; ?>"  
             data-hashtags="FindjobwithDADI" 
             data-show-count="false">
             <span class="w3-left w2-card w3-blue w3-round" style="padding:5px 8px;margin-left: 5%;"><li  class="w3-text-white fa fa-twitter" style="font-size: 16px;margin-right: 5px;"></li>twitter</span>
             </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
</div>


     </div>
    </div>
  </div>
</div>
</div>

<div class="w3-container">
  <div id="id02" class="w3-modal" >
    <div class="w3-modal-content w3-container w3-card-4 w3-animate-zoom" style="max-width:600px ;margin-top:-10px; height: 450px;">
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-hide w3-btn w3-small w3-hover-text-red w3-display-topright" title="Close Modal">&times;</span>
        <p class="w3-small" style="color: #2e0444;font-size:14px; font-weight: bold; ">Get a SILVER badge by Referring 1 friends </p>
      </div>
        <div class="" style="height: 70px; max-width: 100%; background-color: rgba(242, 233, 249, 0.32); ">
          <div class="w3-center w3-container " style="font-size:12px;color: #2e0444;"> This is your referral link, copy and send it to your friends </div>
            <p class="w3-small w3-center w3-text-blue"> dadi.com.ng?ref=<?php echo $_SESSION['id']?></p>
        </div>
        <div class="w3-center"> OR </div>
        <div class="w3-center" style="font-size:11px;"> Simply share this message on WHATSAPP Or TWITTER </div>
        <div class="w3-dispay-container w3-white w3-container w3-leftbar w3-border-green w3-margin-top  w3-round" style="width:100%; height:105px; margin-top: -20px;background-color:rgb(251, 248, 253)!important; ">
          <p class="w3-white w3-center w3-card w3-round w3-border-grey" style=" font-size:10px; width:100%;" >Do Jobs Daily Without A resume OR CV on DADI join our vip list now..!dadi.com.ng/?ref=<?php echo $_SESSION['id'] ?></p>

            <div class="w3-bar w3-block w3-text-black share2" style=" max-width: 350px; margin: auto; left: 0; right: 0; top: 0px; ">
   <a href="https://api.whatsapp.com/send?text=Do Jobs Daily Without A resume OR CV on DADI join our vip list now..! dadi.com.ng/?ref=<?php echo $_SESSION['id']?>" data-action="share/whatsapp/share"><span class="w3-right w3-tiny w2-card w3-green w3-round" style="padding:4px 8px;margin-right: 5%;"><li  class="w3-text-white fa fa-whatsapp" style="font-size: 13px;"></li> whatsapp</span></a>

  <a  href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
             class="twitter-share-button "
             data-text="Do Jobs Daily Without A resume OR CV on DADI join our vip list now..! dadi.com.ng/?ref=<?php echo $_SESSION['id']?>" 
             data-via="QuotedReplies @Techpointdotng @microtraction @henryshield @Cc_HUB"  
             data-url="dadi.com.ng/?ref=<?php echo $_SESSION['id']; ?>"  
             data-hashtags="FindjobwithDADI" 
             data-show-count="false">
             </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
             </div>
             
</div>

 
<?php  phpinfo(); ?>

     </div>
    </div>
  </div>
</div>
</div>
<!-- Frequently asked questions-->
        <div id="faq" class="w3-btn w3-center w3-red" style="position: relative; width: 50%; left:50%; margin-left: -25%; background-color: rgba(64, 62, 62, 0.88);"> F A Q</div>
        <div id="fclass" class="w3-animate-left w3-border w3-text-white" style="max-width: 900px; height:400px;margin: auto; left: 0; right: 0; bottom:0; background-color: rgba(64, 62, 62, 0.88);">
           <!-- First question-->
          <div class="w3-margin w3-card-4  w3-container w3-small" style="background-color: rgba(41, 41, 41, 0.83)">
          <p class="w3-left">is this a ponzi schem..? </p>
          <p class="w3-right" style="margin-top: 25px;">No its not</p>
          </div>
          <!--second question-->
          <div class="w3-margin w3-card-4 w3-container w3-small" style="background-color: rgba(41, 41, 41, 0.83)">
          <p class="w3-left">What is stash..?</p>
          <p  class="w3-right" style="margin-top: 5px;">stash is just a virtual reward, not a currency. it can only be used to bid for jobs on the platform</p>
          </div>
          <!--third question-->
          <div class="w3-margin w3-card-4 w3-container w3-small" style="background-color: rgba(41, 41, 41, 0.83)">
          <p class="w3-left">Can stash be withdrawn.?</p>
          <p  class="w3-right" style="margin-top: 25px;">no it cant</p>
          </div>
           <!--fourth question-->
          <div class="w3-margin w3-card-4 w3-container w3-small" style="background-color: rgba(41, 41, 41, 0.83)">
          <p class="w3-left">how does DADI get the jobs it offers us..?</p>
          <p  class="w3-right" style="margin-top: 5px;">please watch the video in the homepage</p>
          </div>
        </div>
    </div>
<footer>
   <?php  
     echo '<a href="admin"><div> admin </div></a>';
    ?>
  <div class=" w3-text-white" style="height: 50px; width: 100%; background-color: rgba(43, 41, 41, 0.83)!important;">
  <div class="w3-center w3-small w3-padding">Powered and designed by DADI_TEAM  </div>
  <div class="w3-center w3-tiny ">@DADI.COM.NG 2019, DEC </div>
</div>
</footer>

</body>
</html>
 <script >
$(document).ready(function(){
    var check = '<?php echo $_SESSION['ref']  ?>'
    $("#echo").load("data", {check: check});
   });
</script>

 <script >
$(document).ready(function(){
 $("#click").click(function(){
        window.location.href = "out";
      })
   });
</script>

 <script >
$(document).ready(function(){
    var email = '<?php echo $_SESSION['id']  ?>'
    $("#email").load("data", {email: email});
   });
</script>

 <script >
$(document).ready(function(){
  var refresh = setInterval(function(){
    var stash = '<?php echo $_SESSION['ref']  ?>';
    $("#stash").load("data", {stash: stash});
  }, 10000);
});
</script>

 <script >
$(document).ready(function(){
$(".logout").click(function(){
   window.location.href = "out";
  });
});
</script>
<script >
$(document).ready(function() {
  $(".share2").click(function(){
    setTimeout(function(){
      document.getElementById('id02').style.display='none';
    }, 1000)
      });
    })
</script> 
<script >
$(document).ready(function() {
  $(".share1").click(function(){
    alert('hi');
    setTimeout(function(){
      document.getElementById('id01').style.display='none';
    }, 1000)
      });
    })
</script> 
<script >
$(document).ready(function() {
  $("#sh").click(function(){
    alert('hi');
    setTimeout(function(){
      document.getElementById('id01').style.display='none';
    }, 5000)
      });
    })
</script> 
 <script type="text/javascript">
      $(document).ready(function() {
        $('#fclass').hide();
        $('#faq').click(function(){
          $('#fclass').toggle();
        })
      })
    </script>