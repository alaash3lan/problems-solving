package main

import "fmt"




/*
   https://www.hackerrank.com/challenges/anagram/problem
 

*/

/*
   1: check if word length is even
   2: split s string into two words 
   3: if y[] contains element i : append element to the new x if not append it and incres count ++
 

*/






func anagram(s string) int32 {
   nx := []string{}
   x  := []string{}
   y  := []string{}
   l  := len(s)
   count := 0

   if l % 2 == 1 {
     return -1

   }


  
  for i,char := range s {

      if i >= l/2 {

      y = append(y, string(char))
      continue


      }

      x = append(x, string(char))
  
  }

  contains := func (s []string, e string) bool {
    for i, a := range s {
        if a == e {
           x = append(x[:i],x[i+1:]...)
           return true
        }
    }
    return false
}
 
  // [a b c ]  [ c d e]
   for i:= 0 ;i < len(y); i++ {

      if contains(x,y[i]) {
         
         nx = append(nx,y[i])

         continue


      } else if !contains(x,y[i]) {

        count ++
        nx = append(nx,y[i])

             



      }
    


 }
  


  fmt.Println(x,y)
  fmt.Println(nx) 
  fmt.Println(count)

  return int32(count)

}


  

func main(){
  anagram("xaxbbbxx")
  // fmt.Println(anagram("xaxbbbxx"))



}
