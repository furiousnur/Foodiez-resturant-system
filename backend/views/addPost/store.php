<?php
include_once("../../src/addPost/AddPost.php");
$obj = new AddPost();

if (!empty($_POST['shopName'] && $_POST['ProductName'] && $_POST['place'] && $_POST['price'])) {
    if (preg_match("/([a-zA-Z])/", $_POST['shopName'])) {
        if (preg_match("/([a-zA-Z])/", $_POST['ProductName'])) {
            if (preg_match("/([a-zA-Z])/", $_POST['place'])) {
                if (preg_match("/([a-zA-Z])/", $_POST['price'])) {
                    $_POST['shopName'] = filter_var($_POST['shopName'], FILTER_SANITIZE_STRING);
                    $_POST['ProductName'] = filter_var($_POST['ProductName'], FILTER_SANITIZE_STRING);
                    $_POST['place'] = filter_var($_POST['place'], FILTER_SANITIZE_STRING);
                    $_POST['price'] = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
                    $obj->setData($_POST);
                    $obj->store();
                }
            }
        }
    }else {
        session_start();
        $_SESSION['msg'] = "<h2 style='color: red'>Invalid Input</h2>";
        header('location:addPost.php');

    }
} else {
    session_start();
    $_SESSION['msg'] = "<h2 style='color: red'>Input Can't be empty</h2>";
    header('location:addPost.php');

}
