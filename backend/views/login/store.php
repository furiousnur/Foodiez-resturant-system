<?php
//echo"<pre>";
//echo($_POST['email']);
//echo($_POST['password']);
//
//die();

require('connect.php');

if(isset($_SERVER['REQUEST_METHOD'])=='POST')
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email ='$email' AND password ='$password'";


    $res = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($res);

    $role_id = $row['role_id'];
    $userid = $row['id'];


    if($role_id ==1)
    {
        $_SESSION['userid'] = $userid;
        $_SESSION['user_type'] = "Admin";

        header('location: ../backend/index.php');
        //alert ("You are  admin");
    }
    elseif($role_id ==2)
    {
        $_SESSION['userid'] = $userid;
        $_SESSION['user_type'] = "Visitor";

        header('location:../../index.php');
        // You are  visitor
    }

}
else
{
    echo "Form not submited properly.";
}

?>