<?php 
require_once("header.php");
 ?>

 <div class="">
     <div class="bg-info">
         <h2 class="text-light">
             <marquee direction="scroll">National Institute of Engineering & Technology</marquee>
         </h2>
     </div>
 </div>

<?php 
if (isset($_REQUEST['loginsuccess'])) {?>
    <div class="container mt-1">
        <div class="alert alert-success">
        <strong>Congrats! </strong><span> Login successfull!</span>
    </div>
    </div>
<?php }
 ?>

 <?php 
if (isset($_REQUEST['loggedout'])) {?>
    <div class="container mt-1">
        <div class="alert alert-info">
        <strong>Logged out! </strong>
    </div>
    </div>
<?php }
 ?>

<?php
 if (isset($_REQUEST['accountdeleted'])) {?>
    <div class="container mt-1">
        <div class="alert alert-danger">
        <strong>Account deleted! </strong>
    </div>
    </div>
<?php }
 ?>

 <div class="container pt-3">
    <h2 class="text-center">Departments</h2><br> 
    
    <div class="row">
    
    <!-- 1 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/computer.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Computer</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-computer">About</button>
                        <div class="collapse text-justify" id="about-computer">
                            It encompasses both the study of theoretical algorithms and the practical problems involved in implementing them through computer hardware and software. The study of computer science has many branches, including artificial intelligence, software engineering, programming and computer graphics.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 1 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/electrical.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Electrical</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-electrical">About</button>
                        <div class="collapse text-justify" id="about-electrical">
                            A short circuit is an electrical circuit that allows a current to travel along an unintended path with no or very low electrical impedance. This results in an excessive current flowing through the circuit. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/civil.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Civil</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-civil">About</button>
                        <div class="collapse text-justify" id="about-civil">
                            Civility is not trivial, because it allows us to be ethical agents in the most common of situations. ... The harmonious relationships that civility helps foster have a positive impact on our overall well-being. Civility and the survival of society as we know it.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 3 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/architectura.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Architectur</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-architectur">About</button>
                        <div class="collapse text-justify" id="about-architectur">
                            Architecture can mean: A general term to describe buildings and other physical structures. ... The practice of the architect, where architecture means offering or rendering professional services in connection with the design and construction of buildings, or built environments.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 4 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/electronics.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Electronics</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-electronics">About</button>
                        <div class="collapse text-justify" id="about-electronics">
                            Electronics is the branch of science that deals with the study of flow and control of electrons (electricity) and the study of their behavior and effects in vacuums, gases, and semiconductors, and with devices using such electrons.rdware and software. The study of computer science has many branches, including artificial intelligence, software engineering, programming and computer graphics.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 5 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/mechanical.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Mechanical</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-mechanical">About</button>
                        <div class="collapse text-justify" id="about-mechanical">
                            Mechanical is something that relates to the skill or use of machinery or tools. An example of mechanical is a mechanical skill, when someone is able to fix machines. YourDictionary definition and usage example. Copyright © 2018 by LoveToKnow Corp.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 6 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/rac.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">RAC</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-rac">About</button>
                        <div class="collapse text-justify" id="about-rac">
                            Refrigerators may seem like a mundane fixture of everyday life, but refrigeration engineering requires a well-rounded skill set and solid grasp of thermodynamics. With a four-year bachelor's degree in mechanical engineering, potential refrigeration engineers can enter the job market to design, create, and refine refrigeration syst
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 7 -->
        <div class="col-md-4 col-lg-3">
            <div class="card my-3">
                <img style="width:100%; height:200px" class="card-img-top" src="web-img/envir.jpg">
                <div class="card-body">
                    <h4 class="text-center card-title">Environmental</h4>
                    
                    <div>
                        <h6>Total student <span class="badge badge-primary align-top">50</span></h6>
                        <h6>Active student <span class="badge badge-success align-top">45</span></h6>
                    </div>
                    <div>
                        <button style="cursor:pointer;" class="btn btn-dark btn-sm mb-1" data-toggle="collapse" data-target="#about-envir">About</button>
                        <div class="collapse text-justify" id="about-envir">
                            The circumstances, objects, or conditions by which one is surrounded. 2a : the complex of physical, chemical, and biotic factors (such as climate, soil, and living things) that act upon an organism or an ecological community and ultimately determine its form and survival.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<br><br><br>
<?php 
require_once("footer.php");
 ?>

