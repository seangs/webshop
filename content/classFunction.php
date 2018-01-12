<?php
require_once(__DIR__.'/../autoloader.php');
//include('./lib/Cart.class.php');

if(isset($_SESSION["cart"])){
       echo "Your choise: ";
       echo "  &nbsp; ";
   $myaction=$_POST["action"];
   if($myaction=="add"){
       echo "Add to shoping cart";
          }
    else
        echo "remove from shoping cart";
    echo "  &nbsp; ";
   $mycart=unserialize($_SESSION["cart"]);
   $id=$_POST["item"];
   $quantity=(int)$_POST["quantity"];
   if($quantity>0){
   echo "Book's id  ";
   echo "  &nbsp; ";
   echo $id;
   echo "  &nbsp; ";
   echo $quantity;
   echo "  &nbsp; ";
   echo "  times";
   switch($myaction){
              case "add":
               $mycart->addItem($id,$quantity);
               $_SESSION["cart"] = serialize($mycart);
                   break;
               case "del":
               $mycart->removeItem($id,$quantity);
               $_SESSION["cart"] = serialize($mycart);
                  break;
               default:
            echo "default";
              break;

           }
   }
   else
       echo "Choose, please, amount of items";

}
