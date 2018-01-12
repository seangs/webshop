
<article>
<div id="title">
    <img src="images/tissot-mark.jpg" alt="#" style="width:13%;">
  </div>

	<!--	<div class="post">
			<a href="woman-watches-details.html">
        <img src="../images/w-uhr.png" alt=""></a>
			<p style="float: left;">  CELLINI TIME</p>
			<p style="float: right;"> 39mm, 18 Karat Everose-Gold, poliert</p>

		</div> -->

    <?php
      include"../functions/connect.php";

      //$sql = mysqli_query($dbconnect,"SELECT * FROM `webstore`.`product-sale` LIMIT 10");
      // for check the connection

      /*if(!$sql)
      {
        die("Connection failed:".mysqli_connect_error());
      }*/
      $result = $dbconnect->query("SELECT * FROM `webstore`.`product` WHERE `Type`=1 LIMIT 10");

      //$result= mysqli_query($dbconnect,"SELECT * FROM `webstore`.`product-sale` WHERE `Type`=1 LIMIT 10");
      if($result->num_rows)
      {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class=\"post\">
           <a href='woman-watches-details.php?id=".$row["ID"]."'>
           <img src='images/w-uhr".$row["ID"].".png' alt=''></a>
            <p style=\"float: left;\">  TiTle:";
            echo "&nbsp".$row["Name"]."&nbsp"."&nbsp"."&nbsp" . "".$row["Price"]."  </p>
            <br> <p style=\"float: left;\"> Casse:";
            echo "".$row["Casse"]."&nbsp"."&nbsp". "".$row["Reference"]."&nbsp"."&nbsp"."&nbsp" ."Amount:".$row["Amount"]."</p>
              </div>";
        }
      }   else {
        echo "0 results";
      }
      mysqli_close($dbconnect);


   ?>
	</article>
