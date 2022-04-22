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
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
?>
</head>
<body>

<!-- preloader begin-->
    <div class="preloader">
        <div class="loader">
            <img src="assets/images/logo.png">
        </div>
    </div>
    <!-- preloader end -->

    <!-- scroll to top -->
    <div class="scroll-to-top">
    </div>
    <!-- scroll to top -->

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
                                        <a class="nav-link" href="about.php">about</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">contact</a>
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

    <!-- Page Name -->
    <div class="page-name">
        <h2>Contact Us</h2>
    </div>
    <!-- Page Name End -->

    <!--------------------------
    |   Contact Section Begin   |
    --------------------------->

    <section class="contact">
    	<div class="heading">
            <img src="assets/images/hello.png">
			<h3>Feel free to say Hello !</h3>
		</div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6">
			    		<div class="contact-part">
			    			<div class="box">
			    				<div class="icons">
			    					<i class="fa fa-phone" aria-hidden="true"></i>
			    				</div>
			    				<div class="text">
			    					<h3>Phone</h3>
			    					<p><?php echo $value['Phone']; ?></p>
			    				</div>
			    			</div>
			    			<div class="box">
			    				<div class="icons">
			    					<img src="https://img.icons8.com/ios-glyphs/60/000000/whatsapp.png"/>
			    				</div>
			    				<div class="text">
			    					<h3>Whatsapp</h3>
			    					<p><?php echo $value['Whatsapp']; ?></p>
			    				</div>
			    			</div>
			    			<div class="box">
			    				<div class="icons">
			    					<i class="fas fa-envelope"></i>
			    				</div>
			    				<div class="text">
			    					<h3>Email</h3>
			    					<p><?php echo $value['Email']; ?></p>
			    				</div>
			    			</div>
			    			<div class="box">
			    				<div class="icons">
			    					<i class="fa fa-map-marker" aria-hidden="true"></i>
			    				</div>
			    				<div class="text">
			    					<h3>Location</h3>
			    					<p><?php echo $value['Location']; ?></p>
			    					<a href="<?php echo $value['InMap']; ?>">
			    					<p>See Map <i class="fa fa-globe" aria-hidden="true"></i></p></a>
			    				</div>
			    			</div>
			    		</div>
                </div>
                <div class="col-xl-6 align-items-center">
                    <div class="form-part">
                    	<h2>Send a message ...</h2>
                         <form action="" method="POST" id="message_form">
                            <label>Your Name</label>
                                <input type="text" name="name" class="form-control" autocomplete="off" id="name">
                           	<label>Your Mobile Number</label>
                                <input type="text" name="mobilenumber" class="form-control" autocomplete="off" id="mobilenumber">
                            <label>Message</label>
                                <textarea type="text" name="message" class="form-control" autocomplete="off" id="message"></textarea>
                                <div class="error-msg">
                                    <script type="text/javascript">
                                            $(document).ready(function(){
                                                $('#message_form').submit(function(){
                                                    var name = $('#name').val();
                                                    var mobilenumber = $('#mobilenumber').val();
                                                    var message = $('#message').val();
                                                    var name_format = /^[a-zA-Z- ]+$/;
                                                    var mobilenumber_format = /^[0-9]+$/;
                                                    if(name.length == '' || fathername.length == '' || mobilenumber.length == ' ' || address.length == ''){
                                                        $('.error-msg').text('All fields are required !');
                                                        name = false;
                                                        fathername = false;
                                                        mobilenumber = false;
                                                        address = false;
                                                        return false;
                                                    } else if(!name.match(name_format)){
                                                        $('.error-msg').text('Numbers are not allowed in name !');
                                                        name = false;
                                                        return false;
                                                    } else if(name.length < "3"){
                                                        $('.error-msg').text('Name is too short !');
                                                        name = false;
                                                        return false;
                                                    } else if(!mobilenumber.match(mobilenumber_format)){
                                                        $('.error-msg').text('Invalid mobile number !');
                                                        mobilenumber = false;
                                                        return false;
                                                    } else if(mobilenumber.length != "10"){
                                                        $('.error-msg').text('Invalid mobile number !');
                                                        mobilenumber = false;
                                                        return false;
                                                    } else{
                                                        var messagedata = $('#message_form').serialize();
                                                        $.post('message_insert.php', messagedata, function(){
                                                            swal("Thanks !", "Your message sent successfully.", "success");
                                                        });
                                                        return false;
                                                    }
                                                });
                                            });
                                        </script>
                                </div>
                                <input type="submit" value="Send" name="send" class="btn btn-primary send-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <!--------------------------
    |   Contact Section End   |
    --------------------------->
 	
    <!------------------
    |   Footer Begin    |
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
    <!----------------
    |   Footer End    |
    ----------------->
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