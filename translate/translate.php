<?php
/**
*Description of Translator
*
*  @author sotheary seang

*$textsde ist eine arrayName for store tittle
*/

  class Translator
  {

    public static function translate($l)
    {
      if($l=='de'){
        $textsde = array('SMENU1' => 'Schmuck',
                        'SMENU2'=>'Frauen',
                        'SMENU3' =>'F-Uhr',
                        'SMENU4' =>'F-Anhäng',
                        'SMENU5' =>'Männer',
                        'SMENU6' =>'M-Uhr',
                        'SMENU7' =>'Über Uns',
                        'SMENU8' =>'Kontakt');
        return $textsde ;
         // echo "deutsch- Menu";
      }

      if($l=='en'){
        $textsen = array('SMENU1' => 'Jewelery',
                        'SMENU2'=>'Woman',
                        'SMENU3' =>'W-Watch',
                        'SMENU4' =>'W-Pendent',
                        'SMENU5' =>'Man',
                        'SMENU6' =>'M-Watch',
                        'SMENU7' =>'About',
                        'SMENU8' =>'Contact');
                        // echo "english- Menu";
        return $textsen ;

      }

    }
}


 ?>
