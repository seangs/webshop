<?php
// for php file

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loging-Account</title>
    <!-- for the links file -->
    <link rel="stylesheet" href="../assets/login.css" type="text/css" >
    <link rel="stylesheet" href="../assets/register.css" type="text/css" >
    <!-- for  loging validateform  -->

    <script>

        function validateForm()
         {
           var form = document.forms["login"];
           var name = form["username"].value;
           if(!name)
           {
             alert(" Please enter your UserName !");
             return false;
           }
           var pass= form["password"].value;
           if(!pass)
           {
             alert(" Please input your Password !");
             return false;
           }
           return true;
        }

    </script>

  </head>
  <body onload="document.login.username.focus();">
    <figure>
      <form class="login" name="login" action="../functions/login_post.php" method="post" onsubmit="return validateForm();">
        <fieldset>
          <legend>Login To Account</legend>
          <div class="control">
            <div class="user">
              <label for="user"style="margin-right:22px;">User:</label>
              <input id="user" type="text" name="username" value="" placeholder="Your Name" required>
            </div><br>
            <div class="password">
              <label for="password">Password:</label>
              <input id="password" type="password" name="password" value="" required>
            </div><br>
            <div class="submit">
              <input type="submit" name="login" value="Sign In">
              <input type="reset" name="Clear" value="reset"><br><br>

            </div>
            <div id="register">
              <a href="register.php">Create-Account</a>
              <a href="../index.php">Cancel</a>
            </div>
        </div>
        </fieldset>
      </form>
    </figure>

  </body>
</html>
