<?php 
require_once('config.php');

if (isset($_REQUEST['edit-btn'])) {

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$roll = $_REQUEST['roll'];
	$occupation = $_REQUEST['occupation'];
	$editId = $_REQUEST['editId'];

	$update = "UPDATE all_user SET name='$name',email='$email',roll='$roll',occupation='$occupation' WHERE id='$editId' ";
	$runUpdate = mysqli_query($connect,$update);

	if ($runUpdate==true) {
		header("location: profile.php?userid=".$editId);
		exit();
	}
}
 ?>