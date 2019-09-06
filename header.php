<?php 
    require_once("config.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <!-- jquery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!-- external stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- external responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
     
</head>
<body class="bg-light">  

<nav class="navbar bg-dark  navbar-dark navbar-expand-md sticky-top">
    <div class="container">
        <h3><a class="btn btn-outline-light btn-sm" href="index.php"><i class="fas fa-home"></i></a></h3>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link  text-light" href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item">
                    <?php 
                    if (isset($_COOKIE['USID'])) { ?>
                        
                            <?php 
                                $getProfileId = $_COOKIE["USID"];
                                $showAllInfo = "SELECT * FROM all_user WHERE auth='$getProfileId' ";
                                $runAllInfo = mysqli_query($connect,$showAllInfo);
                                while ($getId = mysqli_fetch_array($runAllInfo)) { ?>
                                    <a class="nav-link text-light" href="profile.php?userid=<?php echo $getId['id'] ?>"><i class="fas fa-id-card"></i> Profile</a>
                               <?php }
                             ?>
                       <?php }
                     ?>
                </li>
                <li class="nav-item">
                    <?php 
                        if (!isset($_COOKIE["USID"])) {
                            echo '<a class="nav-link text-light" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>';
                        }
                     ?>
                </li>
                <li class="nav-item">
                    <?php 
                        if (!isset($_COOKIE['USID'])) {
                            echo '<a class="nav-link text-light" href="reg.php"><i class="fas fa-user-plus"></i> Signup</a>';
                        }
                     ?>
                </li>
                <li class="nav-item">
                    <?php 
                    if (isset($_COOKIE['USID'])) {
                        echo '<a class="nav-link text-light" href="user.php"><i class="fas fa-users"></i> Members</a>';
                    }
                     ?>
                </li>
                
                <li class="nav-item">
                    <?php 
                    if (isset($_COOKIE['USID'])) {
                        echo '<a class="nav-link text-light" href="logout_core.php"><i class="fas fa-sign-out-alt"></i> Logout</a>';
                    }
                     ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
