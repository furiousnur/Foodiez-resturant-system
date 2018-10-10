<?php


include 'db.php';
@session_start();



if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM register WHERE email = '".$email."' AND pass = '".md5($pass)."' ";

    $con = mysqli_query($con, $query);

    $check_admin = mysqli_num_rows($con);

    if ($check_admin >0 ) {
        $_SESSION['email'] = $email;
        echo "<script>alert('You successfully logged in.')</script>";
        echo "<script>window.location.href='index.php?logged_in=You successfully logged in.'</script>";
        // header("location:admin.php");
    }else{
        echo "<script>window.location.href='customer_login.php?logged_in=Your email or password wrong!!'</script>";
        // header("location:admin_dashboard.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="backend/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" name="email" id="exampleInputEmail1" type="email"
                           aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="pass" id="exampleInputPassword1" type="password"
                           placeholder="Password">
                </div>
                <input type="submit" value="Login" name="login" class="btn btn-primary btn-block"/>
                <a class="d-block small mt-3" href="customer_register.php">Register Page</a>
            </form>       
         </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="backend/vendor/jquery/jquery.min.js"></script>
<script src="backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="backend/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>