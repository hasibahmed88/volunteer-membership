<?php 
require_once("config.php");

if (isset($_REQUEST["deleteuser"])) {
	$deleteId = $_REQUEST['deleteuser'];
}

$delete = "DELETE FROM all_user WHERE id='$deleteId' ";
$runDelete = mysqli_query($connect,$delete);
if ($runDelete==true) {
	header("location: index.php?accountdeleted");

}

 ?>