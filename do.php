<?php 

  session_start();

  include 'database.php';

  	 if (empty( $_POST['email'])) {
  	 	echo '<div class=" w3-round w3-red w3-text-white w3-container" style="padding: 2px; font-size: 13px;margin-bottom: 5px; width: 80%; height: 40px;"> Please your email is required </div>';
  	 }elseif (empty( $_POST['phone'])) {
  	 	echo '<div class=" w3-round w3-red w3-text-white w3-container" style="font-size: 13px; width: 80%;margin-bottom: 5px; height: 40px;"> Please your phone number is required </div>';
  	 }elseif (!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL)) {
  	 	echo '<div class=" w3-round w3-red w3-text-white w3-container" style="font-size: 13px; width: 80%;margin-bottom: 5px; height: 40px;"> Please your email is Invalid </div>' ;
  	 }else{
  	 	$email =  strtolower(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email'])));
        $phone =  mysqli_real_escape_string($conn, $_POST['phone']);
        $token =  bin2hex(openssl_random_pseudo_bytes(7));
  	 	#check if email exista
  	 	# in database
  $loga = mysqli_query($conn,"SELECT * FROM `join` WHERE email = '$email'  ");
           $logac = mysqli_num_rows($loga);
            if($logac > 0){
              # check for password match
              $pass = mysqli_query($conn,"SELECT * FROM `join` WHERE email = '$email' AND phone = '$phone'  ");
               $passc = mysqli_num_rows($pass);
                if($passc > 0){
                  $log = mysqli_query($conn,"SELECT * FROM `join` WHERE email = '$email' ");
                   $logc = mysqli_num_rows($log);
                    if($logc > 0){
                      while ($row = mysqli_fetch_assoc($log)) {
                      $_SESSION['token'] = $row['u_token'] ;
                      $_SESSION['id'] = $row['id'] ;
                      $_SESSION['email'] = $row['email'] ;
                      $_SESSION['phone'] = $row['phone'] ;
                      $_SESSION['ref'] = $row['ref_token'] ;
                      }
                    }
                    echo '<div class=" w3-round w3-green w3-text-white w3-container" style="font-size: 13px; width: 70%;margin-bottom: 5px; padding:7px; height: 35px;"> logged in.. </div>';
                      echo '<script> window.location.href="welcome?ref='.$_SESSION['ref'].'"</script>';
                }else{
                    echo '<div class=" w3-round w3-red w3-text-white w3-container" style="font-size: 13px; width: 70%;margin-bottom: 5px; padding:7px; height: 35px;"> wrong password </div>';
                }
            }

            else{
              $ref = $_SESSION['referral'];
              $insert = mysqli_query($conn,"INSERT INTO `join` (email, phone, ref_token, u_token, ip ) VALUES ('$email', '$phone', '$ref', '$token', INET_ATON('192.168.0.10'))");
          if ($insert) {
            $check = mysqli_query($conn,"SELECT * FROM `join` WHERE email = '$email' ");
              $checkc = mysqli_num_rows($check);
               if($checkc > 0){
                while ($row = mysqli_fetch_assoc($check)) {
              $_SESSION['token'] = $row['u_token'] ;
              $_SESSION['id'] = $row['id'] ;
              $_SESSION['email'] = $row['email'] ;
              $_SESSION['phone'] = $row['phone'] ;
              $_SESSION['ref'] = $row['ref_token'] ;
                }
              }
              echo '<div class="w3-green w3-round w3-center w3-card " style="font-size: 13px;padding: 5px; width: 60%; height: 30px; margin-bottom: 5px;"> success..</div>';
             echo '<script> window.location.href="welcome?ref='.$_SESSION['ref'].'"</script>';
           
            }else{
            echo "failed";
              }
           
          }

       }
        
