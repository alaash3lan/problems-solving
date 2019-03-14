#Given an array of integers, calculate the fractions of its elements that are positive, 
#negative, and are zeros. Print the decimal value of each fraction on a new line.


def plusMinus(arr)
   n =  arr.length.to_f
    zero  = 0
    plus = 0
    minus = 0


    arr.each do |e|
     minus += 1 if e < 0
     zero +=1 if e == 0
     plus +=1 if e > 0
    end

    puts plus/n
    puts minus/n
    puts zero/n 
    


end
arr = [0,-1,88,-8,22,0,0,0,-99]
plusMinus(arr)
