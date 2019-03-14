
# Given a square matrix, calculate the absolute difference between the sums of its diagonals.

def diagonalDifference(arr)
    n = arr.length
    dim1 = 0
    dim2 = 0
    i = 0
    f = n-1
    while i < n do 
        dim1 += arr[i][i]
        dim2 += arr[i][f]
        f -= 1
        i += 1
    end

    (dim2-dim1).abs 



end
arr  = [[1,2,3],[8,5,6],[5,8,5]]
p diagonalDifference arr
