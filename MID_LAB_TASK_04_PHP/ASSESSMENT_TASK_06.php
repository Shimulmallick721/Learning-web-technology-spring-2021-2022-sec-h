<?php
  $x=10;

  $a = array(1,4,3,2,8,6,5,7,8,9,10);

  for ($i=0; $i <count($a) ; $i++) { 
    if ($x==$a[$i]) {

    	   echo "Match Found";

    	    	break;

    	    if ($x!==$a[$i]) {
    	    	$i++;
            
    	    }
    	    else
    	    	echo "No Match Found";
         }
    }
?>