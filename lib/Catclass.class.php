<?php
  /**
   * for selection the product from product Type
   */

  class Catclass
  {
      public function showproducttype($number)
      {
        include('../functions/connect.php');
        $result=$dbconnect->query( "SELECT * FROM product WHERE Type=$number LIMIT 7;"); // i want to show only 7 pro page , " do the next prev. page later"
        while ($row = $result->fetch_assoc()) {
          $toprint = "Name:".$row["Name"]."Price:".$row["Price"]."Casse:".$row["Case"]."Photo:".$row["Photo"]."Type:".$row["type"]."Amount:".$row["amount"]."Reference:".$row["Reference"]."<br>";
          echo " &nbsp;". " &nbsp;";
          $productId=$row["Id"];
          echo $toprint;

          if(isset($_SESSION["user"]))
          {
            if(isset($_SESSION["cart"]))
            {
              echo " <form action='index.php?in=classFunct' method='POST'>";
              echo "<input type='hidden' name='action' value='add'>";
              echo "<input type='hidden' name='product' value='$productId'>";
              echo "<input type='number' name='quantity' min='1' max='3'";
              echo "<p><input type='submit' name='action2' value='To buy' /></p>";
              echo "</from>";
            }
            if(!isset($_SESSION["cart"])){

                  echo "<form action='functions/adminCorrections.php' method='POST'>";
                      echo "<input type='hidden' name='product' value='$productId'>";
                      echo "<input type='varchar' name='new_price'";
                      echo "<p><input type='submit' name='action1' value='To correct price'/></p>";
                      echo "<p><input type='submit' name='action1' value='To delete the item above'/></p>";
                      echo "</form>";


               }
            }
         }


               $dbconnect->close();
      }

  }

  ?>
