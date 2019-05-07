<?php

/*

    

     https://www.hackerrank.com/challenges/missing-numbers/problem

*/


function missingNumbers($arr, $brr) {

	$a = [];

	for ($i=0; $i < sizeof($brr) ; $i++) { 

        $key = array_search($brr[$i],$arr);
		if($key === false) {
			
			array_push($a, $brr[$i]);
			

			continue;
		} 
       
		 unset($arr[$key]);
			
	

	}
  sort($a);
  retutn $a ;
    


}


missingNumbers([204,203,205,206,207,208,203,204,205,206],[203 ,204 ,204 ,205 ,206 ,207 ,205 ,208 ,203 ,206 ,205 ,206 ,204]);
