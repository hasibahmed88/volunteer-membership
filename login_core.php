<?php 
require_once("config.php");

$inputEmail = $_REQUEST['useremail'];
$inputPwd = $_REQUEST['userpwd'];

$hash_auth = md5(sha1($inputEmail.$inputPwd)) ;

$getAllInfo = "SELECT * FROM all_user WHERE auth='$hash_auth' ";
$runInfo = mysqli_query($connect,$getAllInfo);
$countRow = mysqli_num_rows($runInfo);

if ($runInfo==true) {
	if ($countRow===1) {
		setcookie("USID",$hash_auth,time()+(86400*365));
		header("location: index.php?loginsuccess");
	}
	else{
		header("location: login.php?wronginformation");
	}
}

?>