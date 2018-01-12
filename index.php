
<!--for call the external code
 * call header packt , footer and slider
-->
<?php include 'php-packt/header.php'; ?>

<!--Slider-->
<?php include 'php-packt/slider.php'; ?> <!--not 100% work !! -->
<!--Feature-->
<?php
 require_once("autoloader.php"); // call autoloader function
  $option=isset($_GET["in"])? $_GET["in"]: "maincontent";
//  $language=isset($_GET["ln"])? $_GET["ln"]:"en";


 if(isset($_GET["action"])){

   $myaction=$_GET["action"];
     echo $myaction;
                $id=$_GET["item"];
                echo $id;
     if(isset($_SESSION["cart"])){

     switch($myaction){
        case "add":
         echo $myaction;
         //$cart->addItem($id,1);
          //echo $id;
             break;
         //case "del":
         //$cart->removeItem($id,1);
           //  break;
         //default:
      //echo "default";
        //break;

     }

 }
     if(!isset($_SESSION["cart"])){echo "No session cart";}

 }

 require("translate/template.php");
 require_once "translate/$language.php";
 ?>



<?php include'php-packt/footer.php'; ?>
