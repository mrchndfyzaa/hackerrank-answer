
def findZigZagSequence(a, n):
    a.sort()
    mid = int((n - 1)/2) #find the middle ==PEMBENARAN 1
    a[mid], a[n-1] = a[n-1], a[mid] # a[n-1] -> the last element of array

    st = mid + 1 
    ed = n - 2 #jika n-1 maka nilainya adalah index ke 6, sedangkan index ke 6 itu adalah last element ==PEMBENARAN 2
    while(st <= ed):
        a[st], a[ed] = a[ed], a[st]
        st = st + 2 
        ed = ed - 1 #biar loopingnya berhenti, jadi cuma ngeswap a[4] sama a[5]

    for i in range (n):
        if i == n-1:
            print(a[i])
        else:
            print(a[i], end = ' ')
    return

# Input ->
# [1, 2, 3, 4, 5, 6, 7]

# Output ->
# [1, 2, 3, 7, 6, 5, 4]

test_cases = int(input())
for cs in range (test_cases):
    n = int(input())
    a = list(map(int, input().split()))
    findZigZagSequence(a, n)


# Permasalahan

# [PERBAIKI TEST CASE]
# In this challenge, the task is to debug the existing code 
# to successfully execute all provided test files.

# Given an array of n distinct integers, transform the array 
# into a zig zag sequence by permuting the array elements. 
# A sequence will be called a zig zag sequence if the first k  
# elements in the sequence are in increasing order and the 
# last k elements are in decreasing order, where 
# k = (n+1)/2. You need to find the lexicographically 
# smallest zig zag sequence of the given array.

# Input ->
# [2, 3, 5, 1, 4]

# Output ->
# [1, 4, 5, 3, 2]

# Limit ->
# 1 <= t <= 20, t represents the number of test cases
# 1 <= n <= 10000, n represents the number of array elements,
# n always odd
# 1 <= ai <= 1000000000, ai represents the value of array ke-i 