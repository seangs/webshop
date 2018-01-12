<?php

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Page</title>
  <link rel="stylesheet" href="../assets/admin-p.css" type="text/css"> <!-- not yet do -->
</head>
<body>
<style type="text/css">
	.active
	{
		color: black;
		text-decoration: none;
	}
</style>
<a href="addnewitem.php">Add New</a>
<!-- for search do it later -->
<form action="search.php" method="GET">
	<input type="text" placeholder="Search for..." name="search">
	<input type="submit" value="Search" name="">
</form>

<table class="tp-list">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Casse</th>
            <th>Photos</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Reference</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
  <tbody>
<?php
	include"../functions/connect.php";
	$page=@$_REQUEST["page"];
	if($page==0 || $page==1)
	{
		$page1=0;
	}
	else
	{
		$page1=($page*4)-4;
	}
	$row=mysqli_query($dbconnect,"SELECT * FROM product ORDER BY id DESC LIMIT $page1,4;");
	$i=1;
	while($row1=mysqli_fetch_row($row))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row1[1]."</td>";
		echo "<td>".$row1[2]."</td>";
		echo "<td>".$row1[3]."</td>";
		echo "<td>".$row1[5]."</td>";
    echo "<td>".$row1[6]."</td>";
		echo "<td>".$row1[7]."</td>";
		echo "<td><img src='".$row1[4]."' width='100px'></td>";
		echo "<td><a href='delete.php?id=".$row1[0]."'>Delete</a></td>";
		echo "<td><a href='update.php?id=".$row1[0]."'>Update</a></td>";
		echo "</tr>";
		$i++;
	}
 ?>
</tbody>
</table>
<?php
$count=mysqli_query($dbconnect,"SELECT * FROM product");
	$count1=mysqli_num_rows($count);
	$count2=$count1/4;
	$count3=ceil($count2);
	?>
	<a href="admin-p.php?page=1">First</a>
	<?php
	if($page<=0 || $page<=1)
	{
		?>
			<a href="admin-p.php?page=1">Prev</a>
		<?php
	}
	else{
	?>
		<a href="admin-p.php?page=<?php echo $page-1 ?>">Prev</a>
	<?php
	}
	for($i=1;$i<=$count3;$i++)
	{
		?>
			<a href="admin-p.php?page=<?php echo $i; ?>" <?php if($page==$i){echo "class='active'";} ?>><?php echo $i; ?></a>
		<?php
	}

 if($page>=$count3)
	{
		?>
			<a href="admin-p.php?page=<?php echo $count3 ?>">Next</a>
		<?php
	}
	else{
	?>
		<a href="admin-p.php?page=<?php echo $page+1 ?>">Prev</a>
	<?php
	}
	?>
	<a href="admin-p.php?page=<?php echo $count3 ?>">Last</a>
</body>
</html>

<!--

  Some of The Most Important SQL Commands for remeinder !!! 

    SELECT - extracts data from a database
    UPDATE - updates data in a database
    DELETE - deletes data from a database
    INSERT INTO - inserts new data into a database
    CREATE DATABASE - creates a new database
    ALTER DATABASE - modifies a database
    CREATE TABLE - creates a new table
    ALTER TABLE - modifies a table
    DROP TABLE - deletes a table
    CREATE INDEX - creates an index (search key)
    DROP INDEX - deletes an index -->
