<?php 
      $array = ['1','3','4','6','9','33','55','66','77','88','456'];
     
      $a ='';

      for ($i=0; $i < 9; $i++) { 
      	
          if ($array[$i] > $array[$i+1]) {
          	$array[$i+1] = $array[$i];
          }
      }

       var_dump($array);
 ?>