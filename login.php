<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = json_decode($class->login());
    if($login->status == 'success'){
        echo "<script>location.replace('./login_verification.php');</script>";
    }
}
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

     <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

     <!-- Custom styles for this template-->
         <link href="login1.css" rel="stylesheet">
         
</head>

<body>
    <div class="hero">
        <div class="form-box">           
        <form method="POST" action="./login.php" id="login" class="input-group">  
            
            <img class="logo" src="logo.jpg"><br><br>
            <br><br><br>
            <br><br><br>
            <form class="user">
                    <div class="input-field">
                    <label for="email" class="label-control">Email</label>
                    <input type="email" name="email" id="email" class="input-field" placeholder="Enter Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" autofocus required>
                    </div>

                    <div class="input-field">
                    <label for="password" class="label-control">Password</label>
                    <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
                    </div>

                    <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div> 
                    <div class="clear-fix mb-4"></div>
                    <div class="form-group text-end">
                    <button class="btn btn-primary bg-gradient rounded-50">LOGIN</button>
                    </div>
                    <hr>
                    <div class="text-center">
                    <a class="noticee" href="forgot-password.php">Forgot Password?</a>         
                    </div>
                    <div class="text-center">
                    <div class="noticee">
                    <a href="register.php">Create a New Account</a>
                    </div>
                    
        </form>     
        </div>
    </div>

</body>
</html>