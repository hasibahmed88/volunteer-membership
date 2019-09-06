
<?php 
require_once("header.php");
 ?>
 <?php 
 if (isset($_REQUEST['editid'])) {
    $geteditid = $_REQUEST['editid'];
 }
  ?>

<div class="container my-4">
    <h2 class="text-center text-muted ">Edit profile</h2>
    <div class="row justify-content-center ">
        <div class="col-md-6 col-lg-5 p-3 border">
            <?php 
            if (isset($_COOKIE['USID'])) { 

                $getEditId = $_COOKIE["USID"];
                $showEditInfo = "SELECT * FROM all_user WHERE id='$geteditid' ";
                $runEditInfo = mysqli_query($connect,$showEditInfo);

            while ($getInfo = mysqli_fetch_array($runEditInfo)) { ?>
                <form action="edit_core.php" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="<?php echo $getInfo['name'] ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" value="<?php echo $getInfo['email'] ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="roll" value="<?php echo $getInfo['roll'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="occupation" value="<?php echo $getInfo['occupation'] ?>">
                    </div>
                    <input type="hidden" name="editId" value="<?php echo $getInfo['id'] ?>">
                    <div class="form-group">
                        <button name="edit-btn" class="btn btn-success ml-auto">Save</button>
                    </div>
                </form>
                 
            <?php } 
            }
             ?>
        </div>
    </div>
</div>

<?php 
require_once("footer.php");
 ?>
