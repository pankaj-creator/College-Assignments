# A naive recursive implementation 
# of 0-1 Knapsack Problem 

# Returns the maximum value that 
# can be put in a knapsack of 
# capacity W 


def knapSack(N, wt, val, n): 

	# Base Case 
	if n == 0 or N == 0: 
		return 0

	# If weight of the nth item is 
	# more than Knapsack of capacity W, 
	# then this item cannot be included 
	# in the optimal solution 
	if (wt[n-1] > N): 
		return knapSack(N, wt, val, n-1) 

	# return the maximum of two cases: 
	# (1) nth item included 
	# (2) not included 
	else: 
		return max( 
			val[n-1] + knapSack( 
				N-wt[n-1], wt, val, n-1), 
			knapSack(N, wt, val, n-1)) 

# end of function knapSack 


#Driver Code 
val = [60, 50] 
wt = [5, 10] 
N = 10
n = len(val) 
print (knapSack(N, wt, val, n))

# Program end 
