#return sum of array
def simpleArraySum(ar)
   sum  = 0
   ar.each { |e| sum +=e }
   sum

end
ar  =  [1,77,854,515,81]
p simpleArraySum ar
