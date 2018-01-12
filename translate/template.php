




         <?php
         session_start();
         if (isset($_SESSION["user"])){


             echo "<a id=\"reg\" href=\"index.php?in=logoutpage\">LogOut</a><br>";

         $clientName= $_SESSION["user"];
         if($clientName!='shopadmin'){
             echo " <a id=\"reg\" href=\"index.php?in=shopcart\">ShoppingCart</a>";



         }
         if ($clientName==='shopadmin'){


         echo "<p>&raquo; <a class=\"email\" href=\"index.php?in=admin-p\">New item</a></p>";}}
         if (!isset($_SESSION["user"])){
             echo "<a id=\"reg\" href=\"index.php?in=login\"></a><br>"; // call to login page

         }
          ?>

       </div>

        <section id="content">
        <?php
        require("content/$option.php");
        require_once "translate/$language.php";
        ?>
        </section>
