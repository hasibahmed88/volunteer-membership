<?php 
require_once("header.php");

 ?>
<?php 
if (isset($_REQUEST['userid'])) {
	$userinformation = $_REQUEST['userid'];
}
 ?>
<div class="container my-5">
	<div class="row justify-content-center">
		<div class=" col">
		
		<?php 
			$getUsersInfo = "SELECT * FROM all_user WHERE id='$userinformation'";
			$runUserInfo = mysqli_query($connect,$getUsersInfo); 
			while ($userInfo=mysqli_fetch_array($runUserInfo)) { ?>
				<div class="card">
				<div class="card-header">
					<div class="d-inline-block">
						<h6><i class="fas fa-user-shield"></i> <?php echo $userInfo['name'] ?></h6>
					</div>
					
				</div>
				<div class="card-body">
						<center>
							<img style="width:30%;box-shadow:0px 0px 10px 0px #00000050;" class="border mr-4 mb-3 rounded" src="img/<?php echo $userInfo['profile'] ?>" class="card-img-top" alt="">

						</center>
						<center>
							<h3><?php echo $userInfo['name'] ?></h3>
							<p><?php echo $userInfo['occupation'] ?></p>
							<div>
							<button class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fas fa-edit"></i></button>
							<div class="dropdown-menu">
								<a class="dropdown-item text-primary" href="edit.php?editid=<?php echo $userInfo['id'] ?>"><i class="far fa-edit"></i> Edit account</a>
								<a onclick="return confirm('Are you sure?')" class="dropdown-item text-danger" href="delete.php?deleteuser=<?php echo $userInfo['id'] ?>"><i class="fas fa-trash-alt"></i> Delete account</a>
							</div>
						</div>
						<hr>
						</center>

					<div class="ml-4">
						<h5 class="text-warning">Information</h5>
					</div>
					<div class="d-inline-block ml-4" style="width:8%">
						<h6 class="text-primary"><i class="fas fa-user-tie"></i></h6>
						<h6 class="text-danger"><i class="fas fa-envelope"></i></h6>
						<h6 class="text-info"><i class="fas fa-list-ol"></i></h6>
						<h6 class="text-dark"><i class="fas fa-users"></i></h6>
						<h6 class="text-success"><i class="fas fa-briefcase"></i></h6>
					</div>
					<div class="d-inline-block">
						<h6><?php echo $userInfo['name'] ?></h6>
						<h6><?php echo $userInfo['email'] ?></h6>
						<h6><?php echo $userInfo['roll'] ?></h6>
						<h6><?php echo $userInfo['department'] ?></h6>
						<h6><?php echo $userInfo['occupation'] ?></h6>
					</div>
					</div>

				</div>
				<div class="card-footer">
					<span class="text-muted">Join: <?php echo $userInfo['reg_date'] ?></span>
				</div>
			</div>	
			 <?php }

				 ?>
		</div>
	</div>
</div>

 <?php 
require_once("footer.php");

 ?>