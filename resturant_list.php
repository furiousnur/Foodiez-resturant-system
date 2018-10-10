<?php 
  
  include 'db.php';
  session_start();


  if (!isset($_SESSION['email'])) {
    echo "<script>window.location.href='admin.php'</script>";
  }else{


 ?>

<!DOCTYPE html>
<html>
<head>
  <title>view brands</title>

  <style type="text/css">
    
    th,tr{
      border: 3px groove #000;
    }
  </style>
</head>
<body>

<table width="794" align="center" bgcolor="#FFCCCC">
 
  <tr align="center">
    <td colspan="8"><h2>Resturant List</h2><br></td>
  </tr>

  <tr align="left">
    <td colspan="8"><h2><a href="http://localhost/foodiez/admin_dashboard.php">Admin Dashboard</a></h2><br></td>
  </tr>

 <tr>
      <th scope="col">id</th>
      <th scope="col">Resturant Name</th>
      <th scope="col">Food Name</th>
      <th scope="col">Address</th>
      <th scope="col">Price</th>
      <th scope="col">Offer Time</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>

  <?php 
    
    include 'db.php';

    $get = "SELECT * FROM resturant";
    $run = mysqli_query($con, $get);

    while ($row = mysqli_fetch_array($run)) {
      $resturant_id = $row['resturant_id'];
      $r_name = $row['r_name'];
      $f_name = $row['f_name'];
      $address = $row['address'];
      $price = $row['price'];
      $o_time = $row['o_time'];
      $image = $row['image'];
    


   ?>

  <tr align="center">
    <td><?php echo $resturant_id; ?></td>
    <td><?php echo $r_name; ?></td> 
    <td><?php echo $f_name; ?></td> 
    <td><?php echo $address; ?></td> 
    <td><?php echo $price; ?></td> 
    <td><?php echo $o_time; ?></td> 
    <td><img src="images/<?php echo $image; ?>" width="60" height="60"></td>

    <td><a href="edit.php?edit=<?php echo $resturant_id; ?>">Edit</a></td>
    <td><a href="delete.php?delete=<?php echo $resturant_id; ?>">Delete</a></td>
  </tr>

  <?php } ?>
</table>
</body>
</html>

<?php } ?>
