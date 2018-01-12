<?php echo $lang['SMENU6'];?>
<article class="myarticlecom">
<?php
       require_once('./lib/Catclass.class.php');
       $catalog=new Catclass();
       $catalog->showcatalog(3);
               ?>
</article>

<!-- for call the product of Man-Watch -->
