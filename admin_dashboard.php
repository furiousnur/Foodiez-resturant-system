<?php 
  
  include 'db.php';
  session_start();


  if (!isset($_SESSION['email'])) {
    echo "<script>window.location.href='admin.php'</script>";
  }else{


 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Ypur Post</title>
    <!-- Bootstrap core CSS-->
    <link href="backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="backend/css/sb-admin.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <!-- <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add
            Post</div>
            <div class="card-header"><a href="">Logout</a></div>
        <div class="card-body">

        </div>
    </div> -->
    <div class="row  card-bodys mx-auto mt-5">
        <div class="col-6 ">
            <a href="admin_logout.php"><input type="submit" name="" value="Logout" class="btn btn-primary"></a>
        </div>
    </div>	
</div>
<br>

<!-- Page Content -->
    <div class="container">
        <h2 align="center">Admin DashBoard</h2>

      <ol class="breadcrumb">
        <li>
          <a href="http://localhost/foodiez/resturant_list.php">Resturant List</a>
        </li>
      </ol>

<h4>Add Resturant Offer</h4>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Resturant Name</label>
      <input type="text" name="r_name" class="form-control" id="inputEmail4" placeholder="Resturant Name" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Food Name</label>
      <input type="text" name="f_name" class="form-control" id="inputPassword4" placeholder="Food Name" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address" required="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Price</label>
      <input type="text" name="price" placeholder="Price" class="form-control" id="inputCity" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Offer Time</label>
      <input type="text" name="o_time" placeholder="Offer Time" class="form-control" id="inputZip" required="">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="image" type="file" id="gridCheck">
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" value="Submit" name="submit">Submit</button>
</form>
      <br>
      
</div>
    <!-- /.container -->
<!-- Bootstrap core JavaScript-->
<script src="backendbackend/vendor/jquery/jquery.min.js"></script>
<script src="backendbackend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="backendbackend/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

<?php } ?>

<?php 

$con = mysqli_connect("localhost", "root", "", "foodiez"); 

session_start();


if ((isset($_POST['submit']))) {
    $r_name=$_POST['r_name'];
    $f_name=$_POST['f_name'];
    $address=$_POST['address'];
    $price=$_POST['price'];
    $o_time= $_POST['o_time'];

    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];

    if ($r_name=='' OR $f_name=='' OR $address=='' OR $price=='' OR $o_time=='' OR $image=='') {
      echo "<script>alert('Please fill all the input field!')</script>";
      exit();
    }else{

    move_uploaded_file($temp_name, "images/$image");

    $insert = "INSERT INTO resturant (r_name, f_name, address, price, o_time, image) values('$r_name', '$f_name', '$address', '$price', '$o_time', '$image')";
    

    $run  = mysqli_query($con, $insert) or die ('can not insert, check it please. '.mysqli_error($con));

     if ($run) {
        echo "<script>alert(' Inserted successfully.')</script>";
        echo "<script>window.location.href='http://localhost/foodiez/resturant_list.php'</script>";

    }
  }
}

 ?>