<!-- for set cookie-->

<?php
// for connect to autoloader
require_once('../autoloader.php');
?>
<html>
    <head>

        <meta charset="UTF-8">

<body>
    <header>Proceed Login</header>


<?php
session_start();
$newuser=1;

$first = $_POST['username'];
$pw = $_POST['password'];
    //echo $first;
    //echo $pw;
$logins = simplexml_load_file("../data/logins.xml");
   foreach ($logins->login as $login)
    {
       if($login->username==$first)
       {
           $password=$login->password;
           if($password==$pw)
           {
             echo "You are loged in";
             $link="../index.php?in=maincontent";//  get the value of index baxk
             echo "<a href=$link>Continue</a>";
             $newuser=0;
             $_SESSION["user"] = $first;
                if($_SESSION["user"]!="shopadmin"){
                   if (!isset($_SESSION["cart"]))
                    {
                     $mycart=new Cart();
                     $_SESSION["cart"] = serialize($mycart);

                     $cart = $mycart;
                   }
                }
           $newuser=0;
           }
           if($password!=$pw){
              echo "Password is wrong,try again";
              $link="../content/login.php?in=login";

              echo "<a href=$link>To login</a>";
           $newuser=0;
           }
       }
   }
       if($newuser==1){
           echo "You are not registrated !! Please, registration your Account !!";
          // echo "<a href=$link>To login</a>";
          // $newuser=0;

          echo "<a href=\"../content/register.php\">To registrate</a>";
       }
           //echo $login->username;
           //echo $login->password;
  // }

?>

</body>
</html>
