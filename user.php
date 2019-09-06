<?php 
require_once("header.php");
 ?>
<div class="container my-5">
	<nav class="navbar">
	<?php 
		if (isset($_REQUEST['search'])) {
			$searchKey = $_REQUEST['search'];
			$getuserinfo = "SELECT * FROM all_user WHERE name LIKE '%$searchKey%' ";
			$runKey = mysqli_query($connect,$getuserinfo);
		}
		else{
			$searchKey = "";
			$getuserinfo = "SELECT * FROM all_user";
		}
		$runuserinfo = mysqli_query($connect,$getuserinfo);
	 ?>
		<form class="ml-auto form-inline" action="" method="POST">
			<input name="search" class="form-control " type="text" placeholder="Search by name" value="<?php echo $searchKey ?>">
			<input class="btn btn-success ml-1" type="submit" value="Search">
		</form>
	</nav>
	<table class="table table-bordered table-responsive-sm">
		<thead class="bg-dark text-light ">
			<tr>
				<th>No.</th>
				<th>Photo</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Department</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

		<?php 
		$countId = 1;
		while ($userinfo=mysqli_fetch_array($runuserinfo)) { ?>
			<tr>
				<td><?php echo $countId;$countId++ ?></td>
				<td><img style="width:45px;height:45px;border-radius:50px" src="img/<?php echo $userinfo['profile'] ?>"></td>
				<td><?php echo $userinfo['name'] ?></td>
				<td><?php echo $userinfo['roll'] ?></td>
				<td><?php echo $userinfo['department'] ?></td>
				<td><a class="btn btn-info btn-sm" href="userprofile.php?userinformatoin=<?php echo $userinfo['id'] ?>">Details</a></td>
			</tr>
		<?php }
		 ?>	
		</tbody>
	</table>
</div>

<?php 
require_once("footer.php");

 ?>
