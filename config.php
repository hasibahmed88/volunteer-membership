<?php 

	$host = "localhost";
	$dbuser = "root";
	$dbpwd = "";
	$dbname = "niet";

	$connect = mysqli_connect($host,$dbuser,$dbpwd,$dbname);
	if (!$connect) {
		die("Database not connect". mysqli_connect_error());
	}

	$table = "CREATE TABLE all_user(
	id int(255) auto_increment primary key,
	name varchar(255) not null,
	email varchar(255),
	pwd varchar (255) not null,
	)";

	$runtable = mysqli_query($connect,$table);
	if ($runtable==true) {
		echo "Table created";
	}
 ?>