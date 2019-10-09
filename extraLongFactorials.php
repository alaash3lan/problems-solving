<?php
/*
https://www.hackerrank.com/challenges/extra-long-factorials/problem
Factorials n > 20 of can't be stored even in a 64 bit

long long variable. Big integers must be used for such calculations. Languages like Java, Python, Ruby etc. can handle big integers, but we need to write additional code in C/C++ to handle huge values.

We recommend solving this challenge using BigIntegers. 
*/

/**
 * using gmp extension to use bignum
 *
 * @param [int] $n
 * @return string
 */
function extraLongFactorials($n):string {
    $fact = gmp_init(1, 10);
    for ($i=$n; $i > 0 ; $i--) { 
       $fact *= $i;
    }
    return gmp_strval($fact);

}
print extraLongFactorials(25);
