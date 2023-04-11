<!--Membuat sambungan ke db-->
<?php
$sname = "localhost";
$uname = "root";
$pass = "";
$dbname = "vaksin";

$conn = mysqli_connect($sname,$uname,$pass,$dbname);

if(!$conn) {

	echo "connection failed";
}

?>

