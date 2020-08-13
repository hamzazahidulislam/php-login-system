<?php 
use PHPMailer\PHPMailer\PHPMailer;
require_once("connect.php");
require_once('PHPMailer/PHPMailer.php');
require_once( 'PHPMailer/SMTP.php');
require_once('PHPMailer/Exception.php');
require_once('PHPMailer/OAuth.php');


   $full_Name=ltrim(htmlspecialchars($_POST['full_Name']));
   $userName=ltrim(htmlspecialchars($_POST['userName']));
   $email_addr=ltrim(htmlspecialchars($_POST['email_addr']));
   $pwd=strlen(ltrim(htmlspecialchars($_POST['pwd'])));
   if (isset($_SERVER['REQUEST_METHOD'])=='POST') {     
    if ($full_Name==NULL || $userName==NULL || $email_addr==NULL || $pwd==NULL) {
      header('location:register.php?please_fill_in_the_blank');
    }else{
   //user passd very strong 
   
   // if (($pwd==8)==false) {
   //   header('location:register.php?passward=more-than-8-digit');
   // }
   //secure Password
   $securepwd=sha1(md5($pwd));
   //user token
   $token=sha1(md5($email_addr.$pwd));
   //user verify active stutus
   $active_status="Inactive";

   //user name verification
   $user_valid="SELECT * FROM my_users WHERE userName='$userName'";
   $run_user_Valid=mysqli_query($connect,$user_valid);
   $user_Count=mysqli_num_rows($run_user_Valid);
   if ($user_Count>0) {
     header('location:register.php?user_already_taken');
   }else{
   //user email verification
   $email_valid="SELECT * FROM my_users WHERE email_addr='$email_addr'";
   $runMail_Valid=mysqli_query($connect,$email_valid);
   $Mail_Count=mysqli_num_rows($runMail_Valid);
   if ($Mail_Count>0) {
     header('location:register.php?email_already_taken');
   }else{
       $InsertQuery="INSERT INTO my_users (full_Name,userName,email_addr,pwd,token,active_status) VALUES('$full_Name','$userName','$email_addr','$securepwd','$token','$active_status') "; 
   $runQuery=mysqli_query($connect,$InsertQuery);
 
   if ($runQuery==true) {
        //phpmailer for verify email//

        $mail = new PHPMailer();

        $id = mysqli_insert_id($connect);
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/login_system/verify.php?id='.$id.'&token='.$token;
        $mailbody = '<div>Thanks for registering with Hamza Zahidul Islam. Please click this link to complete your registation <br><br> '.$url.'</div>';

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "youremail@gmail.com";
        $mail->Password = 'your email password';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
                                    //$useremail   //$firstname.' ' .$lastname//$full_Name 
        $mail->setFrom($email_addr,$full_Name);
        $mail->addAddress($email_addr);
        $mail->Subject = "Verify Your Email Address";
        $mail->Body = $mailbody;
        if ($mail->send()) {
            header("location: register.php?action=true");
        } else {
            header("location: register.php?apply_again");
        }  
   }
   }
}

    }
   }






