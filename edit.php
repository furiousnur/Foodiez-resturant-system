<?php 

		include 'db.php';

		if (isset($_GET['edit'])) {
			
			$resturant_id = $_GET['edit'];

			$edit = "SELECT * FROM resturant WHERE resturant_id='$resturant_id'";

			$run = mysqli_query($con, $edit);

			$row_edit = mysqli_fetch_array($run);

			$resturant_id = $row_edit['resturant_id'];
		    $r_name = $row_edit['r_name'];
		    $f_name = $row_edit['f_name'];
		    $address = $row_edit['address'];
		    $price = $row_edit['price'];
            $o_time = $row_edit['o_time'];
     	    $image = $row_edit['image'];

		}


	 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Ypur Post</title>
    <!-- Bootstrap core CSS-->
    <link href="backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="backend/css/sb-admin.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		   <h2 align="center">Admin DashBoard</h2>

      <ol class="breadcrumb">
        <li>
          <a href="http://localhost/foodiez/resturant_list.php">Resturant List</a>
        </li>
      </ol>
      
		<h2>Update</h2>

	<form action="" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Resturant Name</label>
      <input type="text" name="r_name" class="form-control" id="inputEmail4" value="<?php echo $r_name; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Food Name</label>
      <input type="text" name="f_name" class="form-control" id="inputPassword4" value="<?php echo $f_name; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" value="<?php echo $address; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Price</label>
      <input type="text" name="price" class="form-control" id="inputCity" value="<?php echo $price; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Offer Time</label>
      <input type="text" name="o_time" class="form-control" id="inputZip" value="<?php echo $o_time; ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"></label>
      <td><img src="images/<?php echo $image; ?>" width="70" height="70">  </td> 
    </div>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="image" type="file" id="gridCheck">
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" value="Update" name="update">Update</button>
</form>
</div>

	<!-- Bootstrap core JavaScript-->
<script src="backendbackend/vendor/jquery/jquery.min.js"></script>
<script src="backendbackend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="backendbackend/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>

<?php 

	if (isset($_POST['update'])) {
			$r_name=$_POST['r_name'];
		    $f_name=$_POST['f_name'];
		    $address=$_POST['address'];
		    $price=$_POST['price'];
		    $o_time= $_POST['o_time'];

		    $image = $_FILES['image']['name'];
		    $temp_name = $_FILES['image']['tmp_name'];
		    move_uploaded_file($temp_name, "images/$image");




			$update = "UPDATE resturant SET r_name='$r_name', f_name='$f_name', address='$address', price='$price', o_time = '$o_time', image = '$image' WHERE resturant_id = '$resturant_id'";

			$run_update = mysqli_query($con, $update);

			if ($run_update) {
					echo "<script>alert(' updated successfully.')</script>";

			        echo "<script>window.location.href='http://localhost/foodiez/resturant_list.php?resturant_list'</script>";
				}	
		}	

 ?>