#Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.
#Then print the respective minimum and maximum values as a single line of two space-separated long integers.

def mini_max_sum (arr)
    sum = 0
    max = arr[0]
    min = arr[0]
    for x in arr
        sum +=x
        max = x if x > max
        min = x if x < min
    end
    puts "#{sum-max} #{sum-min}"
end
arr = [5,5,88,5,5]
mini_max_sum arr
