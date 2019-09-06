<?php 
setcookie("USID",$hash_auth,time()-(86400*665));
header("location: index.php?loggedout");

 ?>