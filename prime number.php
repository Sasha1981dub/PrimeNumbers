<?php
//iteration array untill X is under 100
for ($x = 1; $x <= 100; $x++) {
  // divider
   $y = 2;
   //i set an array for store the factors
   $factors = array();
   //at least ones, chech if each number in the array is divisible by 2 and is different than 2
 
   do {           
       if ( $x % $y == 0 and $x != $y) {
           //store the result in Y
           $factors[] = $y;
       }
       //next step
       $y++;
       //while tha factors are under or equal to 10
   }while ($y <= 10);
  
   if (count($factors) == 0) {
      
       echo $x."[PRIME]";
       echo "<br />";
   }else {
      
       echo $x." --> ";
       foreach($factors as $factor) {
           echo "$factor ";}
           echo "<br />";
   }
}

