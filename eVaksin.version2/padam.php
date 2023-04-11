<?php

include ('config.php');

$angka = $_GET['id_pelajar'];

$query = "DELETE FROM maklumat WHERE id_pelajar = '$angka'";

$result = mysqli_query($conn, $query);

	if (mysqli_query($conn,$query)) {
		echo "<script>alert('Maklumat berjaya dihapuskan')</script>"."<script>eindow.location'home.php'</script>";
	}
	else {
		echo "<script>alert('Maklumat tidak berjaya dihapuskan')</script>";
}

header("Location:index.php");

?>




