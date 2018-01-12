<?php echo $lang['SMENU3'];?>
<article class="myarticlecom">
<?php
       require_once('./lib/Catclass.class.php');
       $catalog=new Catclass();
       $catalog->showcatalog(1);
               ?>
</article>
<!-- for call the product of woman-Watch -->
