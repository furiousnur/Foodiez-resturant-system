<?php
session_start();
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
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
    <title>Login Here!</title>
    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <style>
        label.error{
            color: red
        }
    </style>

</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form action="store.php" method="post" id="signupForm">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">First name</label>
                            <input class="form-control" name="first_name" id="exampleInputName" type="text"
                                   aria-describedby="nameHelp" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Last name</label>
                            <input class="form-control" name="last_name" id="exampleInputLastName" type="text"
                                   aria-describedby="nameHelp" placeholder="Enter last name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" name="email" id="exampleInputEmail1" type="email"
                           aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" name="pass" id="exampleInputPassword1" type="password"
                                   placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleConfirmPassword">Confirm password</label>
                            <input class="form-control" name="con_pas" id="exampleConfirmPassword" type="password"
                                   placeholder="Confirm password">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Register" class="btn btn-primary btn-block">
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="../login/create.php">Login Page</a>
                <a class="d-block small" href="../forgot-password.php">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
        $("#signupForm").validate({
            rules: {

                first_name: {
                    required: true,
                    first_name: true
                },

                last_name: {
                    required: true,
                    last_name: true
                },

                email: {
                    required: true,
                    email: true
                },

                pass: {
                    required: true,
                    minlength: 5
                },
                con_pas: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },


                agree: "required"
            },
            messages: {

                first_name: "Please enter your first name",
                last_name: "Please enter your last name",
                email: "Please enter a valid email address",

                pass: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                con_pas: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },

                agree: "Please accept our policy"
            }
        });
    });
</script>

</body>

</html>
