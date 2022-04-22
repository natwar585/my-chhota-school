<?php
    session_start();
    include "connection.php";
    $admin_name = $_SESSION['admin'];
    if($admin_name==true)
    {

    }
    else{
        header('location:admin_login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <?php
    echo '
    <!-- Favicon -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Style For This Template -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">
     <!-- Jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Sclick Slider -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Javascript -->
    <script src="assets/js/main.js"></script>';
    ?>
    <style type="text/css">
        * {
  transition: all 500ms ease-out;
  -webkit-transition: all 500ms ease-out;
    }
     </style>
</head>
<body style="background: #374046; overflow: hidden;">
    <div class="ct" id="t1">
        <div class="ct" id="t2">
            <div class="ct" id="t3">
                <div class="ct" id="t4">
                    <div class="ct" id="t5">
                    <section> 
                        <!----------------------
                        |   Sidemenu Begin    |
                        ----------------------->
                        <div class="sidebar">
                            <input type="checkbox" id="check">
                            <label for="check">
                                <a id="btn">Manage</a>
                                <i class="fas fa-times" id="cancel"></i>
                            </label>
                            <div class="menu">
                                <header>Manage</header>
                                    <ul>
                                        <a href="#t1"><li>See Admissions</li></a>
                                        <a href="#t2"><li>Update About</li></a>
                                        <a href="#t3"><li>Update Contacts</li></a>
                                        <a href="#t4"><li>Message</li></a>
                                        <a href="#t5"><li>Admin Details</li></a>
                                    </ul>
                                    <a href="admin_logout.php"><button class="btn btn-dark">Logout</button></a>
                            </div>
                        </div>
                        <!----------------------
                        |   Sidemenu End        |
                        ----------------------->
                        <div class="page" id="p1">
                            <div class="main-box">
                                <div class="title-box">
                                    <h2>Admissions</h2>
                                </div>
                                <div class="form-box">
                                    <div class="radio_tabs">
                                            <label class="radio_wrap" data-radio="radio_1">
                                                <input type="radio" name="prenursery" class="input">
                                                <span class="radio_mark">Pre-Nuresery</span>
                                            </label>
                                            <label class="radio_wrap" data-radio="radio_2">
                                                <input type="radio" name="prenursery" class="input">
                                                <span class="radio_mark">Nuresery</span>
                                            </label>
                                            <label class="radio_wrap" data-radio="radio_3">
                                                <input type="radio" name="prenursery" class="input">
                                                <span class="radio_mark">LKG</span>
                                            </label>
                                            <label class="radio_wrap" data-radio="radio_4">
                                                <input type="radio" name="prenursery" class="input">
                                                <span class="radio_mark">UKG</span>
                                            </label>
                                    </div>
                                    <!----------------------
                                    |   Data Table Begin    |
                                    ----------------------->
                                    <div class="content">
                                        <!---------------------------
                                        |   Pre-Nursery Table Begin  |
                                         --------------------------->
                                            <div class="radio_content radio_1">
                                                <h2>Pre-Nursery Admissions</h2>
                                                <table class="table table-bordered">
                                                  <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">ChildName</th>
                                                      <th scope="col">Father Name</th>
                                                      <th scope="col">Mobile Number</th>
                                                      <th scope="col">Address</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>

                            <?php
                                $select = $pdo->prepare("SELECT * FROM prenursery");
                                $select->execute();
                                while($value = $select->fetch(PDO::FETCH_ASSOC)){
                            ?>  

                                                    <tr>
                                                        <td><?php echo $value['ChildName']; ?></td>
                                                        <td><?php echo $value['FatherName']; ?></td>
                                                        <td><?php echo $value['FatherName']; ?></td>
                                                        <td><?php echo $value['MobileNumber']; ?></td>
                                                        <td><?php echo $value['Address']; ?></td>
                                                    </tr>

                            <?php
                                }
                            ?>

                                                  </tbody>
                                                </table>
                                            </div>
                                            <!--------------------------
                                            |   Pre-Nursery Table End   |
                                            --------------------------->
                                            <!------------------------
                                            |   Nursery Table Begin   |
                                            ------------------------->
                                            <div class="radio_content radio_2">
                                                <h2>Nursery Admissions</h2>
                                                <table class="table table-bordered">
                                                  <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">ChildName</th>
                                                      <th scope="col">Father Name</th>
                                                      <th scope="col">Mobile Number</th>
                                                      <th scope="col">Address</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                      
                            <?php
                                $select = $pdo->prepare("SELECT * FROM nursery");
                                $select->execute();
                                while($value = $select->fetch(PDO::FETCH_ASSOC)){
                            ?>

                                                    <tr>
                                                        <td><?php echo $value['ChildName']; ?></td>
                                                        <td><?php echo $value['FatherName']; ?></td>
                                                        <td><?php echo $value['MobileNumber']; ?></td>
                                                        <td><?php echo $value['Address']; ?></td>
                                                    </tr>
                                
                            <?php
                                }
                            ?>

                                                  </tbody>
                                                </table>
                                            </div>
                                            <!----------------------
                                            |   Nursery Table End   |
                                            ----------------------->
                                            <!--------------------
                                            |   LKG Table Begin   |
                                            --------------------->
                                            <div class="radio_content radio_3">
                                                <h2>LKG Admissions</h2>
                                                <table class="table table-bordered">
                                                  <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">ChildName</th>
                                                      <th scope="col">Father Name</th>
                                                      <th scope="col">Mobile Number</th>
                                                      <th scope="col">Address</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>

                            <?php
                                $select = $pdo->prepare("SELECT * FROM lkg");
                                $select->execute();
                                while($value = $select->fetch(PDO::FETCH_ASSOC)){
                            ?>    

                                                    <tr>
                                                        <td><?php echo $value['ChildName']; ?></td>
                                                        <td><?php echo $value['FatherName']; ?></td>
                                                        <td><?php echo $value['MobileNumber']; ?></td>
                                                        <td><?php echo $value['Address']; ?></td>
                                                    </tr>
                                
                            <?php
                                }
                            ?>

                                                  </tbody>
                                                </table>
                                            </div>
                                            <!------------------
                                            |   LKG Table End   |
                                            ------------------->
                                            <!--------------------
                                            |   UKG Table Begin   |
                                            --------------------->
                                            <div class="radio_content radio_4">
                                                <h2>UKG Admissions</h2>
                                                <table class="table table-bordered">
                                                  <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">ChildName</th>
                                                      <th scope="col">Father Name</th>
                                                      <th scope="col">Mobile Number</th>
                                                      <th scope="col">Address</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>

                            <?php
                                $select = $pdo->prepare("SELECT * FROM ukg");
                                $select->execute();
                                while($value = $select->fetch(PDO::FETCH_ASSOC)){
                            ?>

                                                    <tr>
                                                        <td><?php echo $value['ChildName']; ?></td>
                                                        <td><?php echo $value['FatherName']; ?></td>
                                                        <td><?php echo $value['MobileNumber']; ?></td>
                                                        <td><?php echo $value['Address']; ?></td>
                                                    </tr>
                                
                            <?php
                                }
                            ?>

                                                  </tbody>
                                                </table>
                                            </div>
                                            <!------------------
                                            |   UKG Table End   |
                                            ------------------->
                                    </div>
                                <!--------------------
                                |   Data Table End    |
                                --------------------->
                                </div>
                            </div>
                        </div>
                        <div class="page" id="p2">
                            <div class="main-box">
                                <div class="title-box">
                                    <h2>Update About</h2>
                                </div>

                                <?php
                                    if(isset($_POST['update-about'])){
                                        $update_about = $pdo->prepare("UPDATE about SET Teacher=:teacher,
                                            Student=:student,
                                            Classroom=:classroom,
                                            Bus=:bus");
                                        $update_about->execute(array(
                                            ':teacher' => $_POST['teacher'],
                                            ':student' => $_POST['student'],
                                            ':classroom' => $_POST['classroom'],
                                            ':bus' => $_POST['bus']));
                                        if($update_about){
                                        echo '<script>alert("About information updated.");</script>';
                                        }
                                        else{
                                            echo '<script>alert("About information not updated."1);</script>';
                                        }
                                    }
                                ?>

                                <div class="form-box">

                            <?php
                                $select = $pdo->prepare("SELECT * FROM about");
                                $select->execute();
                                $value = $select->fetch(PDO::FETCH_ASSOC)
                            ?>

                                    <form action="" method="POST">
                                        <label>Teacher</label>
                                        <input type="text" name="teacher" class="form-control" value="<?php echo $value['Teacher']; ?>" autocomplete="off">
                                        <label>Student</label>
                                        <input type="text" name="student" class="form-control" value="<?php echo $value['Student']; ?>" autocomplete="off">
                                        <label>Classroom</label>
                                        <input type="text" name="classroom" class="form-control" value="<?php echo $value['Classroom']; ?>" autocomplete="off">
                                        <label>Bus</label>
                                        <input type="text" name="bus" class="form-control" value="<?php echo $value['Bus']; ?>" autocomplete="off"><br>
                                        <button type="submit" name="update-about" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>  
                        <div class="page" id="p3">
                            <div class="main-box">
                                <div class="title-box">
                                    <h2>Update Contacts</h2>
                                </div>

                                <?php
                                    if(isset($_POST['update-contacts'])){
                                        $update_contacts = $pdo->prepare("UPDATE contacts SET 
                                            Phone=:phone,
                                            Whatsapp=:whatsapp,
                                            Email=:email,
                                            Location=:location,
                                            InMap=:map_url,
                                            Facebook=:fb_url,
                                            Instagram=:ig_url,
                                            Twitter=:tt_url");
                                        $update_contacts->execute(array(
                                            ':phone' => $_POST['phone'],
                                            ':whatsapp' => $_POST['whatsapp'],
                                            ':email' => $_POST['email'],
                                            ':location' => $_POST['location'],
                                            ':map_url' => $_POST['map_url'],
                                            ':fb_url' => $_POST['fb_url'],
                                            ':ig_url' => $_POST['ig_url'],
                                            ':tt_url' => $_POST['tt_url']));
                                        if($update_contacts){
                                        echo '<script>alert("Contacts updated.");</script>';
                                        }
                                        else{
                                            echo '<script>alert("Contacts not updated."1);</script>';
                                        }
                                    }
                                ?>

                                <div class="form-box">

                            <?php
                                $select = $pdo->prepare("SELECT * FROM contacts");
                                $select->execute();
                                $value = $select->fetch(PDO::FETCH_ASSOC)
                            ?>

                                    <form action="" method="POST">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?php echo $value['Phone']; ?>" autocomplete="off">
                                        <label>Whatsapp</label>
                                        <input type="text" name="whatsapp" class="form-control" value="<?php echo $value['Whatsapp']; ?>" autocomplete="off">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php echo $value['Email']; ?>" autocomplete="off">
                                        <label>Location</label>
                                        <textarea type="text" name="location" class="form-control" autocomplete="off"><?php echo $value['Location']; ?></textarea>
                                        <label>Location URL (Map)</label>
                                        <textarea type="text" name="map_url" class="form-control" autocomplete="off"><?php echo $value['InMap']; ?></textarea>
                                        <label>Facebook Account URL</label>
                                        <textarea type="text" name="fb_url" class="form-control" autocomplete="off"><?php echo $value['Facebook']; ?></textarea>
                                        <label>Instagram Account URL</label>
                                        <textarea type="text" name="ig_url" class="form-control" autocomplete="off"><?php echo $value['Instagram']; ?></textarea>
                                        <label>Twitter Account URL</label>
                                        <textarea type="text" name="tt_url" class="form-control" autocomplete="off"><?php echo $value['Twitter']; ?></textarea><br>
                                        <button type="submit" name="update-contacts" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="page" id="p4">
                            <div class="main-box">
                                <div class="title-box">
                                    <h2>Messages</h2>
                                </div>
                                <div class="form-box">
                                    <!----------------------
                                    |   Message Table Begin    |
                                    ----------------------->
                                    <div class="content">
                                            <div class="radio_content radio_1">
                                                <table class="table table-bordered">
                                                  <thead class="thead-dark">
                                                    <tr>
                                                      <th scope="col">Name</th>
                                                      <th scope="col">Mobile Number</th>
                                                      <th scope="col">Message</th>
                                                      <th scope="col"><i class="fa fa-trash text-light"></i></th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>

                            <?php
                                $select = $pdo->prepare("SELECT * FROM message");
                                $select->execute();
                                while($value = $select->fetch(PDO::FETCH_ASSOC)){
                            ?>  

                                                    <tr>
                                                        <td><?php echo $value['Name']; ?></td>
                                                        <td><?php echo $value['MobileNumber']; ?></td>
                                                        <td><?php echo $value['Message']; ?></td>
                                                        <td><a href="delete_msg.php?msg=<?php echo $value['Message']; ?>"><i class="fa fa-trash text-danger"></i></a></td>
                                                    </tr>

                            <?php
                                }
                            ?>


                                                  </tbody>
                                                </table>
                                            </div>
                                    </div>
                                <!--------------------
                                |   Message Table End |
                                --------------------->
                                </div>
                            </div>
                        </div>
                        <div class="page" id="p5">
                            <div class="main-box">
                                <div class="title-box">
                                    <h2>Admin Details</h2>
                                </div>
                                    <?php
                                        if(isset($_POST['update-admin'])){
                                            $hashed_pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                            $update_admin = $pdo->prepare("UPDATE admin SET AdminName=:admin,
                                                Password=:password");
                                            $update_admin->execute(array(
                                                ':admin' => $_POST['admin'],
                                                ':password' => $hashed_pwd));
                                            if($update_admin){
                                            echo '<script>alert("Admin data updated.");</script>';
                                            }
                                            else{
                                                echo '<script>alert("Admin data not updated."1);</script>';
                                            }
                                        }
                                    ?>
                                <div class="form-box">

                            <?php
                                $select = $pdo->prepare("SELECT * FROM admin");
                                $select->execute();
                                $value = $select->fetch(PDO::FETCH_ASSOC)
                            ?>

                                    <form action="" method="POST">
                                        <label>Username</label>
                                        <input type="text" name="admin" class="form-control" value="<?php echo $value['AdminName']; ?>" autocomplete="off">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo $value['Password']; ?>" autocomplete="off"><br>
                                        <button type="submit" name="update-admin" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <?php
    echo '
    <script type="text/javascript">
        $(document).ready(function(){
                    $(".content .radio_content").hide();
                    $(".content .radio_content:first-child").show();
                    $(".radio_wrap").click(function(){
                        var current_radio = $(this).attr("data-radio");
                        $(".content .radio_content").hide();
                        $("."+current_radio).show();
                    });

                });
    </script>';
    ?>

</body>
</html>