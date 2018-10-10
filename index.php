<?php
include_once("backend/src/addPost/AddPost.php");
$obj = new AddPost();
if (!empty($_GET['search'])) {
    $keyword = $_GET['search'];
    $data = $obj->search($keyword);
} else {
    $data = $obj->index();
}

if(empty($data)){
    // echo"Oops ! 0 match found for : ".$_GET['search'];
}

//echo "<pre>";
//print_r($value);
//die();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Foodiez</title>
    <!-- Bootstrap core CSS -->
    <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="frontend/css/modern-business.css" rel="stylesheet">

<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("livesearch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


</head>

<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Foodiez</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- search form -->
          <div class="search-box">
            <input type="text" autocomplete="off" placeholder="Search..." />
            <div class="result"></div>
        </div>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="frontend/views/contact/contact.php">Contact</a>
                </li>

                 
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/foodiez/registration/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/foodiez/registration/register.php">Registration</a>
                </li>

                <!-- logged in user information -->
                <?php  if (isset($_SESSION['username'])) : ?>
                  <p class="nav-link">Welcome <strong style="color:red;"><?php echo $_SESSION['username']; ?></strong></p>
                  <p> <a href="http://localhost/foodiez/index.php?logout='1'" class="nav-link" style="padding-left: 15px;" name="logout">logout</a> </p>
                <?php endif ?>

            </ul>
        </div>
    </div>
</nav>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <img src="frontend/img/slider1.jpg" alt="">
                    <!--<h3>First Slide</h3>-->
                    <!--<p>This is a description for the first slide.</p>-->
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <img src="frontend/img/slider2.jpg" alt="">
                    <!--<h3>Second Slide</h3>-->
                    <!--<p>This is a description for the second slide.</p>-->
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                <div class="carousel-caption d-none d-md-block">
                    <img src="frontend/img/slider3.jpg" alt="">
                    <!--<h3>Third Slide</h3>-->
                    <!--<p>This is a description for the third slide.</p>-->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<div class="container">

          <br>
          

    <div class="row">
        <div class="col-md-6">
          <div id="result">
            
          </div>
        </div>
      </div>


    
    <hr>

    <!-- Team Members -->
      <h2>Offer</h2>

      <div class="row">

        <?php 

            include 'db.php';

            $get = "SELECT * FROM resturant order by rand() LIMIT 0,21";
            $run = mysqli_query($con, $get);
            while ($row=mysqli_fetch_array($run)) {
              $resturant_id = $row['resturant_id'];
              $r_name = $row['r_name'];
              $f_name = $row['f_name'];
              $address = $row['address'];
              $price = $row['price'];
              $o_time = $row['o_time'];
              $image = $row['image'];

         ?>
        <div class="col-lg-4 mb-4">
          <!-- <div class="card h-100 text-center"> -->
            <div class="card h-100 ">
            <!-- <img class="card-img-top" src='images/$image'  alt=""> -->
            <img class="card-img-top" src='images/<?php echo $image; ?>' height='300' />
            <div class="card-body">
               <!--  <table>
                    <tr>
                        <td><h5 class="card-title" style="text-align: left;"><?php  $f_name; ?></h5></td>
                        <td><h5 class="card-title" style="text-align: right; padding-left: 50px;"> price: <?php  $price; ?></h5></td>
                    </tr>
                </table> -->
            <h5 class="card-title"><?php echo $price; ?></h5>
            <h5 class="card-title"><?php echo $f_name; ?></h5>

             <h4 class="card-title"> <?php echo $r_name; ?></h4>
             <h5 class="card-title"><?php echo $address; ?></h5>
             <h5 class="card-title"><?php echo $o_time; ?></h5>
            </div>
            <div class="card-footer">
              <a href="#">details</a>
            </div>
          </div>
        </div>
    <?php } ?>
      </div>
      <!-- /.row -->

    


</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Our Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="frontend/vendor/jquery/jquery.min.js"></script>
<script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>


<?php 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    // header("location: ../index.php");
  }
?>