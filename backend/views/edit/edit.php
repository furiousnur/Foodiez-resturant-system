<?php
include_once('../../src/addPost/AddPost.php');
$obj = new AddPost();
$value = $obj->setData($_GET)->show();
//echo "<pre>";
//print_r($value);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Paze</title>

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">
</head>
<body>
<form action="../../views/update/update.php" method="post">
    <div class="form-group">
        <div class="form-row">

            <div class="col-md-6">
                <label for="exampleInputName">Shop Name</label>
                <input class="form-control" name="shopName" id="exampleInputName" type="text"
                       aria-describedby="nameHelp" placeholder="Enter product name" value="<?php echo $value['shop_name']?>">
            </div>


            <div class="col-md-6">
                <label for="exampleInputName">Product Name</label>
                <input class="form-control" name="ProductName" id="exampleInputName" type="text"
                       aria-describedby="nameHelp" placeholder="Enter product name" value="<?php echo $value['Product_Name']?>">
            </div>

            <div class="col-md-6">
                <label for="exampleInputLastName">Place</label>
                <input class="form-control" name="place" id="exampleInputLastName" type="text"
                       aria-describedby="nameHelp" placeholder="Where the please " value="<?php echo $value['place']?>">
            </div>

        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input class="form-control" name="price" id="exampleInputEmail1" type="text"
               aria-describedby="emailHelp" placeholder="Enter price" value="<?php echo $value['price']?>">
    </div>

    <div class="col-md-6">
        <!--<label for="exampleInputId">Id</label>-->
        <input class="form-control" name="id" id="exampleInputId" type="hidden"
               aria-describedby="nameHelp" value="<?php echo $value['id']?>">
    </div>


    <input type="submit" value="Save" class="btn btn-primary btn-block">

    <div class="text-center">
        <a class="d-block m-auto mt-3" href="../show/show.php" style="padding-top: 5px">Show list</a>
    </div>

</form>
</body>
</html>



