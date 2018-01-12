<!DOCTYPE html>
<html>
<head>
	<title>Add new Product</title>
	<link rel="stylesheet" href="/css/master.css">
</head>
<body>
<a class="" href="admin-p.php">View Product's Lists</a>
<form class="" enctype="multipart/form-data" action="../functions/save.php" method="post">
    <fieldset>
        <div class="">
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="Enter Name of Product" name="name">
        </div>
        <div class="">
            <label for="name">Price</label>
            <input id="name" type="text" name="price">
        </div>
      	<div class="">
            <label for="name">Casse</label>
            <input id="name" type="text"  name="Casse">
        </div>
        <div class="">
            <label for="name">Photos</label>
            <input id="name" type="file" name="img">
        </div>
        <div class="">
            <label for="name">Category</label>
            <input id="name" type="text"  name="cat">
        </div>
        <div class="">
            <label for="name">Amount</label>
            <input id="name" type="text"  name="amount">
        </div>
        <div class="">
            <label for="name">Reference</label>
            <input id="name" type="text"  name="reference">
        </div>
        <div class="">
            <button type="submit" class="">Submit</button>
        </div>
    </fieldset>
</form>
</body>
</html>
