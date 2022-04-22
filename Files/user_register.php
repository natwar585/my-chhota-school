<!DOCTYPE html>
<html>
<head>
	<title>Registration - My Chhota School</title>
	<?php
	 include "connection.php";
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

	<div class="user-register">
		<div class="title-box">
			<h2>Register</h2>
		</div>
		<div class="error-msg">
			<?php
				if(isset($_POST['register'])){
					if(empty($_POST['name']) || empty($_POST['mobilenumber']) || empty($_POST['role'])){
						echo "All fields are required !";
					}
					else if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])){
						echo "Invalid name !";
					}
					else if(!preg_match('/^[0-9]{10}$/', $_POST['mobilenumber'])){
						echo "Invalid mobile number !";
					}
					else if($_POST['role'] == 'Role'){
						echo "Please, Select a role !";
					}
					else{
						$select = $pdo->prepare("SELECT * FROM users WHERE MobileNumber = :mobilenumber");  
						$select->execute(array(
							':mobilenumber' => $_POST['mobilenumber']));  
						$match = $select->rowCount();
						if($match > 0){
							echo "Mobile number already registered !";
						}
						else{
							$insert = $pdo->prepare("INSERT INTO users (Name, MobileNumber, Role) VALUES (:name, :mobilenumber, :role)");
							$insert->execute(array(
								':name' => $_POST['name'],
								':mobilenumber' => $_POST['mobilenumber'],
								':role' => $_POST['role']));
								echo '<div class="success-msg">Registration successfull !</div>';

						}
					}
				}
			?>
		</div>
		<div class="form-box">
			<form action="" method="POST">
	            <input type="text" name="name" placeholder="Name" class="form-control" autocomplete="off">
	            <input type="text" name="mobilenumber" placeholder="Mobile number" class="form-control" autocomplete="off">
	            <select type="text" name="role" class="form-control" value="Role">
	            	<option>Role</option>
				    <option value="Teacher">Teacher</option>
				    <option value="Parents">Parent</option>
				</select>
	            <button type="submit" name="register" class="btn btn-primary">Register</button>
	        </form>
		</div>
	</div>

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
