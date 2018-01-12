<?php
	$id=$_REQUEST["id"];
	include"connect.php";
	mysqli_query($dbconnect,"DELETE FROM product WHERE id=$id");
	header("location:../conten/admin-p.php");
 ?>
