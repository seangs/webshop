<?php
// include('function/register_post.php');
// SESSION_START();

  if(isset($_SESSION["user"]))
  {
    // create one new small window
    echo "<!DOCTYPE html>\n";
    echo "<html><head>/*...*/</head><body>";
    echo "<h3>You did not finish a session</h3><p>You should log out for new registration or continue </p>";



    echo "</body></html>";
exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Account</title>
    <!-- for the links file -->
    <link rel="stylesheet" href="../assets/register.css" type="text/css">
      <!-- for register validateForm -->
      <script>
          function validateForm()
          {
            var form = document.form["register"];
            var name =  form["fname"].value;
            var name1 = form["faname"].value;
            var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // XXXXXX@XXX
	           // at least one number, one lowercase and one uppercase letter
             // at least six characters that are letters, numbers or the underscore
   			    // var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;
             if(!name)
               {
                 alert("Please enter a name!");
                   return false;
               }
               // for check first name and user id
               var name = form["userid"].value;
               var regex2 = '/^[a-z0-9_]+$/';
                   if (!regex2.test(name)) {
                   alert("Please enter a username!");
                   return false;
                   }
                     var user=form["userid"].value;
                     var regexus= '/^[a-z0-9_]+$/';

                     if(!regexus.test(user)) {
                      alert("For username, use, please, letters, number and_!");
                      return false;
                     }
                   var pass = form["password"].value;
                      if (!pass) {
                       alert("Please enter a password!");
                       return false;
                       }
                       return true;

              // for checck the email if correct !!
                var mail=form["email"].value;
               if(mail.value.match(mailformat))
                {
                  return true;
                } else {
                  alert("You have entered an invalid email address!");
                    mail.focus();
                    return false;
                }
          /*      not work ( do it later !! )

                var umsex = document.register.mgender;
                  var ufsex = document.register.fgender;
                  function validsex(umsex,ufsex){
                    {
                      x=0;

                      if(umsex.checked)
                      {
                      x++;
                      } if(ufsex.checked)
                      {
                      x++;
                      }
                      if(x==0)
                      {
                      alert('Select Male/Female');
                      umsex.focus();
                      return false;
                      }
                    }
              */



             }
      </script>
  </head>
  <body onload="document.register.fname.focus();">
    <figure>
      <form class="register" name="register" action="../functions/reg_post.php" method="post" onsubmit="return validateForm();">
        <fieldset>
          <legend>Register Account</legend>

          <div class="control-re">
            <label for="name" style="margin-right=10px;">First Name:</label>
            <input id="fname" type="text" name="fname" value="" pattern="[A-Z][a-z]+" required><br>
            <label for="faname">Family Name:</label>
            <input id="faname" type="text" name="faname" value="" pattern="[A-Z][a-z]+"  required><br>
            <label for="userid">User ID:</label>
            <input id="id" type="text" name="userid" value="" pattern="[a-z0-9_]+" required><br>
          </div>
          <div class="email-re">
            <label for="email">E-mail:</label>
            <input id="email" type="email" name="email" value="" placeholder="Email Address" required>
          </div>

        <!--  <div class="date-re">
            <label for="birthdate">Date of Birth:</label>
            <input id="date" type="text" name="date" value="" placeholder="DD" required>
            <input id="date" type="text" name="date" value="" placeholder="MM" required>
            <input id="date" type="text" name="date" value="" placeholder="JJJJ" required>
          </div>

          <div class="gender-re">
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Male">Male<br><br>
          </div>

           -->
          <div class="password-re">
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" value="" required><br>
          <!--  <label for="password">Confirm-Password:</label>
            <input id="password" type="password" name="password" value="" required> -->
          </div>
          <div class="submit-re">
            <input type="submit" name="register" value="Register">
            <Input type="reset" class="reset" value="Clear">

          </div>
          <div id="back-re">
            <a href="../index.php"> Go Back </a>
          </div>
        </div>

        </fieldset>

      </form>
    </figure>

  </body>
</html>
