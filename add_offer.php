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

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add
            Post</div>
        <div class="card-body">

            <form action="store.php" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">Shop Name</label>
                            <input class="form-control" name="shopName" id="exampleInputName" type="text"
                                   aria-describedby="nameHelp" placeholder="Enter shop name">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputName">Product Name</label>
                            <input class="form-control" name="ProductName" id="exampleInputName" type="text"
                                   aria-describedby="nameHelp" placeholder="Enter product name">
                        </div>

                        <div class="col-md-6">
                            <label for="exampleInputLastName">Place</label>
                            <input class="form-control" name="place" id="exampleInputLastName" type="text"
                                   aria-describedby="nameHelp" placeholder="Where the please ">
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input class="form-control" name="price" id="exampleInputEmail1" type="text"
                           aria-describedby="emailHelp" placeholder="Enter price">
                </div>
                <input type="submit" value="Save" class="btn btn-primary btn-block">

                <div class="text-center">
                    <a class="d-block m-auto mt-3" href="../show/show.php" style="padding-top: 5px">Show list</a>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="backendbackend/vendor/jquery/jquery.min.js"></script>
<script src="backendbackend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="backendbackend/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>