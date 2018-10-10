<?php
include_once("../../src/addPost/AddPost.php");
$obj = new AddPost();
$data = $obj->index();

//session_start();
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of All Product</title>
</head>
<body>

<a href="../../views/addPost/addPost.php">Add New</a>

<table border="1">
    <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

    <?php
    $sl = 1;
    foreach ($data as $key => $value) {
        ?>

        <tr>
            <td><?php echo $sl++ ?></td>
            <td><?php echo $value['Product_Name'] ?></td>
            <td>
                <a href="view.php?id=<?php echo $value['id'] ?>"> View details | </a>
                <a href="../../views/edit/edit.php?id=<?php echo $value['id'] ?>"> Edit | </a>
                <a href="../../views/delete/delete.php?id=<?php echo $value['id'] ?>"> Delete</a>

            </td>
        </tr>

    <?php } ?>

</table>
</body>
</html>
