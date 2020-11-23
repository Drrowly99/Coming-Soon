 <?php 
  session_start();

 include 'database.php';
if (isset($_POST['check'])) {
	#check how many stash the userhas from his referrals

                $count = "SELECT COUNT(*) c FROM `join` WHERE ref_token = '".$_SESSION['id']."'";
                $result = mysqli_query($conn, $count);
                $row = mysqli_fetch_assoc($result);
                  if ($row > 0) {
    
            if (empty($_SESSION['zer'])) {
                    if ($row['c'] < 1) {
                       echo "<script>   $('.bl').css({'display':' block '});</script>";
                    
                        echo 'Hi, you have ', $row['c'],' block', 'Referrals and 1,000 (stash)';
                        $ref_no = $row['c'];
                      $_SESSION['zer'] = 'none';
                  }
                }

            if (empty($_SESSION['one'])) {
                    if ($row['c'] == 1) {
                        echo "<script>   $('.bl').css({'display':'block '});</script>";
                        echo 'Hi, you have ', $row['c'],' ', 'Referrals and 10,000 (stash)';
                        $ref_no = $row['c'];
                      $_SESSION['one'] = 'none';
                    }
                  }

            if (empty($_SESSION['two'])) {
                    if ($row['c'] == 2) {
                          echo "<script>   $('.bl').css({'display':'block '});</script>";
                        echo 'Hi, you have ', $row['c'],' ', 'Referrals and 100,000 (stash)';
                        $ref_no = $row['c'];
                      $_SESSION['two'] = 'none';
                    }
                  }
                }
}

if (isset($_POST['stash'])) {
		$count = "SELECT COUNT(*) c FROM `join` WHERE ref_token = '".$_SESSION['id']."'";
        $result = mysqli_query($conn, $count);
        $row = mysqli_fetch_assoc($result);
          if ($row > 0) {
          	$ref_no = $row['c'];
			if ($ref_no < 1) {
              $one =mysqli_query($conn, "UPDATE `join` SET points = '1000' WHERE u_token = '".$_SESSION['token']."' ");
                if ($one) {
                  echo '1,000 (stash)';
                }
                  }elseif ($ref_no > 0) {
                $ten =mysqli_query($conn, "UPDATE `join` SET points = '10000' WHERE u_token = '".$_SESSION['token']."' ");
                  if ($one) {
                    echo '10,000 (stash)';
                  }
                  }elseif ($ref_no == 2) {
                  $ten =mysqli_query($conn, "UPDATE `join` SET points = '100000' WHERE u_token = '".$_SESSION['tkoen']."' ");
                    if ($one) {
                      echo '100,000 (stash)';
                    }
                  }else{
                  	echo '100,000 (stash)';
                  }
              }
}
if (isset($_POST['email'])) {
  if (empty($_SESSION['em'])) {
		$message = "Congrats...! you have been added to our Early Access List, and will benefit uniquely from all our service. this is your referral link dadi.com.ng?ref='".$_SESSION['id']."'";
		$email=mail($_SESSION['email'], $message, 'From: dadi@dadi.com.ng');
    if (!$email) {
      echo 'email not sent';
    }else{
    echo 'you have received an email';
    $_SESSION['em'] = 'email sent';
    }
  }
}

 ?>
