<?php 
require_once("header.php");
 ?>
<?php 
if (isset($_REQUEST['userinformatoin'])) {
	$userinformation = $_REQUEST['userinformatoin'];
}
 ?>
<div class="container my-5">
	<div class="row justify-content-center">
		<div class=" col-md-8 col-lg-8">
		
		<?php 
			$getUserInfo = "SELECT * FROM all_user WHERE id= $userinformation";
			$runUserInfo = mysqli_query($connect,$getUserInfo); 
			while ($userInfo=mysqli_fetch_array($runUserInfo)) { ?>
				<div class="card">
				<div class="card-header">
					<h6><i class="fas fa-user"></i> <?php echo $userInfo['name'] ?></h6>
				</div>
				<div class="card-body">
					<div class="media mb-4">
						<img style="width:25%;box-shadow:0px 0px 10px 0px #00000050;" class="border mr-4 rounded" src="img/<?php echo $userInfo['profile'] ?>" class="card-img-top" alt="">
						<div class="media-object">
							<h3><?php echo $userInfo['name'] ?></h3>
							<p class="text-muted"><?php echo $userInfo['occupation'] ?></p>
						</div>
					</div>

					<div class="d-inline-block" style="width:10%">
						<h6><i class="fas fa-user-tie"></i></h6>
						<h6><i class="fas fa-envelope"></i></h6>
						<h6><i class="fas fa-list-ol"></i></h6>
						<h6><i class="fas fa-users"></i></h6>
						<h6><i class="fas fa-briefcase"></i></h6>
					</div>
					<div class="d-inline-block">
						<h6><?php echo $userInfo['name'] ?></h6>
						<h6><?php echo $userInfo['email'] ?></h6>
						<h6><?php echo $userInfo['roll'] ?></h6>
						<h6><?php echo $userInfo['department'] ?></h6>
						<h6><?php echo $userInfo['occupation'] ?></h6>
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