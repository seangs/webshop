<?php

  /**
   *
   */
  class Cart
    {
      private $products = [] ;

      public function addItem($product,$num)
      {
        if(!isset($this->shopstore[$product]))
        {
          $this->shopstore[$product]=0;
        }
        $this->shopstore[$product] += $num;

      }

      public function removeproduct($product,$num)
      {
        if(isset($this->shopstore[$product]))
        {
          $this->shopstore[$product] -= $num;
          if($this ->shopstore[$product] >=0)
          {
            unset($this->shopstore[$product]);
          }
        }
      }

      public function getproducts()
      {
        return $this->shopstore ;
      }

      public function isEmpty()
      {
        returncount($this->shopstore)==0;
      }

      public function render()
      {
        if($this ->isEmpty())
        {
          echo "<div class=\"cart empty\">[Empty Cart] </div>";

        }else {
          echo"<div class=\"cart\"><table>";
          echo"<tr><th>Product ID </th><th> Amount </th></tr>";
          foreach ($this ->shopstore as $product=>$num)
          {
              echo"<tr><td>$product</td><td>$num</td></tr>";
          }
          echo "</table></div>";

        }
      }
    }
