package main

import "fmt"
// import "math"




/*
https://www.hackerrank.com/challenges/kangaroo/problem

from the problem the must land in same land in the same jump like x1 +v1*i == x2 + v2*i 
        
        i number of jumps
        x2-x1 =(v1-v2) *i

        i = x2 - x1 / v1 - v2    i must be always int number  numer of jump can't be 1.5

        so (x2 - x1) % (v1 - v2) must return 0 so to be posible to poth of them met in same place


*/
func kangaroo(x1 int32, v1 int32, x2 int32, v2 int32) string {


       if (v2 >= v1) {
            return("NO");
        } else {
            if ((x2 - x1) % (v1 - v2) == 0) {
                return("YES");
            } else {
                return("NO");
            }
        }

      

    

}



func main(){

fmt.Println(kangaroo(4523, 8092, 9419, 8076))
fmt.Println(kangaroo(21, 6, 47, 3))

 
 


  
 



}
