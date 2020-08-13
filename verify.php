<?php 

require_once('connect.php');
$id=$_GET['id'];
$updateQuery="UPDATE my_users SET active_status='Active' WHERE id='$id' ";
$runQuery=mysqli_query($connect,$updateQuery);
if ($runQuery==true) {
	header('location: login.php?verify=successfull');
}else{
	header('location: login.php?verify=error');

}