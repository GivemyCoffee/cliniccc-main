<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $register = json_decode($class->register());
    if($register->status == 'success'){
        $_SESSION['flashdata']['type']='success';
        $_SESSION['flashdata']['msg'] = ' Account has been registered successfully.';
        echo "<script>location.href = './login_verification.php';</script>";
        exit;
    }else{
        echo "<script>console.error(".json_encode($register).");</script>";
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
    <title>Register</title>

     <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

     <!-- Custom styles for this template-->
         <link href="1.css" rel="stylesheet">
         
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form method="POST" action="register.php" class="input-group">           
               <img class="logo" src="logo.jpg"><br><br>

                 <h2>REGISTER</h2>
                 
            <?php 
                if(isset($error)){
                    echo '<span class="error">' .$error . '</span>';
                }elseif(isset($success)){
                    echo '<span class="success">' .$success. '</span>';
                }
            ?>



    <div class="half">
    <div class="item">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id="firstName" class="input-field" placeholder=" First Name" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>" autofocus required>
    </div>

    <div class="item">
    <label for="middleInitial">Middle Initial</label>
    <input type="text" name="middleInitial" id="middleInitial" class="input-field" placeholder=" Middle Initial" value="<?= isset($_POST['middleInitial']) ? $_POST['middleInitial'] : '' ?>" autofocus required>
    </div>
    
    <div class="item">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" id="lastName" class="input-field" placeholder=" Last Name" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" autofocus required>
    </div>
    </div>
    <div class="half">
    <div class="item">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="input-field" placeholder=" Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" autofocus required>
    </div>
   
    <div class="item">
    <label for="contact_number">Contact Number</label>
    <input type="text" name="contact_number" id="contact_number" class="input-field" placeholder=" Contact Number" value="<?= isset($_POST['contact_number']) ? $_POST['contact_number'] : '' ?>" autofocus required>
    </div>
    
    <div class="item">
    <label for="gender">Gender</label>
    <select name="gender" class="input-field" id="gender" value="<?= isset($_POST['gender']) ? $_POST['gender'] : '' ?>" autofocus required>
    <option>...</option>
        <option> Male </option>
        <option> Female </option>
    </select>
    </div>
    
    <div class="item">
    <label for="dateofbirth">Date of Birth</label>
    <input type="text" name="dateofbirth" class="input-field" id="dateofbirth" placeholder=" 00/00/0000" value="<?= isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '' ?>" autofocus required>
    </div>
    </div>

    <div class="full">
    <label for="address">Address</label>
    <input type="text" name="address" class="input-field" id="address" placeholder=" Address" value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>" autofocus required>
    
    
    <div class="label-control">
    <div class="item">
    <label for="password">Password</label>
    <input type="text" name="password" id="password" class="input-field" placeholder=" Password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" autofocus required>
    </div>
    </div>
    
    <div class="form-group">
        <div class="label-control">
    <label for="confirm_password">Confirm Password</label>
    <input type="text" name="confirm_password" id="confirm_password" class="input-field" placeholder=" Confirm Password" value="<?= isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '' ?>" autofocus required>
    </div>
    </div>
    <br>
    <div class="clear-fix mb-4"></div>
    <div class="form-group text-end">
    <button class="btn btn-primary bg-gradient rounded-50 btn-block submit-btn">Create Account</button>
    </div>
    <br>
    <div class="text-center">
    <a class="notice" href="login.php">Already have an account? Login!</a>
     </div>
    </form>
    </div>
    </div>
             
</body>
</html>