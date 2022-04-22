<?php
    session_start();
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
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
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
    <!-- Scroll To Top End-->

    <!----------------------
    |     Header Begin     |
    ----------------------->

        <!-- Top Header Begin-->
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
                           <a href="user_register.php"><p>Register</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->

        <!-- Running Bus Begin-->
            <div class="bus">
                <div class="box">
                    <a href="visit.html"><img src="assets/images/bus.png"/></a>
                </div>
            </div>
        <!-- Bus End -->

        <!-- Bottom Header Begin-->
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
                                        <a class="nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#enroll">Admission</a>
                                    </li>
                                </ul>
                                <a href="admin_login.php" class="my-btn">Admin</a>
                                <a href="user_register.php" class="my-btn" id="login-btn">Register</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header End-->
    </div>
    <!-------------------
    |   Header End      |
    -------------------->
    <div class="beginimg">
        <img src="assets/images/beginimage.png" alt="banner image">
    </div>
    <!-----------------------
    | Welcome Banner Begin  |
    ------------------------>

    <div class="banner" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner-txt">
                        <h1>Welcome to our school</h1>
                        <p>My chhota school mission is to make high quality education accessible and affordable.<p>
                        <p>At <b>"MY CHHOTA SCHOOL"</b> we believe that each child is born with a unique set of gift and talent. We understand that in order for children to succeed in today's highly competitive and technologically advance world,they need a whole new set of learning and cognitive skills. Which is why we have developed the unique "MY CHHOTA SCHOOL" concept which ensures that our kids are self-assured, inquisitive and better prepared for schooland the life ahead. A concept that makes the entire early education process a child's play.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-img">
                        <img src="assets/images/bannerlogo.png" alt="banner image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------
    |   Welcome Banner End   |
    ------------------------->

    <!--------------------
    |    About Begin     |
    --------------------->
    <div class="about" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="part-img">
                        <img src="assets/images/aboutsection.jpg" alt="about">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-7 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-txt">
                        <div class="title">
                            <p>about us</p>
                            <h2>Little about us</h2>
                        </div>
                        <p>My chhota school mission is to make high quality education accessible and affordable to all Indians by being present in each of India's 6000 blocks. We strive to promote holistic growth by taking into account, the kids' physical, cognitive, social and emotional needs.</p>
                        <a href="about.php" class="my-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------
    |     About End      |
    --------------------->
   

    <!--------------------
    |    Classes Begin   |
    --------------------->
    <div class="classes" id="enroll">
        <div class="container">
            <div class="heading">
                <p>ADMISSION</p>
                <h2>Enroll Your Child</h2>
                <p id="quotes">We nurture young minds in a culturally appropriate environment and provide opportunities that will help realise their potential.</p><br>
                <h2 id="choose">Choose Your Child Class</h2>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" onclick="change_prenursery()">
                    <a class="nav-link active" data-toggle="tab" role="tab" aria-selected="true">
                        Pre-Nursery
                    </a>
                </li>
                <li class="nav-item" onclick="change_nursery()">
                    <a class="nav-link" data-toggle="tab" role="tab" aria-selected="false">
                        Nursery
                    </a>
                </li>
                <li class="nav-item" onclick="change_lkg()">
                    <a class="nav-link"  data-toggle="tab"  role="tab" aria-selected="false">
                        LKG
                    </a>
                </li>
                <li class="nav-item" onclick="change_ukg()">
                    <a class="nav-link" data-toggle="tab"  role="tab"  aria-selected="false">
                        UKG
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="analyst" role="tabpanel" aria-labelledby="analyst-tab">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-5">
                            <div class="part-img">
                                <img src="assets/images/ukg.png" alt="image-1">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-7">
                            <div class="part-txt">
                  
                                <form id="enrollment_form" action="enrollment.php" method="POST">
                                    <label>Class</label>
                                    <input type="text" name="class" class="form-control" id="classname" value="Pre-Nursery" autocomplete="off">
                                    <label>Child name</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off" id="childname">
                                    <div><h6 id="childnameerror"></h6>
                                    <i class="fa fa-check-circle" aria-hidden="true" id="done_childname"> Done</i></div>
                                    <label>Father's name</label>
                                    <input type="text" name="fname" class="form-control" autocomplete="off" id="fathername">
                                    <div><h6 id="fathernameerror"></h6>
                                    <i class="fa fa-check-circle" aria-hidden="true" id="done_fathername"> Done</i></div>
                                    <label>Parent's mobile number</label>
                                    <input type="text" name="mobilenumber" class="form-control" autocomplete="off" id="mobilenumber">
                                    <div><h6 id="mobilenumbererror"></h6>
                                    <i class="fa fa-check-circle" aria-hidden="true" id="done_mobilenumber"> Done</i></div>
                                    <label>Address</label>
                                    <textarea type="text" name="address" class="form-control" autocomplete="off" id="address"></textarea>
                                    <div><h6 id="addresserror"></h6>
                                    <i class="fa fa-check-circle" aria-hidden="true" id="done_address"> Done</i></div>
                                    <div class="error-msg">
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $('#enrollment_form').submit(function(){
                                                    var childname = $('#childname').val();
                                                    var fathername = $('#fathername').val();
                                                    var mobilenumber = $('#mobilenumber').val();
                                                    var address = $('#address').val();
                                                    var name_format = /^[a-zA-Z- ]+$/;
                                                    var mobilenumber_format = /^[0-9]+$/;
                                                    if(childname.length == '' || fathername.length == '' || mobilenumber.length == ' ' || address.length == ''){
                                                        $('.error-msg').text('All fields are required !');
                                                        childname = false;
                                                        fathername = false;
                                                        mobilenumber = false;
                                                        address = false;
                                                        return false;
                                                    } else if(!childname.match(name_format)){
                                                        $('.error-msg').text('Numbers are not allowed in childname !');
                                                        childname = false;
                                                        return false;
                                                    } else if(childname.length < "3"){
                                                        $('.error-msg').text('Chidname is too short !');
                                                        childname = false;
                                                        return false;
                                                    } else if(!fathername.match(name_format)){
                                                        $('.error-msg').text('Numbers are not allowed in fathername !');
                                                        fathername = false;
                                                        return false;
                                                    } else if(fathername.length < "3"){
                                                        $('.error-msg').text('Fathername is too short !');
                                                        fathername = false;
                                                        return false;
                                                    } else if(!mobilenumber.match(mobilenumber_format)){
                                                        $('.error-msg').text('Invalid mobile number !');
                                                        mobilenumber = false;
                                                        return false;
                                                    } else if(mobilenumber.length != "10"){
                                                        $('.error-msg').text('Invalid mobile number !');
                                                        mobilenumber = false;
                                                        return false;
                                                    }else if(address.length < "15"){
                                                        $('.error-msg').text('Address is too short !');
                                                        address = false;
                                                        return false;
                                                    }
                                                    else{
                                                        var enrolldata = $('#enrollment_form').serialize();
                                                        $.post('enrollment.php', enrolldata, function(){
                                                            swal("Thank You !", "Your child enrolled successfully.", "success");
                                                        });
                                                        return false;
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                    <input type="submit" value="Submit" name="enroll" class="btn btn-primary">
                                    <p style="color: #777777">After submission , please contact us to confirm your child admission ...</p>
                                    <a href="contact.php"><input type="button" value="Contact us" name="" class="btn btn-dark" id="enroll_btn"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------
    |    Classes End    |
    -------------------->

    <!--------------------
    |   Comment Begin    |
    --------------------->

    <div class="comments">
        <div class="container">
            <div class="heading">
                <h2>What people say about us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="txt owl-carousel owl-theme">
                        <div class="comment">
                            <div class="part-img">
                                <img src="assets/images/people.jpg" alt="img-1">
                            </div>
                            <div class="part-txt">
                                <h3>SWATI SHARMA</h3>
                                <p>"A great platform for my child to sit and learn at home during this pandemic situation! He is growing inside out! Super happy to join MY CHHOTA SCHOOL"</p>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="part-img">
                                <img src="assets/images/people.jpg" alt="img-2">
                            </div>
                            <div class="part-txt">
                                <h3>Pradeep Garg</h3>
                                <p>\"Candy Kid\" made my daughter learn all her numbers and alphabets in fun ways- with their fun activities and stories.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------
    |   Comment End      |
    --------------------->

    <!------------------
    |   Footer Begin  |
    ------------------->
    <div class="footer">
        <div class="container">
            <div class="copyright">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="part-txt">
                            <p>&copy; 2020  All rights reserved | <br>Design with &hearts; by <a href="#home">My Chhota School</a></p>
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
    |   Footer End    |
    ------------------->



 <!-- Enroll Child Class -->
    <?php
         echo '
            <script type="text/javascript">
                function change_prenursery(){
                  document.getElementById("classname").value= "Pre-Nursery";
                  }

                function change_nursery(){
                      document.getElementById("classname").value= "Nursery";
                      }

                function change_lkg(){
                      document.getElementById("classname").value= "LKG";
                      }

                function change_ukg(){
                      document.getElementById("classname").value= "UKG";
                      }
            </script>';
    ?>
        <script>
                $(document).ready(function(){
                        $("#childnameerror, #done_childname").hide();
                        $("#fathernameerror, #done_fathername").hide();
                        $("#mobileerror, #done_mobilenumber").hide();
                        $("#addresserror, #done_address").hide();

                            var child_name = true;
                            var father_name = true;
                            var mobile_number = true;
                            var address = true;

                        $("#childname").keyup(function(){
                                check_childname();
                            });

                        function check_childname(){
                            var childname = $("#childname").val();
                            var nameformat = /^[a-zA-Z- ]+$/;

                            if(childname.length == ""){
                                $("#done_childname").hide();
                                $("#childnameerror").show();
                                $("#childnameerror").html("*Please, fill the childname !");
                                $("#childnameerror").focus();
                                $("#childnameerror").css("color", "#ff0000");
                                $('.error-msg').text('All fields are required !');
                                                        childname = false;
                                                        fathername = false;
                                                        mobilenumber = false;
                                                        address = false;
                                                        return false;
                                child_name = false;
                                return false;

                            } else if(!childname.match(nameformat)){
                                        $("#done_childname").hide();
                                        $("#childnameerror").show();
                                        $("#childnameerror").html("*Numbers are not allowed in childname !");
                                        $("#childnameerror").focus();
                                        $("#childnameerror").css("color", "#ff0000");
                                        child_name = false;
                                        return false;

                                    } else if(childname.length < "3"){
                                                $("#done_childname").hide();
                                                $("#childnameerror").show();
                                                $("#childnameerror").html("*Childname is too short !");
                                                $("#childnameerror").focus();
                                                $("#childnameerror").css("color", "#ff0000");
                                                child_name = false;
                                                return false;
                                            }
                                            else{
                                                $("#childnameerror").hide();
                                                $("#done_childname").show();
                                                $("#done_childname").css("color", "#52d017");
                                            }
                        }

                        $("#fathername").keyup(function(){
                                check_fathername();
                            });

                        function check_fathername(){
                            var fathername = $("#fathername").val();
                            var nameformat = /^[a-zA-Z- ]+$/;

                            if(fathername.length == ""){
                                $("#done_fathername").hide();
                                $("#fathernameerror").show();
                                $("#fathernameerror").html("*Please, fill the Father name !");
                                $("#fathernameerror").focus();
                                $("#fathernameerror").css("color", "#ff0000");
                                child_name = false;
                                return false;

                            } else if(!fathername.match(nameformat)){
                                        $("#done_fathername").hide();
                                        $("#fathernameerror").show();
                                        $("#fathernameerror").html("*Numbers are not allowed in Father name !");
                                        $("#fathernameerror").focus();
                                        $("#fathernameerror").css("color", "#ff0000");
                                        child_name = false;
                                        return false;

                                    } else if(fathername.length < "3"){
                                                $("#done_fathername").hide();
                                                $("#fathernameerror").show();
                                                $("#fathernameerror").html("*Father name is too short !");
                                                $("#fathernameerror").focus();
                                                $("#fathernameerror").css("color", "#ff0000");
                                                child_name = false;
                                                return false;
                                            }
                                            else{
                                                $("#fathernameerror").hide();
                                                $("#done_fathername").show();
                                                $("#done_fathername").css("color", "#52d017");
                                            }
                        }

                        $("#mobilenumber").keyup(function(){
                                check_mobilenumber();
                            });

                        function check_mobilenumber(){
                            var mobilenumber = $("#mobilenumber").val();
                            var mobilenumber_format = /^[0-9]+$/;

                            if(mobilenumber.length == ""){
                                $("#done_mobilenumber").hide();
                                $("#mobilenumbererror").show();
                                $("#mobilenumbererror").html("*Please, fill the mobilenumber !");
                                $("#mobilenumbererror").focus();
                                $("#mobilenumbererror").css("color", "#ff0000");
                                child_name = false;
                                return false;

                            } else if(!mobilenumber.match(mobilenumber_format)){
                                        $("#done_mobilenumber").hide();
                                        $("#mobilenumbererror").show();
                                        $("#mobilenumbererror").html("*Characters and spaces are not allowed in mobilenumber !");
                                        $("#mobilenumbererror").focus();
                                        $("#mobilenumbererror").css("color", "#ff0000");
                                        child_name = false;
                                        return false;

                                    } else if(mobilenumber.length != "10"){
                                                $("#done_mobilenumber").hide();
                                                $("#mobilenumbererror").show();
                                                $("#mobilenumbererror").html("*Invalid mobile number !");
                                                $("#mobilenumbererror").focus();
                                                $("#mobilenumbererror").css("color", "#ff0000");
                                                child_name = false;
                                                return false;
                                            }
                                            else{
                                                $("#mobilenumbererror").hide();
                                                $("#done_mobilenumber").show();
                                                $("#done_mobilenumber").css("color", "#52d017");
                                            }
                        }

                        $("#address").keyup(function(){
                                checkaddress();
                            });

                        function checkaddress(){
                            var address = $("#address").val();

                            if(address.length == ""){
                                $("#done_address").hide();
                                $("#addresserror").show();
                                $("#addresserror").html("*Please, fill the address !");
                                $("#addresserror").focus();
                                $("#addresserror").css("color", "#ff0000");
                                child_name = false;
                                return false;

                            } else if(address.length < "15"){
                                                $("#done_address").hide();
                                                $("#addresserror").show();
                                                $("#addresserror").html("*Address is too short, Please fill complete address !");
                                                $("#addresserror").focus();
                                                $("#addresserror").css("color", "#ff0000");
                                                child_name = false;
                                                return false;
                                            }
                                            else{
                                                $("#addresserror").hide();
                                                $("#done_address").show();
                                                $("#done_address").css("color", "#52d017");
                                            }
                        }
                    });
        </script>
    <!-- Javascript links-->
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
   
</body>
</html>