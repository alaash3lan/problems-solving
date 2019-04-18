package main

import "fmt"
// import "regexp"
import "strconv"




func a (s string) string{
  n:= 0

  sh := string(s[:2])
  h, err := strconv.Atoi(sh)
    if err != nil {
        fmt.Println(err)
    }

  if string(s[8:]) == "AM" {

    if h >= 12 {

      n = 12 - 12

      return  strconv.Itoa(n) + "0" + s[2:8]



    }
   
   return s[:8]

  }
   if h >= 12 {

    return strconv.Itoa(h) + s[2:8]


   }



  n = 24-(12-h)
  
  return strconv.Itoa(n) + s[2:8]
  





}



func main(){


  fmt.Println(a("12:45:54PM"))
 



}
