<?php

if(isset($_SESSION["cart"])){

  $mycart=unserialize($_SESSION["cart"]);

    $items = [];
    $items=$mycart->getItems();

    if(!$mycart->isEmpty()) {
          echo "Your order saved";
          $mycart->render();


include('functions/connect.php');

$name=$_SESSION["user"];
//echo $name;
$result=$dbconnect->query("SELECT Id FROM clients WHERE username='$name';");
while($row = $result->fetch_assoc()){
   $toprint="Book's id : ".$row["Id"];
   $usId=$row["Id"];
//echo $toprint;
//echo $usId;

}
foreach ($items as $key=>$value) {
         $itemId=$key;
         //echo $itemId;
$quantity=$value;
//echo $quantity;
$orDate=date("d:m:Y");
$orTime=date("H:i:s");
$groupId=$usId."/".$orDate."/".$orTime;
//echo $groupId;

$db->query("INSERT INTO orders (OrderId,BookId,ClientId,Amount)VALUES ('$groupId','$itemId','$usId','$quantity');");
}
$totPrice=0;
foreach ($items as $key=>$value) {

   $itemId=$key;
   $quantity=$value;
   $result=$dbconnect->query("SELECT Price FROM product WHERE Id='$itemId';");
while($row = $result->fetch_assoc()){
$price=$row["Price"];
//echo $price;
$resprice=$price*$quantity;
}
  $totPrice=$totPrice+$resprice;
   $mycart->removeItem($itemId,$quantity);
    }
    echo "Total price :";
    echo "  &nbsp; ";
    echo $totPrice;
    echo "  &nbsp; ";
    echo "CHF";
               $_SESSION["cart"] = serialize($mycart);

   // $address= 'katmlin@yahoo.com';
   // $subject='your order';
    //$mes="You just made order for ".$totPrice."CHF";
    //$header='X-Mailer: PHP/' . phpversion();
    //mail($address, $subject, $mes, $header);

    $users =  simplexml_load_file("./data/users.xml");

    foreach ($users->user as $user) {
  if($user->username==$name){
       $tosent=$user->email;

   }
  }
  //echo $tosent;
  $subject='your order';
    $mes="You just made order for ".$totPrice."CHF";
    $header='X-Mailer: PHP/' . phpversion();
  mail($tosent, $subject, $mes, $header);

    $dbconnect->close();
}


     }
