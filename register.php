
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Home Chat       </title>
        
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

            <link href="css/jquery-ui.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include './dbFile.php';
        $first = $last = $email = $password = $confirmpass = $usern= "";
        $ferror = $lerror = $eerror = $perror = $cperror = $uerror = "";
        if(isset($_POST['phone'])){$phone=$_POST['phone'];}else {$phone=  NULL; }
        if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(empty($_POST['firstname'])){
                    $ferror = 'First Name Required';
                }else{  $first = test_input($_POST['firstname']);}
                 if(empty($_POST['lastname'])){
                    $lerror = 'Last Name Required';
                }else{  $last =  test_input($_POST['lastname']);}
                if(empty($_POST['username'])){
                    $uerror = ' Username Required';
                }else{  $usern =  $_POST['username'];}
                 if(empty($_POST['email'])){
                    $eerror = ' Email Required';
                }else{  $email =  $_POST['email'];}
                 if(empty($_POST['password'])){
                    $perror = ' Password Required';
                }else{  $password =  test_input($_POST['password']);}
                 if(empty($_POST['confirmPass'])){
                    $cperror = 'Confirm Password Required';
                }else{   $confirmpass =  test_input($_POST['confirmPass']);}
                 if($_POST['password'] !== $_POST['confirmPass']){
                    $cperror = 'Please Enter correct password';
                }

               if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
              $sql = "INSERT INTO `register` VALUES ('','$first','$last','$usern','$email','$password','$phone')";

            if (mysqli_query($conn, $sql)) {
                header("Location:index.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
               }
        }
            
            
            
            function test_input($data)
            {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <div class="container">
            
            <div class="login">
                <h1> Register to Home Chat </h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <p> <input type="text" name="firstname" placeholder="First Name"/><br/><span class="error"> <?php echo $ferror;?></span> </p>
                    <p> <input type="text" name="lastname" placeholder="Last Name"/> <br/><span class="error"> <?php echo $lerror;?></span>  </p>
                    <p> <input type="text" name="username" placeholder="Username"/> <br/><span class="error"> <?php echo $uerror;?></span> </p>
                    <p> <input type="email" name="email" placeholder="Email"/> <br/><span class="error"> <?php echo $eerror;?></span> </p>
                    <p> <input type="password" name="password" placeholder="Password"/> <br/><span class="error"> <?php echo $perror;?></span> </p>
                    <p> <input type="password" name="confirmPass" placeholder="Confirm Password"/><br/><span class="error"> <?php echo $cperror;?></span>  </p>
                    <p> <input type="tel" name="phone" placeholder="Phone Number ( Optional )"/> </p>
                    <p> <input type="submit" name="register" value="Register"/> </p>
                </form>
            </div>
            
        </div> 
    </body>
</html>