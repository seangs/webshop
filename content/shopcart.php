<?php
//require_once('./autoloader.php');
//include('./lib/Cart.class.php');

?>
 <?php
if(isset($_SESSION["cart"])){

  $mycart=unserialize($_SESSION["cart"]);

    $items = [];
    $items=$mycart->getItems();
    //print_r($items);
    if($mycart->isEmpty()) {
          $mycart->render();}
    else{
     foreach ($items as $key=>$value) {
         $itemId=$key;
         $quantity=$value;
       echo "Item id is  $key/  Amount is  $value<br>";
        echo "<form action='index.php?in=classFunct' method='POST'>";
                    echo "<input type='hidden' name='action' value='del'>";
                    echo "<input type='hidden' name='item' value='$itemId'>";
                    echo "<input type='number' name='quantity'value='$quantity' min='1' max='$quantity'";
                    echo "<p><input type='submit' name='action2' value='Remove'/></p>";
                    echo "</form>";
     }


    echo  "<a href=\"index.php?in=saveorder\">Save order</a>";
}

}
