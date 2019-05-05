<?php

/*

      https://www.hackerrank.com/challenges/divisible-sum-pairs/problem



*/
function divisibleSumPairs ($n, $k, $ar) {

	$count = 0;

	for ($i=0; $i<$n; $i++) { 
		
		for ($j=$n-1; $j > $i; $j--) {


			if (($ar[$i]+$ar[$j]) %$k == 0) {

				$count ++;
			

				
			}


			
		}


	}


	return $count;

   

}


divisibleSumPairs(6,3,[1,3,2,6,1,2]);
