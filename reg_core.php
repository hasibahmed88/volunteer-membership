<?php 
require_once("config.php");

$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$gender = $_REQUEST["gender"];
$gender = $_REQUEST["gender"];
$roll = $_REQUEST["roll"];
$dep = $_REQUEST["dep"];
$occupation = $_REQUEST["occupation"];
$pwd = $_REQUEST["pwd"];
$pwd2 = $_REQUEST["pwd2"];
$profileName = $_FILES["profile"]['name'];
$profile_loc = "img/";
$profiletmp = $_FILES["profile"]['tmp_name'];
$uniqueId = uniqid().'.jpg';

$hash_pwd = md5(sha1($pwd));
$auth = md5(sha1($email.$pwd));

$pwdlen = strlen($pwd);
if ($pwdlen <6) {
	header("location: reg.php?shortpassword");
	exit();
}

move_uploaded_file($profiletmp, $profile_loc.$uniqueId);

	if (!preg_match("/^[a-zA-Z0-9 ]*$/", $username)) {
		header("location: reg.php?invalidusername");
		exit();
	}
	elseif ($pwd !== $pwd2) {
		header("location: reg.php?passwordnotmatch");
		exit();
	}

$showAllData = "SELECT email FROM all_user";
$runAllData = mysqli_query($connect,$showAllData);

while ($getmail = mysqli_fetch_array($runAllData)) {
	$checkEmail = $getmail['email'];
}
if ($checkEmail == $email) {
	header("location: reg.php?invalidemail");
	exit();
}

$insertData = "INSERT INTO all_user(name,email,gender,roll,department,occupation,pwd,auth,profile) VALUES ('$username','$email','$gender','$roll','$dep','$occupation','$hash_pwd','$auth','$uniqueId')";
$runInsert = mysqli_query($connect,$insertData);
if ($runInsert==true) {
	header("location: reg.php?loginSuccess");
	exit();
}

 ?>