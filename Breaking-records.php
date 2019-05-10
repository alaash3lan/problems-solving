<?php 

/*
     
     https://www.hackerrank.com/challenges/breaking-best-and-worst-records/problem

*/



function breakingRecords($scores) {

	$min = $scores[0];
	$max = $scores[0];

	$cMi= 0;
	$cMa= 0;
     
    $i = 0; 
     while($i < sizeof($scores)) {
        
       if($scores[$i] > $max ) {
       	$cMa++;
       	$max =  $scores[$i];

       }
       elseif ($scores[$i] < $min) {

        $cMi++;
       	$min =  $scores[$i];

      
       }
       
       $i++;
    
     }

return [$cMa,$cMi];



}


breakingRecords([3,4,21,36,10,28,35,5,24,42]);
?>
