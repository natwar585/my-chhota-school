<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<?php
	session_start();
	include "connection.php";
	error_reporting(0);
	echo '
     <!-- Favicon -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
     <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
     <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
     <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!-- Style For This Template -->
    <link rel="stylesheet" href="assets/css/style.css">
     <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">';
    ?>

</head>
<body>
	<div class="user-register">
		<div class="title-box">
			<h2>Admin Login</h2>
		</div>
		<div class="error-msg">

			<?php
				if(isset($_POST['login-admin'])){
					$admin = $_POST['admin'];
					if(empty($_POST['admin']) || empty($_POST['password'])){
						echo "All fields required !";
					}
					else{
						$select = $pdo->prepare("SELECT * FROM admin WHERE AdminName = '$admin'");
						$select->execute();
						$data = $select->fetch(PDO::FETCH_ASSOC);
						if(password_verify($_POST['password'], $data['Password'])){
							$_SESSION['admin'] = $admin;
							header('location:admin_page.php');
						}
						else{
							echo "Incorrect inputs !";
						}
					}
				}
			?>
			
		</div>
		<div class="form-box">
			<p>Only admin can login here !</p>
			<form action="" method="POST">
	            <input type="text" name="admin" placeholder="Admin name" class="form-control" autocomplete="off">
	            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
	            <button type="submit" name="login-admin" class="btn btn-primary">Login</button>
	        </form>
	        <p>If you are not admin ? <i class="fa fa-times" aria-hidden="true" onclick="history.go(-1)"></i></p>
		</div>
	</div>
</body>
</html>