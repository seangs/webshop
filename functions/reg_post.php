<?php
?>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Proceed registration</title>
    </head>
<body>

<?php
$first = $_POST['fname'];
$last = $_POST['faname'];
$mail = $_POST['email'];
$user = $_POST['userid'];
$pass = $_POST['password'];
if($first!==''&&$last!==''&&$user!==''){
$res=0;
return_res($user);
$str ="  ; ";



      if($res===1){
            echo "<span class=\"menuhead\">There is such user name </span><br>";
            $link="../register.php?in=register";
               echo "<a href=$link>Try other user name,To registrate</a>";

            }
        else{
            $users =  simplexml_load_file("data/users.xml");
            $newUser = $users->addChild("$user");
            $newUser->addChild("fname", $first);
            $newUser->addChild("faname", $last);
            $newUser->addChild("email", $mail);
            $newUser->addChild("userid", $user);
            $newUser->addChild("password", $pass);
            $users->asXML("data/users.xml");

            $logins = simplexml_load_file("data/logins.xml");
            $newLogin = $logins->addChild("login");
            $newLogin->addChild("userid", $user);
            $newLogin->addChild("password", $pass);
            $logins->asXML("data/logins.xml");

                include('connect.php');
                    $dbconnect->query("INSERT INTO clients (username,Firstname,Lastname,email)VALUES ('$user','$first','$last','$mail');");
                    $dbconnect->close();

                    echo '<span class="menuhead">Registration form submitet </span><br>';
                    echo "Hello $first $last";
                    echo  "<a href='../container/login.php'>To logIn </a>";
            }
}
else{
    echo "Form is not valid";
    }

function return_res($username){
    $logins = simplexml_load_file("data/logins.xml");
    global $res;

  foreach ($logins->login as $login) {
  if($login->username==$username){
       $res=1;
   }
  }
    return $res;
 }
?>

</body>
</html>
