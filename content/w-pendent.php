<?php echo $lang['SMENU4'];?>
<article class="myarticlecom">
<?php
       require_once('./lib/Catclass.class.php');
       $catalog=new Catclass();
       $catalog->showcatalog(2);
               ?>
</article>
<!-- for call the product of woman-anhäng -->
