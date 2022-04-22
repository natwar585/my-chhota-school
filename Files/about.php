 <?php
    include "connection.php";
    $select = $pdo->prepare("SELECT * FROM contacts");
    $select->execute();
    $value = $select->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Chhota School</title>
    <?php
        echo '
        <!-- favicon -->
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
        <!-- fontawesome -->
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <!-- slick slider -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- style for this template -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- responsive style -->
        <link rel="stylesheet" href="assets/css/responsive.css">';
    ?>
</head>
<body>
    <!-- Preloader Begin-->
    <div class="preloader">
        <div class="loader">
            <img src="assets/images/logo.png">
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top">
    </div>
    <!-- Scroll To Top -->

    <!------------------
    |   Header Begin    |
    ------------------->
    <!-- Top Header Begin -->
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="top-left">
                            <ul>
                                <li><a href="#"><i class="fas fa-envelope"></i><?php echo $value['Email']; ?></a></li>
                                <li><a href="#"><i class="fas fa-phone"></i><?php echo $value['Phone']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="top-right">
                            <a href="<?php echo $value['Facebook']; ?>"><i class="fab fa-facebook-f" title="Facebook"></i></a>
                            <a href="<?php echo $value['Instagram']; ?>"><i class="fab fa-twitter" title="Twitter"></i></a>
                            <a href="<?php echo $value['Twitter']; ?>"><i class="fab fa-instagram" title="Instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->

        <!-- Bottom Header Begin -->
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-7 d-xl-block d-lg-block d-flex align-items-center">
                                <div class="logo">
                                    <a href="MyChhotaSchool.php"><img src="assets/images/logo.png" alt="LOGO"></a>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-none d-block col-5">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="MyChhotaSchool.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header End -->
    </div>

    <!------------------
    |   Header End      |
    ------------------->

    <!-- Page Name Begin-->
    <div class="page-name">
    	<h2>About</h2>
    </div>
    <!-- Page Name End -->
    
    <?php
        $select = $pdo->prepare("SELECT * FROM about");
        $select->execute();
        $value = $select->fetch(PDO::FETCH_ASSOC);
    ?>

    <!-- Admin Part -->
    <div class="admini">
        <div class="part-img">
            <img src="assets/images/adminlogo.png">
        </div>
        <div class="part-txt">
            <h3>Admin Name</h3>
            <p>Administrator</p>
        </div>
    </div>

    <!-- About School -->
    <div class="about-school">
        <p style="">My chhota school mission is to make high quality education accessible and affordable to all Indians by being present in each of India's 6000 blocks. We strive to promote holistic growth by taking into account, the kids' physical, cognitive, social and emotional needs</p>
    </div>
    <!--------------------------------------
    |    Carousel Begin (Activity Wheels)   |
    --------------------------------------->
    <div class="wheel_carousel">
        <div class="container">
            <div class="heading">
                <h2>Activity Wheels</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="box owl-carousel owl-theme">
                        <div class="wheel_name">
                            <h3>Pre-Nursery Activity Wheel</h3>
                            <div class="part-img">
                                <img src="assets/images/whl1.png" data-toggle="modal" data-target="#pre-nursery">
                            </div>
                        </div>
                        <div class="wheel_name">
                            <h3>Nursery Activity Wheel</h3>
                            <div class="part-img">
                                <img src="assets/images/whl2.png" data-toggle="modal" data-target="#nursery">
                            </div>
                        </div>
                        <div class="wheel_name">
                            <h3>LKG Activity Wheel</h3>
                            <div class="part-img">
                                <img src="assets/images/whl3.png" data-toggle="modal" data-target="#lkg">
                            </div>
                        </div>
                        <div class="wheel_name">
                            <h3>UKG Activity Wheel</h3>
                            <div class="part-img">
                                <img src="assets/images/whl4.png" data-toggle="modal" data-target="#ukg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------
    |    Carousel End        |
    ------------------------->

    <!------------------
    |    Cards Begin    |
    -------------------->
