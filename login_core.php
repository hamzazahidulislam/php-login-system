<?php 
require_once('connect.php');
if (isset($_POST['email_addr']) && isset($_POST['pwd'])) {
	$email_addr=ltrim(htmlspecialchars($_POST['email_addr']));
	$pwd=strlen(ltrim(htmlspecialchars($_POST['pwd'])));
	//user token
   $token=sha1(md5($email_addr.$pwd));
   $updateQuery="SELECT * FROM my_users WHERE token='$token' AND  active_status='Active'  ";
   $runQuery=mysqli_query($connect,$updateQuery);
   $CounRow=mysqli_num_rows($runQuery);
   if ($runQuery==true) {
   	if ($CounRow===1) {
   		setcookie('blnkhack',$token,time()+(10 * 365 * 24 * 60 * 60 ));
   		header('location:profile.php?login?successfull');
   	}else{
   		header('location:profile.php?login?error');

   	}
   }
}
?>