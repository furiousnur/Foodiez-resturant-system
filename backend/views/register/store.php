<?php
include_once("../../src/register/Register.php");
$obj = new Register();

if (!empty($_POST['first_name']&&$_POST['last_name']&&$_POST['email']&&$_POST['pass']&&$_POST['con_pas'])) {
    if(preg_match("/([a-zA-Z])/", $_POST['first_name'])){
        if(preg_match("/([a-zA-Z])/", $_POST['last_name'])){
           if(preg_match("/([a-zA-Z])/", $_POST['email'])){
              $_POST['first_name'] = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
               $_POST['last_name'] = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
               $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
               $obj->setData($_POST);
               $obj->getData($_POST);
           }
        }

    }else{
        $_SESSION['msg'] = "<h2 style='color: red'>Invalid Input!!</h2>. ";
        header('location:create.php');
    }

}else{
    $_SESSION['msg'] = "<h2 style='color: red'>Input can't be empty!!</h2>. ";
    header('location:create.php');
}

//echo "<pre>";
//print_r($_POST);