<div class="cards">
    <div class="card" onclick="this.classList.toggle('expanded')">
        <div class="image">
            <img src="assets/images/teacher.png"/>
            <div class="body-text">Teacher</div>
        </div>
    
        <div class="text1">
            <div class="text-content">
              <h1 class="title"><?php echo $value['Teacher']; ?></h1>
            </div>
        </div>
      <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
        <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
    </div>

    <div class="card" onclick="this.classList.toggle('expanded')">
        <div class="image">
            <img src="assets/images/student.png"/>
            <div class="body-text">Student</div>
        </div>
    
        <div class="text1">
            <div class="text-content">
              <h1 class="title"><?php echo $value['Student']; ?></h1>
            </div>
        </div>
      <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
        <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
    </div>
    <div class="card" onclick="this.classList.toggle('expanded')">
        <div class="image">
            <img src="assets/images/classroom.png"/>
            <div class="body-text">Classroom</div>
        </div>
    
        <div class="text1">
            <div class="text-content">
              <h1 class="title"><?php echo $value['Classroom']; ?></h1>
            </div>
        </div>
      <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
        <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
    </div>
    <div class="card" onclick="this.classList.toggle('expanded')">
        <div class="image">
            <img src="assets/images/schoolbus.png"/>
            <div class="body-text">Bus</div>
        </div>
    
        <div class="text1">
            <div class="text-content">
              <h1 class="title"><?php echo $value['Bus']; ?></h1>
            </div>
         </div>
      <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
        <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5"/></svg>
    </div>
</div>
   
    <!------------------
    |    Cards End      |
    ------------------->

    <!------------------
    |  Footer Begin     |
    ------------------->
    <div class="footer">
        <div class="container">
            <div class="copyright">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="part-txt">
                            <p>&copy; All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-5">
                        <div class="social">
                            <a href="<?php echo $value['Facebook']; ?>"><i class="fab fa-facebook-f" title="Facebook"></i></a>
                            <a href="<?php echo $value['Instagram']; ?>"><i class="fab fa-twitter" title="Twitter"></i></a>
                            <a href="<?php echo $value['Twitter']; ?>"><i class="fab fa-instagram" title="Instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------
    |    Footer End     |
    ------------------->

<!------------------
|    Modal Begin    |
------------------->

    <!--------------------------
    |  Pre-Nursery Modal Begin  |
    ---------------------------->
