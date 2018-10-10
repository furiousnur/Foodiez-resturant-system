<?php 

include 'db.php';

	if (isset($_GET['delete'])) {
		$delete_id = $_GET['delete'];

		$delete = "DELETE FROM resturant WHERE resturant_id = '$delete_id'";

		$run_delete = mysqli_query($con, $delete);

		if ($run_delete) {
			echo "<script>alert('One Resturan offer has been deleted!')</script>";

			echo "<script>window.location.href='resturant_list.php?resturant_list'</script>";
		}
	}

 ?>