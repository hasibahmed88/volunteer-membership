<?php 
require_once("header.php");
 ?>

<?php 
if (isset($_REQUEST['wronginformation'])) {?>
	<div class="container mt-2">
		<div class="alert alert-danger">
		<strong>Failed! </strong><span> Email or Password incorrect!</span>
	</div>
	</div>
<?php }
 ?>

<div class="container my-5">
    
    <div class="row justify-content-center">
        <div class="col-md-5 border p-3 rounded m-2">
            <div class="form-group">
                <h2 class="text-center text-muted">Login</h2>
            </div>
            <form action="login_core.php" method="post">
                
                <div class="form-group">
                    <input class="form-control form-control-sm text-center" type="email" name="useremail" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-sm text-center" type="password" name="userpwd" placeholder="Password">
                </div>
                <center><button class="btn btn-dark btn-sm mb-3">Login</button></center>
                <div class="form-group">
                    <span class="text-muted">Do not have membership?</span> <a href="reg.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</div>


 <?php 
require_once("footer.php");
  ?>