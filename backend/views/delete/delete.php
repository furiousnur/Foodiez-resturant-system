<?php
include_once('../../src/addPost/AddPost.php');
$obj = new AddPost();
$value = $obj->setData($_GET)->delete();

