<?php
	$name=$_REQUEST["name"];
	$price=$_REQUEST["price"];
	$casse=$_REQUEST["casse"];
	$img="images/".basename($_FILES["img"]["name"]);
	move_uploaded_file($_FILES["img"]["tmp_name"], $img);
	$category=$_REQUEST["cat"];
	$amount=$_REQUEST["amount"];
	$reference=$_REQUEST["reference"];
	include"function/connect.php";
	mysqli_query($dbconnect,"INSERT INTO `product` (`name`, `price`, `casse`, `photos`, `cat`,`amount`, `reference`) VALUES ('$name', '$price', '$casse', '$img', '$category','$amount', '$reference');");
	header("location:../content/admin-p.php");
 ?>
