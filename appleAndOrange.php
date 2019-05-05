<?php

/*

https://www.hackerrank.com/challenges/apple-and-orange/problem


*/

function countApplesAndOranges($s, $t, $a, $b, $apples,$oranges) {

         
    
          $applesN = 0;
          $orangesN = 0;

foreach ($apples as  $value) {
	if ($value+$a >= $s and $value+$a <= $t) {
		
		
		$applesN++;
	}
}

foreach ($oranges as  $value) {
	if ($value+$b >= $s and $value+$b <= $t) {
		
		
		$orangesN++;
	}
}

echo"$applesN\n" ;
echo "$orangesN\n";


}


countApplesAndOranges(7,10,4,12,[2,3,-4],[3,-2,]);