<div class="modal fade" id="pre-nursery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pre-Nursery Activity </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
         <div class="modal-body">
                <ul>
                    <li><b>Self Smart</b> ( Concept Discussion, Show & Tell, Celebrations, Stage Presentations, Educational Trip )</li>
                    <li><b>Body Smart</b> ( Blooming Yoga, Outdoor Activities, Sports Day, Zumba Session )</li>
                    <li><b>Word Smart</b> ( Phonetic Awareness Program, Mathematical Skills, STEAM Learning, Shadow Puppyetry, Think & Speak )</li>
                    <li><b>Nature Smart</b> ( Nature Exploration, Green Wall, Nature Portrait )</li>
                    <li><b>Number and Logic Smart</b> ( Mathematics Skills, STEM Learning )</li>
                    <li><b>Picture Smart</b> ( Picture Talk, Flash Cards, Learning Tablet, Smart Class, Smart Phone Book, Reading Soar )</li>
                    <li><b>Music Smart</b> ( Musical Wall, Dance Classes, Annual Day, Make a Song )</li>
                    <li><b>People Smart</b> ( Monthly Concepts, Celebrations, Presentation, Excursion )</li>
                </ul>
            </div>
       </div>
     </div>
   </div>
    <!--------------------------
    |   Pre-Nursery Modal End   |
    --------------------------->

    <!------------------------
    |   Nursery modal Begin   |
    ------------------------->
    <div class="modal fade" id="nursery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nursery Activity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <ul>
                        <li><b>Self Smart</b> ( Monthly Concepts, Celebrations, Stage Presentations, Educational Trip )</li>
                        <li><b>Body Smart</b> ( Sound Yoga, Outdoor Activities, Sports Day, Smart Exercise )</li>
                        <li><b>Word Smart</b> ( Grammer Tools, Mathematical Toolss, STEAM Learning, Shadow Puppyetry, Hindi Gyan )</li>
                        <li><b>Nature Smart</b> ( Nature Walk, Nature Talk, Green Wall, Nature Portrait )</li>
                        <li><b>Number and Logic Smart</b> ( Mathematics Learning readines, STEM Learning )</li>
                        <li><b>Picture Smart</b> ( Think & Draw, Picture Talk, Flash Cards, Learning Tablet, Smart Class, Smart Book  )</li>
                        <li><b>Music Smart</b> ( Musical Wall, Dance Classes, Annual Day, Sing a Song, My Tunes )</li>
                        <li><b>People Smart</b> ( Group Discussion, Snacks Time, Circle Time, Celebrations, Presentation, Excursion )</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!----------------------
    |   Nursery Modal End   |
    ----------------------->

    <!--------------------
    |   LKG Modal Begin   |
    --------------------->
    <div class="modal fade" id="lkg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LKG Activity </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span ari a-hidden="true">&times;</span>
                    </button>
                </div>
                 <ul>
                    <li><b>Self Smart</b> ( Monthly Concepts, Celebrations, Stage Presentations, Educational Trip )</li>
                    <li><b>Body Smart</b> ( Story Yoga, Outdoor Activities, Sports Day, Smart Exercise )</li>
                    <li><b>Word Smart</b> ( Lettres Literacy, Picture Talk, Tounge Twister, Rhyme Basket, Volce Over Narration )</li>
                    <li><b>Nature Smart</b> ( Nature Walk, Nature Talk, Go Green Go )</li>
                    <li><b>Number and Logic Smart</b> ( Number Sensibility Sorting )</li>
                    <li><b>Picture Smart</b> ( Flash Cards, Story Puppets, Learning Tablet, Smart Class, Smart Book )</li>
                    <li><b>Music Smart</b> ( Musical Wall, Dance Classes, Annual Day, Sing a Song )</li>
                    <li><b>People Smart</b> ( Group Activity, Snacks Time, Circle Time, Celebrations, Presentation, Excursion )</li>
                </ul>
            </div>
        </div>
    </div>
    <!------------------
    |   LKG Modal End   |
    ------------------->

    <!--------------------
    |   UKG Modal Begin   |
    --------------------->

    <div class="modal fade" id="ukg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UKG Activity </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span ari a-hidden="true">&times;</span>
                    </button>
                </div>
                     <ul>
                        <li><b>Self Smart</b> ( Monthly Concepts, Listen & Speak, Celebrations, Stage Presentations, Educational Trip )</li>
                        <li><b>Body Smart</b> ( Story Yoga, Outdoor Activities, Sports Day, Smart Exercise )</li>
                        <li><b>Word Smart</b> ( Pre-Phonetic Awareness, Tongue Twister, Shadow Puppetry, Learn & Speak )</li>
                        <li><b>Nature Smart</b> ( Nature Walk, Nature Talk, Go Green Go, My Greean Collection )</li>
                        <li><b>Number and Logic Smart</b> ( Rational Counting, STEAM Learning )</li>
                        <li><b>Picture Smart</b> (  Picture Talk, Flash Cards, Story Puppets, Learning Tablet, Smart Class, Smart Book  )</li>
                        <li><b>Music Smart</b> ( Musical Wall, Dance Classes, Annual Day, Sing a Song )</li>
                        <li><b>People Smart</b> ( Team Building Activity, Snacks Time, Circle Time, Celebrations, Presentation, Excursion )</li>
                    </ul>
            </div>
        </div>
    </div>
    <!------------------
    |   UKG Modal End   |
    ------------------->
    <?php
        echo '
        <!-- jquery -->
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <!-- sclick slider -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- custom javascript -->
        <script src="assets/js/main.js"></script>';
    ?>
</html>