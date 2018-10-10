<?php
include_once('../../src/addPost/AddPost.php');
$obj = new AddPost();
$value = $obj->setData($_GET)->show();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of All Product</title>
</head>
<body>

<a href="show.php">Back to List</a>

<table border="1">
    <tr>
        <th>Serial</th>
        <th>Shop Name</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Place</th>
        <th>Action</th>
    </tr>

        <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['shop_name']?></td>
            <td><?php echo $value['Product_Name'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['place'] ?></td>
            <td>
                <a href=" ../../views/edit/edit.php" > Edit </a>
            </td>
        </tr>
</table>
</body>
</html>
