<?php

/*

    Recursion: Fibonacci Numbers 

    https://www.hackerrank.com/challenges/ctci-fibonacci-numbers/problem?h_r=internal-search


*/


function fib($n){
    $f = [0,1];     
    $j = 2;

	$re =  function ($j,$f,$n) use (&$re)
	{

		 switch ($n) {
		 	case 0:
		 		echo 0;
		 		return;
		 	
		 	case 1:
		 		echo 1;
		 		return;
		             }
                 
    $v =  $f[$j-1] + $f[$j-2];
    array_push($f, $v);
        
		if ($j == $n )
		{
			
            return $v;
		}
		if ($j == 30) {
          
          return;
      
		}

		
		$j++;
		$re($j,$f,$n);
		
	};
	$re($j,$f,$n);

   }



$n = 5;
echo fib($n);
